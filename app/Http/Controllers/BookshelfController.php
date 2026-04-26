<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookshelf;

class BookshelfController extends Controller
{
     public function index()
    {
        $bookshelfs = Bookshelf::with('books')->get();
        return view('bookshelfs.index', compact('bookshelfs'));
    }
}
