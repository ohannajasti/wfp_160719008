<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClassificationController extends Controller
{
    public function index(){
        $data = DB::table('classifications')->get();
        return view('classification.index',compact('data'));
    }
}
