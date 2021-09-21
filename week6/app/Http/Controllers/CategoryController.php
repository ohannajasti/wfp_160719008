<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        ///untuk Query dengan RAW
        // $queryRaw = DB::select(DB::raw("select * from categories"));

        //untuk Query Builder
        $queryBuilder = DB::table('categories')->get();

        //untuk Query dengan Model;
        // $queryModel = Product::all();

        //cara 1: sintaks compact. Berati variable queryBuilder nanti dikenali
        //pada Controller dan View
        return view('category.index',compact('queryBuilder'));

        //caara 2: sintaks array. Berati variable queryBuilder nanti hanya dikenali
        //pada conroller dan pada View diubah namanya menjadi data. 
        // return view('category.index',['data'=>$queryBuilder]);
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
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
    
    public function showcake($category_name)
    {
        //Create sql
        //1. select * from products inner join categories on products.id = categories.product_id where categories.name=‘tart’
        //2. select count(*) as total from products inner join categories on products.id = categories.product_id
        //Method 1: Query Builder
        //  $data= DB::table('categories')
        // ->join('products','categories.id','=','products.categor_id')
        // ->where('categories.nama_kategori',$category_name)
        // ->get();
        // $result = $data;
        // $getTotalData = DB::table('products')->count();

        //Method 2: Eloquent
        $data = Category::where('nama_kategori',$category_name)->first();
        $result = $data->products;

        //get total product data
        $getTotalData = Product::count();

        return view('report.showcake',compact('category_name','result','getTotalData'));

    }
}
