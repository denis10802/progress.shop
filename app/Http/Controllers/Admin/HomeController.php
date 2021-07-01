<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index(){
        $products_count = Product::all()->count();
        $category_count = Category::all()->count();

        return view('admin.home.index',[
           'products_count' => $products_count,
            'category_count'=>$category_count
        ]);
    }
}
