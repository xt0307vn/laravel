<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AuthManagerRequest;
use App\Models\User;

class AuthManager extends Controller
{
    //
    function login() {
        return view('login');
    }

    function postLogin(AuthManagerRequest $req) {

        // $rules = [
        //     'email' => 'required',
        //     'name' => 'required',
        // ];

        // $messages = [
        //     'email.required' => "Email không được để trống",
        //     'name.required' => "Tên không được để trống",
        // ];

        // $validated = $req->validate($rules, $messages);
        // $validated = $req->validated();

        // dd(Auth::attempt($credentials));
        // $validatedData = $req->validated();
        // dd($validatedData);

        $credentials = $req->only(['email', 'password']);
        // dd(Auth::attempt(['email' => 'xt0307vn@gmail.com', 'password' => 'password']));
        // dd($req);

        if(Auth::attempt($credentials)) {
            $user = Auth::user();
            // dd($user);
            // if($user->role_id === 1) {
            //     return redirect()->route('admin');
            // }
            // if($user->role_id === 2) {
            //     return redirect()->route('developer');
            // }
            return redirect()->route('home1')->with("success", "Login success");
        }

        return redirect()->route('login')->with("error", "Login failed");
    }

    function register() {
        return view('login');
    }

    function logout() {
        Auth::logout();
        return view('login');
    }

    function signup() {
        return view('signup');
    }

    function store() {


        return view('signup');
    }
}
