<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/dasboard', function(){
    $user = User::first();
    return view('dasboard', compact('user'));
});

Route::get('/', function () {
    return view('welcome');
});
