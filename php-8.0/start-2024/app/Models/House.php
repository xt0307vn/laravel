<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class House extends Model
{
    use HasFactory;

    protected $table="house";

    public function users() {
        return $this->belongsToMany(User::class, 'foreign_house_user', 'house_id', 'user_id');
    }
}
