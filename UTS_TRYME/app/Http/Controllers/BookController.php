<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('books')->get();
        // dd($data);
        return view('book.index', compact('data'));
    }

    public function academicBook()
    {
        $data = DB::table('books')
            ->join('classifications', 'books.classification_id', '=', 'classifications.id')
            ->where('classifications.name', '=', 'Pelajaran')
            ->select('books.id', 'books.name_book', 'books.author', 'books.publisher')
            ->get();
        // dd($data);
        return view('book.academicbook', compact('data'));
    
    }

    public function komikBook()
    {
        $data = DB::table('books')
            ->join('classifications', 'books.classification_id', '=', 'classifications.id')
            ->where('classifications.name', '=', 'Komik')
            ->where('books.stock', '<', 10)
            ->select('books.id', 'books.name_book', 'books.author', 'books.publisher', 'books.stock')
            ->get();
        // dd($data);
        return view('book.index', compact('data'));
    
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
