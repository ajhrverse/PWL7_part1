<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoanDetail;

class LoanDetailController extends Controller
{
     public function index()
{
    $details = LoanDetail::with(['loan','book','returns'])->get();
    return view('loan_details.index', compact('details'));
}
}
