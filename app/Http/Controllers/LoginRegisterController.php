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
            "logout", "dashboard", "users"
        ]);
    }
    public function register()
    {
        return view("auth.register");
    }

    // // intervension
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
            $filenameSimpan = $filename . '_' . time() . '.' . $extension;

            // Simpan gambar asli
            $path = $image->storeAs($filenameSimpan);

            // Buat thumbnail (300x200)
            $thumbnail = Image::make($image);
            $thumbnail->fit(150, 75);
            Storage::disk('public')->put('photos/thumbnails/' . $filenameSimpan, $thumbnail->stream());

            // Buat square (150x150)
            $square = Image::make($image);
            $square->fit(150, 150);
            Storage::disk('public')->put('photos/squares/' . $filenameSimpan, $square->stream());
        } else {
            // Jika tidak ada gambar yang diunggah, set $path ke null
            $path = null;
        }

        // Tambahkan pengguna dengan atau tanpa gambar
        $user = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
            'photo' => $path
        ]);

        if ($user) {
            // Jika pengguna berhasil dibuat, arahkan ke halaman login
            $credentials = $request->only("email", "password");
            Auth::attempt($credentials);
            $request->session()->regenerate();
            return redirect()->route("kirim-verif")->withSuccess("Anda telah berhasil terdaftar dan masuk!");
        } else {
            // Jika terjadi kesalahan, arahkan ke halaman pendaftaran kembali
            return back()->withErrors([
                "message" => "Terjadi kesalahan saat membuat pengguna. Silakan coba lagi.",
            ])->withInput();
        }
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
            return redirect()->route("dashboard")->withSuccess("You have successfully logged in!");
        }

        return back()->withErrors([
            "email" => "You provided credentials do not match in our records.",
        ])->onlyInput("email");
    }

    public function users()
    {
        $user = Auth::user();
        return view("users", compact("user"));
    }

    public function dashboard()
    {
        if (Auth::check()) {
            $user = Auth::user(); // Mengambil pengguna yang saat ini masuk
            return view("auth.dashboard", compact('user'));
        }

        return redirect()->route("login")->withErrors([
            "email" => "Please login to access the dashboard.",
        ])->onlyInput("email");
    }


    public function showUser($id)
    {
        $user = User::find($id);
        return view('user')->with('user', $user);
    }

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
