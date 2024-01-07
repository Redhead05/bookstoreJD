<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class FamousAuthorController extends Controller
{
    public function index()
    {
        $datasFamous = Book::orderBy('voters', 'desc')
        ->simplePaginate(5);


        // dd($datasFamous->toArray());
        return view('pages.famous_author', compact('datasFamous'));
    }
}
