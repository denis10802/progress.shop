<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all()->reverse();

        return view('admin.products.index',[
            'products'=>$products,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all()->reverse();
        return view('admin.products.create',[
            'categories'=>$categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();

        $product->image = $request->file('image')->store('uploads','public');
        $product->title = $request->title;
        $product->wholesale = $request->wholesale;
        $product->retail = $request->retail;
        $product->cat_id = $request->cat_id;
        $product->descr = $request->descr;
        $product->slug = Str::of($request->title)->slug('-');

        $product->save();

        return redirect()->back()->with('success','Ваш товар успешно добавлен');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all()->reverse();
        return view('admin.products.edit',[
            'categories'=>$categories,
            'products'=>$product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {


        $product->title = $request->title;
        $product->wholesale = $request->wholesale;
        $product->retail = $request->retail;
        $product->cat_id = $request->cat_id;
        $product->descr = $request->descr;
        $product->slug = Str::of($request->title)->slug('-');
        $product->save();

        return redirect()->back()->with('success','Ваш товар успешно обновлен');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        Storage::disk('public')->delete($product->image);
        $product->delete();
        return redirect()->back()->with('success','Товар удален');
    }
}
