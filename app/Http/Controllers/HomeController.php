<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Book::orderBy('average_rating', 'desc')->simplePaginate(10);
        
            
        return view('pages.listing', compact('datas'));
    }


    public function search(Request $request)
    {
        $datas = Book::all();
        $search = $request->search;

        $dataSearch = Book::where(function($query) use ($search){
            $query->where('book_name','like',"$search");
        })
        ->orWhere(function($query) use ($search){
            $query->where('author_id' ,'like',"%$search%");
        });

        return view ('pages.listing', compact('datas','search', 'dataSearch'));

    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}


