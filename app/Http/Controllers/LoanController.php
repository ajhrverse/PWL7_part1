<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loan;

class LoanController extends Controller
{
    public function show($id){
        $detail = loan_detail::with('returnData')->findOrFail($id);
        return view('loan_detail.show', compact('detail'));
    }
     public function index()
    {
        $loans = Loan::with(['user','loanDetails.book'])->get();
        return view('loans.index', compact('loans'));
    }
}
