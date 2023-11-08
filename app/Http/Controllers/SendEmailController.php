<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use App\Jobs\SendMailJob;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class SendEmailController extends Controller
{
    // public function index()
    // {
    //     $content = [
    //         'name' => 'Daffa Askar Fathin',
    //         'subject' => 'Subjet Email',
    //         'body' => 'Bismillah'
    //     ];
    //     Mail::to("daffaaskarfathin@mail.ugm.ac.id")->send(new SendEmail($content));
    //     return "email berhasil dikirim";
    // }

    public function sendVerif()
    {
        $user = Auth::user();
        $email = $user->email;

        $content = [
            'name' => $user->name,
            'email' => $user->email,
            'subject' => 'Ini Subject Verif',
            'body' => 'Selamat anda telah berhasil registrasi. Silahkan login kembali maka Anda akan melihat profil Askar'
        ];
        Mail::to($email)->send(new SendEmail($content));
        return view("auth.login");
        // return "Email verifikasi talh terkirim, silahkan login untuk masuk ke profil Askar";
    }


    public function index()
    {
        $user = Auth::user();
        return view("emails.kirim-email", ['name' => $user->name], ['email' => $user->email]);
    }



    public function updatePhoto(Request $request, $id)
    {
        $user = User::find($id);

        $request->validate([
            "photo" => "image|nullable|max:2000"
        ]);

        if ($request->hasFile('photo')) {
            if ($user->photo) {
                Storage::disk('public')->delete($user->photo);
                Storage::disk('public')->delete('thumbnails/' . $user->photo);
                Storage::disk('public')->delete('squares/' . $user->photo);
            }

            $image = $request->file('photo');
            $filename = uniqid() . '.' . $image->getClientOriginalExtension();
            $pathOriginal = 'photos/original/' . $filename;
            $pathThumbnail = 'photos/thumbnails/' . $filename;
            $pathSquare = 'photos/squares/' . $filename;

            $image = Image::make($image);

            // Simpan gambar asli
            $image->save($pathOriginal);

            // Simpan thumbnail (300x200)
            $thumbnail = $image->fit(300, 200);
            $thumbnail->save($pathThumbnail);

            // Simpan square (150x150)
            $square = $image->fit(150, 150);
            $square->save($pathSquare);

            // Perbarui path foto pada data pengguna
            $user->photo = $filename;
            $user->save();
        }

        return redirect()->route("dashboard")->withSuccess("Foto telah berhasil diperbarui!");
    }



    // public function store(Request $request)
    // {
    //     $data = $request->all();

    //     dispatch(new SendMailJob($data));
    //     return redirect()->route('kirim-email')->with('success', 'email berhasil dikirim');
    // }
    // public function updatePhoto(Request $request, $id)
    // {
    //     $user = User::find($id);

    //     $request->validate([
    //         "photo" => "image|nullable|max:2000"
    //     ]);

    //     if ($request->hasFile('photo')) {
    //         if ($user->photo) {
    //             Storage::disk('public')->delete($user->photo);
    //             Storage::disk('public')->delete('thumbnails/' . $user->photo);
    //             Storage::disk('public')->delete('squares/' . $user->photo);
    //         }

    //         $image = $request->file('photo');
    //         $filename = uniqid() . '.' . $image->getClientOriginalExtension();
    //         $path = $image->storeAs('photos/original', $filename, 'public');

    //         $this->createThumbnailAndSquare($image, $filename);

    //         $user->photo = $path;
    //         $user->save();
    //     }

    //     return redirect()->route("dashboard")->withSuccess("Foto telah berhasil diperbarui!");
    // }

    // private function createThumbnailAndSquare($image, $filename)
    // {
    //     $thumbnail = Image::make($image)->fit(300, 200);
    //     $square = Image::make($image)->fit(150, 150);

    //     Storage::disk('public')->put('thumbnails/' . $filename, $thumbnail->stream());
    //     Storage::disk('public')->put('squares/' . $filename, $square->stream());
    // }


    public function editPhoto($id)
    {
        $user = User::find($id);
        return view('edit', ['user' => $user]);
    }
}
