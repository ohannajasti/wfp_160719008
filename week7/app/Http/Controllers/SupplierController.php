<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $queryBuilder = DB::table('suppliers')->get();

        //untuk Query dengan Model;
        // $queryModel = Product::all();

        //cara 1: sintaks compact. Berati variable queryBuilder nanti dikenali
        //pada Controller dan View
        return view('supplier.index',compact('queryBuilder'));
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
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        return view('supplier.index',compact('queryBuilder'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        //
    }

    public function showInfo()
    {
        return response()->json(array(
            'msg' =>'Ini adalah informasi terkait data supplier',
            'status'=>'OKE'
        ),200);
    }

    public function showAjax(Request $request){
        $data = ($request->get('id'));

        //ambil data supplier yang dituju
        $data  = Supplier::find($data);

        //ambil data produk yang dipakai pada supplier tersebut
        $dataProduk = $data ->products;
        return response()->json(array(
            'msg'=>view('supplier.showModal',compact('data','dataProduk'))->render()
            //render wajib ada untuk mengenerate string dari ajaz biar bisa baca tag2 an nya
        ),200);
    }
}
