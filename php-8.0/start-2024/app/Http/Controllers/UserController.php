<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function getAll() {
        // $users = User::whereHas('role', function(Builder $query) {
        //     $query->where('id', 1);
        // })->get();
        // $users = User::find(1)->role;
        $users = User::with('role')->get();
        // dd($users);
        return $users;
    }

    // web
    public function home() {
        return view('user.index');
    }
}
