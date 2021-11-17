<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = Supplier::paginate(10);
        return view('admin.supplier.index', compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $supplier = $request->all();
        Supplier::create($supplier);
        session()->flash('status', 'New Supplier Succesfully Created');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        //
    }

    public function showAjax(Request $request)
    {
        $id = $request->get('id');
        $supplier = Supplier::find($id);
        $products = $supplier->products;

        return response()->json(array(
            'msg' => view('admin.supplier.showModal', compact('supplier', 'products'))->render()
        ), 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        return view('admin.supplier.edit', compact('supplier'));
    }

    public function editForm(Request $request)
    {
        $id = $request->get('id');
        $supplier = Supplier::find($id);

        return response()->json(array(
            'msg' => view('admin.supplier.editForm', compact('supplier'))->render()
        ), 200);
    }
    public function editForm2(Request $request)
    {
        $id = $request->get('id');
        $supplier = Supplier::find($id);

        return response()->json(array(
            'msg' => view('admin.supplier.editForm2', compact('supplier'))->render()
        ), 200);
    }
    public function saveData(Request $request)
    {
        $attr = $request->all();
        $id = $request->get('id');
        $supplier = Supplier::find($id);
        $supplier->update($attr);
        return response()->json(array(
            'status' => 'ok',
            'msg' => 'supplier updated'
        ), 200);
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
        $attr = $request->all();
        $supplier->update($attr);
        session()->flash("status", "Supplier Sucessfully Updated");
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        $supplier->delete();
        session()->flash('status', "Supplier: '$supplier->nama' successfully deleted");
        return back();
    }

    public function deleteData(Request $request)
    {
        try {
            $id = $request->get('id');
            $supplier = Supplier::find($id);
            $supplier->delete();

            return response()->json(array(
                'status' => 'ok',
                'msg' => 'supplier deleted'
            ), 200);
        } catch (\PDOException $e) {
            return response()->json(array(
                'status' => 'error',
                'msg' => 'supplier is not updated. It may be used in product'
            ), 200);
        }
    }
}
