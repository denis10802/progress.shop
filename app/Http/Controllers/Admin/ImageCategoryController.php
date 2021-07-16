<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImageCategoryController extends Controller
{
   public function SettingImageCategory($id)
   {
       $category = Category::where('id',$id)->first();


       return view('admin.category.edit_media',[
           'category'=>$category
       ]);

   }

   public function updateImageCategory(Request $request, $id)
   {
       $category = Category::where('id',$id)->first();
       Storage::disk('public')->delete($category->image);

       DB::table('categories')->where('id',$id)->update([
           'image' => $request->file('image')->store('uploads/categories','public'),
       ]);

       return redirect()->back()->with('success','Вашa категория успешно обновлена');

   }
}
