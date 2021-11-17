<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Supplier;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(10);
        $categories = Category::get();
        $suppliers = Supplier::get();
        return view('admin.product.index', compact('products','categories','suppliers'));
    }

    public function frontend_index()
    {
        $products = Product::paginate(10);
        $categories = Category::get();
        return view('frontend.product.index', compact('products','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        $suppliers = Supplier::get();
        return view('admin.product.create',compact('categories','suppliers'));
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
        $request['filename'] = "https://via.placeholder.com/150";
        $product = $request->all();
        Product::create($product);
        session()->flash('status', 'New Product Succesfully Created');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    public function showMoreProduct(Request $request)
    {
        $id= $request->get('id');
        $product = Product::find($id);
        return response()->json(array(
            'msg' => view('admin.product.showModal', compact('product'))->render()
        ), 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::get();
        $suppliers = Supplier::get();
        return view('admin.product.edit', compact('product','categories','suppliers'));
    }

    public function editModalProductA(Request $request)
    {
        $id = $request->get('id');
        $product = Product::find($id);
        $categories = Category::get();
        $suppliers = Supplier::get();
        return response()->json(array(
            'msg' => view('admin.product.editModalA', compact('product','categories','suppliers'))->render()
        ), 200);
    }

    public function editModalProductB(Request $request)
    {
        $id = $request->get('id');
        $product = Product::find($id);
        $categories = Category::get();
        $suppliers = Supplier::get();
        return response()->json(array(
            'msg' => view('admin.product.editModalB', compact('product','categories','suppliers'))->render()
        ), 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $attr = $request->all();
        $product->update($attr);
        session()->flash("status", "Product Sucessfully Updated");
        return back();
    }

    public function updateData(Request $request)
    {
        $attr = $request->all();
        $id = $request->get('id');
        $product = Product::find($id);
        $product->update($attr);
        return response()->json(array(
            'status' => 'ok',
            'msg' => 'supplier updated'
        ), 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        session()->flash('status', "Product: '$product->nama' successfully deleted");
        return back();
    }

    public function deleteData(Request $request)
    {
        try {
            $id = $request->get('id');
            $product = Product::find($id);
            $product->delete();

            return response()->json(array(
                'status' => 'ok',
                'msg' => 'product deleted'
            ), 200);
        } catch (\PDOException $e) {
            return response()->json(array(
                'status' => 'error',
                'msg' => 'product is not updated. It may be used in product'
            ), 200);
        }
    }

    public function cart(){
        return view('frontend.cart');
    }

    public function addToCart($id){
        $product = Product::find($id);
        $cart = session()->get('cart');
        if(!isset($cart[$id])){
            $cart[$id]=[
                "name"=>$product->name,
                "quantity"=>1,
                "price"=>$product->price_sell,
                "photo"=>$product->fiilename
            ];
        }
        else{
            $cart[$id]['quantity']++;
        }
        session()->put('cart,$cart');
        return redirect()->back()->with('success','Product added to cart successfully!');
    }
}
