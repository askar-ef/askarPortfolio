<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use App\Jobs\SendMailJob;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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
        return redirect()->route('login')->with("Email verifikasi talh terkirim, silahkan login untuk masuk ke profil Askar");
        // return "Email verifikasi talh terkirim, silahkan login untuk masuk ke profil Askar";
    }

    // public function sendVerif(Request $request)
    // {
    //     $data = $request->all();

    //     $name = $data['name'];
    //     $email = $data['email'];

    //     Mail::to($email)->send(new SendEmail(['name' => $name, 'subject' => 'Pendaftaran Berhasil', 'body' => 'Selamat anda telah berhasil registrasi. Silahkan login kembali maka Anda akan melihat profil Askar']));
    //     return "Email verifikasi berhasil dikirim";
    // }


    public function index()
    {
        $user = Auth::user();
        return view("emails.kirim-email", ['name' => $user->name], ['email' => $user->email]);
    }



    public function store(Request $request)
    {
        $data = $request->all();

        dispatch(new SendMailJob($data));
        return redirect()->route('kirim-email')->with('success', 'email berhasil dikirim');
    }

    // public function store(Request $request)
    // {
    //     $data = $request->all();

    //     dispatch(new SendMailJob($data));
    //     return redirect()->route('kirim-email')->with('success', 'email berhasil dikirim');
    // }
}
