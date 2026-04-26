<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReturnModel extends Model
{
    // public function loanDetail(){
    // return $this->belongsTo(loanDetail::class, 'loan_detail_id');
    // }
    protected $table = 'returns';

    protected $fillable = [
        'loan_detail_id',
        'charge',
        'amount'
    ];

    public function loanDetail()
    {
        return $this->belongsTo(LoanDetail::class);
    }
}
