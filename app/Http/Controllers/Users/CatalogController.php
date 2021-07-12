<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
   public  function index()
   {
       $products = Product::paginate(9);


       return view('users.catalog.index',[
           'products'=>$products,

       ]);
   }

   public function showCategory($cat_slug)
   {
       $cat = Category::where('slug',$cat_slug)->first();



       return view('users.catalog.show_category',[
           'cat'=>$cat,

       ]);
   }

   public function showProduct($cat_slug, $id)
   {


       $product = Product::where('id',$id)->first();



       return view('users.catalog.show_product',[

           'product'=>$product
       ]);

   }
}
