<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get("/test", function() {
    return view("test");
});
