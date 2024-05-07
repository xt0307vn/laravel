<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\House;

class HouseController extends Controller
{
    public function list() {
        $house = House::first();
        // dd($house);
        $members = $house->users;
        return view('house.index', compact(['members']));
    }
}
