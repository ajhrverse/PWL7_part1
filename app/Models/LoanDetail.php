<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoanDetail extends Model
{
    public function returnData(){
        return $this->hasOne(ReturnModel::class, 'loan_detail_id');
    }
    protected $fillable = [
        'loan_id',
        'book_id',
        'is_return'
    ];

    public function loan()
    {
        return $this->belongsTo(Loan::class);
    }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function returns()
    {
        return $this->hasMany(ReturnModel::class);
    }
}
