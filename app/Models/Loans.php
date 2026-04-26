<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loans extends Model
{
    public function user(){
        return $this->belongsTo(user::class, 'user_npm', 'npm');
    }
}
