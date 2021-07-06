<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Specification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SpecificationsController extends Controller
{
    public function index()
    {
        $products = Product::all()->reverse();

        return view('admin.specifications.index',[
            'products'=>$products,
        ]);
    }

    public function create($id)
    {
        $specification = Specification::where('product_id',$id)->get();
        $product = Product::where('id',$id)->first();

        return view('admin.specifications.edit',[
            'specifications'=>$specification,
            'product'=>$product
        ]);

    }

    public function store(Request $request,Specification $specification)
    {
        $specification->name_param = $request->name_param;
        $specification->param = $request->param;
        $specification->product_id = $request->product_id;

        $specification->save();

        return redirect()->back()->with('success','Ваш товар успешно обновлен');
    }

    public function showUpdateForm($id)
    {

        $specification = Specification::where('id',$id)->first();
        $product = Product::where('id',$id)->first();

        return view('admin.specifications.update',[
            'specification'=>$specification,
            'product'=>$product
        ]);

    }

    public function update(Request $request, $id)
    {
        DB::table('specifications')->where('id',$id)->update([
            'name_param' => $request->name_param,
            'param' => $request->param,
        ]);

        return redirect()->back()->with('success','Ваш товар успешно обновлен');
    }



}
