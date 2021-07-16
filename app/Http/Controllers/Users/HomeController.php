<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{



    public function index()
    {
        $categories = Category::all()->random(2);
        $products = Product::all()->random(2);

        return view('users.home.index',[
            'categories'=>$categories,
            'products'=>$products
        ]);
    }

    public function  showContacts()
    {
        return view('users.contact.index');
    }

    public function  showAbout()
    {
        return view('users.about.index');
    }

    public function showDelivery()
    {
        return view('users.delivery.index');

    }


}
