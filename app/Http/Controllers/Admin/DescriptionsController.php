<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Description;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DescriptionsController extends Controller
{
    public function index()
    {
        $products = Product::all()->reverse();

        return view('admin.descriptions.index',[
            'products'=>$products,
        ]);
    }

    public function create($id)
    {
        $descriptions = Description::where('product_id',$id)->get();
        $product = Product::where('id',$id)->first();

        return view('admin.descriptions.edit',[
            'descriptions'=>$descriptions,
            'product'=>$product
        ]);

    }

    public function store(Request $request,Description $description)
    {
        $description->name_descr = $request->name_descr;
        $description->descr = $request->descr;
        $description->product_id = $request->product_id;

        $description->save();

        return redirect()->back()->with('success','Ваш товар успешно обновлен');
    }

    public function showUpdateForm($id)
    {

        $description = Description::where('id',$id)->first();
        $product = Product::where('id',$id)->first();

        return view('admin.descriptions.update',[
            'description'=>$description,
            'product'=>$product
        ]);

    }

    public function update(Request $request, $id)
    {
        DB::table('descriptions')->where('id',$id)->update([
            'name_descr' => $request->name_descr,
            'descr' => $request->descr,
        ]);

        return redirect()->back()->with('success','Ваш товар успешно обновлен');
    }


    public function delete($id)
    {
        DB::table('descriptions')->where('id',$id)->delete();
        return redirect()->back()->with('success','Ваш пункт описания удален');

    }
}
