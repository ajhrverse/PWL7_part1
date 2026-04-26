<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bookshelf extends Model
{

    protected $table = 'bookshelfs';

    protected $fillable = [
        'code',
        'name'
    ];

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}