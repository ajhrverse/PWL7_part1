<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function show($npm){
        $user = $User::with('loans')->where('npm', $npm)->fistOrFail();
        return view('user.show', compact('user'));
    }
     public function index()
    {
        $users = User::with('loans')->get();
        return view('users.index', compact('users'));
    }
}
