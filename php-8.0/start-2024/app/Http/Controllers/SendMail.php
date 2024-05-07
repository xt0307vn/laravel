<?php

namespace App\Http\Controllers;

use App\Mail\Demo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Registered;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SendMail extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        // config(['mail.mailers.smtp.username' => "xt0307vn.work@gmail.com"]);
        // config(['mail.mailers.smtp.password' => "csxwsncadynrxxsf"]);
        Mail::to('abc@gmail.com')->send(new Demo());

        dd("Thành công");
    }

    public function store1(Request $request): RedirectResponse
    {
        // config(['mail.mailers.smtp.username' => "xt0307vn.work@gmail.com"]);
        // config(['mail.mailers.smtp.password' => "csxwsncadynrxxsf"]);

        $user = User::create([
            "name" => "Xuân Trường",
            "email" => "xt@gmail.com",
            "votes" => 1,
            "role_id" => 2,
            "password" => Hash::make("123"),
        ]);

        event(new Registered($user));
        // dd(User::all());

        dd("Thành công nhé");
    }
}
