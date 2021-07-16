<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImageProductController extends Controller
{
    public function showSettingImage($id)
    {
        $product = Product::where('id',$id)->first();
        return view('admin.products.edit_media',[
            'product'=>$product
        ]);

    }
    public function updateImageProduct(Request $request, $id)
    {
        $product = Product::where('id',$id)->first();
        Storage::disk('public')->delete($product->image);

        DB::table('products')->where('id',$id)->update([
            'image' => $request->file('image')->store('uploads','public'),
        ]);

        return redirect()->back()->with('success','Ваш товар успешно обновлен');

    }
}
