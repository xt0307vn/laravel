<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Role;
use App\Models\User;

class RoleController extends Controller
{
    public function getAll() {
        $roles = Role::take(1)->get();
        // dd($roles);
        return $roles;
    }

    public function getAllWithUser() {
        $roles = Role::query()
        ->select('name', 'id')
        ->with(['user' => function($query) {
            $query->select('id', 'name', 'role_id'); // phải có khóa chính, khóa ngoại thì mới hoạt động được
        }])
        ->get();

        return $roles;
    }

    public function getWithSelect() {
        $roles = Role::select(['name', 'id', 'user' => User::select(['name'])->where('id', 1)->take(2)])->get();
        return $roles;
    }
}
