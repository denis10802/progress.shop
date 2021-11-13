<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public ResponseFactory $responseFactory;

    public function __construct(ResponseFactory $responseFactory)
    {
        $this->responseFactory = $responseFactory;
    }

    public function index()
    {
        $categories = Category::all()->random(10);//10
        $products = Product::all()->random(6);//6

        return $this->responseFactory->view('users.home.index',[
            'categories'=>$categories,
            'products'=>$products
        ]);
    }

    public function  showContacts()
    {
        return $this->responseFactory->view('users.contact.index');
    }

    public function  showAbout()
    {
        return $this->responseFactory->view('users.about.index');
    }

    public function showDelivery()
    {
        return $this->responseFactory->view('users.delivery.index');

    }
}
