<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    private ResponseFactory $responseFactory;

    public function __construct(ResponseFactory $responseFactory)
    {
        $this->responseFactory = $responseFactory;
    }

    public function index(): Response
    {
        $categories = Category::all()->random(10);//10
        $products = Product::all()->random(6);//6

        return $this->responseFactory->view('site.home.index',[
            'categories'=>$categories,
            'products'=>$products
        ]);
    }

    public function  showContacts(): Response
    {
        return $this->responseFactory->view('site.contact.index');
    }

    public function  showAbout(): Response
    {
        return $this->responseFactory->view('site.about.index');
    }

    public function showDelivery(): Response
    {
        return $this->responseFactory->view('site.delivery.index');
    }
}
