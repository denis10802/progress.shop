<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\ResponseFactory;

class CatalogController extends Controller
{
    private ResponseFactory $responseFactory;

    public function __construct(ResponseFactory $responseFactory)
    {
        $this->responseFactory = $responseFactory;
    }

    public  function index(): Response
    {
       $products = Product::paginate(9);

       return $this->responseFactory->view('site.catalog.index',[
           'products'=>$products,

       ]);
   }

   public function showCategory($catSlug): Response
   {
       $cat = Category::where('slug',$catSlug)->first();

       return $this->responseFactory->view('site.catalog.show_category',[
           'cat'=>$cat,
       ]);
   }

   public function showProduct($catSlug, $id): Response
   {
       $product = Product::where('id',$id)->first();
       $products = Product::all()->random(10);//10

       return $this->responseFactory->view('site.catalog.show_product',[
           'product'=>$product,
           'products'=>$products,
       ]);
   }
}
