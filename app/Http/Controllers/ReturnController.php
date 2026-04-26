<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReturnModel;

class ReturnController extends Controller
{
    public function index()
    {
        $returns = ReturnModel::with('loanDetail')->get();
        return view('returns.index', compact('returns'));
    }
}
