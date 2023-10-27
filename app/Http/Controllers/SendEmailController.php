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

    public function index()
    {
        $user = Auth::user();
        return view("emails.kirim-email", ['name' => $user->name]);
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
