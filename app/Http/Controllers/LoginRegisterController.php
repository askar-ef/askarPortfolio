<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class LoginRegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware("guest")->except([
            "logout", "dashboard"
        ]);
    }
    public function register()
    {
        return view("auth.register");
    }


    // public function store(Request $request)
    // {
    //     $request->validate([
    //         "name" => "required|string|max:250",
    //         "email" => "required|email|max:250|unique:users",
    //         "password" => "required|min:8|confirmed",
    //         "photo" => "image|nullable|max:2000"
    //     ]);

    //     if ($request->hasFile('photo')) {
    //         $filenameWithExt = $request->file('photo')->getClientOriginalName();
    //         $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
    //         $extension = $request->file('photo')->getClientOriginalExtension();
    //         $filenameSimpan = $filename . '_' . time() . $extension;
    //         $path = $request->file('photo')->storeAs('photos', $filenameSimpan);
    //     }
    //     User::create([
    //         "name" => $request->name,
    //         "email" => $request->email,
    //         "password" => Hash::make($request->password),
    //         'photo' => $path
    //     ]);
    //     $cridentials = $request->only("email", "password");
    //     Auth::attempt($cridentials);
    //     $request->session()->regenerate();
    //     return redirect()->route('kirim-verif')->withSuccess("you have successfully registered and logged in!");
    // }

    // intervension
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|string|max:250",
            "email" => "required|email|max:250|unique:users",
            "password" => "required|min:8|confirmed",
            "photo" => "image|nullable|max:2000"
        ]);

        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $filenameWithExt = $image->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $image->getClientOriginalExtension();
            $filenameSimpan = $filename . '_' . time() . $extension;

            // Simpan gambar asli
            $path = $image->storeAs('photos', $filenameSimpan);

            // Buat thumbnail (300x200)
            $thumbnail = Image::make($image);
            $thumbnail->fit(300, 200);
            Storage::disk('local')->put('thumbnails/' . $filenameSimpan, (string) $thumbnail->encode());

            // Buat square (150x150)
            $square = Image::make($image);
            $square->fit(150, 150);
            Storage::disk('local')->put('squares/' . $filenameSimpan, (string) $square->encode());
        }

        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
            'photo' => $path
        ]);

        $credentials = $request->only("email", "password");
        Auth::attempt($credentials);
        $request->session()->regenerate();
        return redirect()->route('kirim-verif')->withSuccess("Anda telah berhasil terdaftar dan masuk!");
    }

    public function login()
    {
        return view("auth.login");
    }

    public function authenticate(Request $request)
    {
        $cridentials = $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);
        if (Auth::attempt($cridentials)) {
            $request->session()->regenerate();
            return redirect()->route("kirim-email")->withSuccess("You have successfully logged in!");
        }

        return back()->withErrors([
            "email" => "You provided credentials do not match in our records.",
        ])->onlyInput("email");
    }

    // public function dashboard()
    // {
    //     if (Auth::check()) {
    //         return view("auth.dashboard");
    //     }

    //     return redirect()->route("login")->withErrors([
    //         "email" => "please login to access the dashboard.",
    //     ])->onlyInput("email");
    // }

    public function dashboard()
    {
        if (Auth::check()) {
            $user = Auth::user(); // Mengambil pengguna yang saat ini masuk
            return view("users", compact('user'));
        }

        return redirect()->route("login")->withErrors([
            "email" => "Please login to access the dashboard.",
        ])->onlyInput("email");
    }


    // public function showUser()
    // {
    //     $users = User::all(); // Mengambil semua pengguna
    //     return view('users')->with('users', $users);
    // }

    public function showUser($id)
    {
        $user = User::find($id);
        return view('user')->with('user', $user);
    }

    // public function deletePhoto(Request $request)
    // {
    //     if (Auth::check()) {
    //         $user = Auth::user();

    //         // Hapus foto profil jika ada
    //         if ($user->photo) {
    //             $photoPath = public_path('photos/' . $user->photo); // Assuming the photos are stored in the 'photos' directory
    //             if (File::exists($photoPath)) {
    //                 File::delete($photoPath);
    //                 $user->update(['photo' => null]);
    //             }
    //         }


    public function deletePhoto(User $user)
    {
        if (Auth::check()) {
            $user->update(['photo' => null]);
            // $user = Auth::user();

            // Hapus foto profil jika ada
            if ($user->photo) {
                $photoPath = public_path('storage/photos/' . $user->photo);
                if (File::exists($photoPath)) {
                    File::delete($photoPath);
                }
            }

            return redirect()->route("dashboard")->withSuccess("Your profile photo has been deleted!");
        } else {
            return redirect()->route("login")->withErrors([
                "email" => "Please login to access the dashboard.",
            ])->onlyInput("email");
        }
    }


    //         return redirect()->route("dashboard")->withSuccess("Your profile photo has been deleted!");
    //     } else {
    //         return redirect()->route("login")->withErrors([
    //             "email" => "Please login to access the dashboard.",
    //         ])->onlyInput("email");
    //     }
    // }

    // public function logout(Request $request)
    // {
    //     Auth::logout();
    //     $request->session()->invalidate();
    //     $request->session()->regenerateToken();
    //     return redirect()->route("login")->withSuccess("You have logged out successfully!");
    // }



    public function logout(Request $request)
    {
        if (Auth::check()) {
            $user = Auth::user();

            // Hapus foto profil jika ada
            if ($user->photo) {
                $photoPath = public_path('photos/' . $user->photo);
                if (File::exists($photoPath)) {
                    File::delete($photoPath);
                }
            }

            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect()->route("login")->withSuccess("You have logged out successfully and your profile photo has been deleted!");
        } else {
            return redirect()->route("login")->withErrors([
                "email" => "Please login to access the dashboard.",
            ])->onlyInput("email");
        }
    }
}
