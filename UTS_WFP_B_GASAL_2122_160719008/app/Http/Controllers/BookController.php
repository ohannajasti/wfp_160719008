<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index(){
        $data = DB::table('books')->get();
        return view('book.index',compact('data'));
    }
    public function academicBook(){
        $data = DB::table('books')
        ->join('classifications','books.classification_id','=','classifications.id')
        ->where('classifications.name','=','Pelajaran')
        ->select('books.id','books.name_book','books.author','books.publisher')        
        ->get();
        // dd($data);
        return view('book.academicbook',compact('data'));
    }
    public function report($category){
        $data = DB::table('books')
        ->join('classifications','books.classification_id','=','classifications.id')
        ->where('classifications.name','=',$category)
        ->where('stock','<','10')
        ->select('books.id','books.name_book','books.author','books.publisher','books.stock')        
        ->get();
        // dd($data);
        return view('report.index',compact('data'));
    }
    public function comicrequest(){
        $data = DB::table('books')
        ->join('classifications','books.classification_id','=','classifications.id')
        ->where('classifications.name','=','komik')
        ->where('stock','<','10')
        ->select('books.id','books.name_book','books.author','books.publisher','books.stock')        
        ->get();
        // dd($data);
        return view('report.index',compact('data'));
    }
}
