<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Routing\ResponseFactory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    private ResponseFactory $responseFactory;
    private Redirector $redirectTo;

    public function __construct(
        ResponseFactory $responseFactory,
        Redirector $redirectTo
    ) {
        $this->responseFactory = $responseFactory;
        $this->redirectTo = $redirectTo;
    }

    public function index(): Response
    {
        $categories = Category::all()->reverse();

        return $this->responseFactory->view('admin.category.index',[
           'categories'=>$categories
        ]);
    }

    public function create()
    {
        return $this->responseFactory->view('admin.category.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title'=>'required|max:255'
        ]);
        $category = new Category();
        $category->title = $request->title;
        $category->slug = Str::of($request->title)->slug('-');

        $category->save();

        return $this->redirectTo->back()->with('success','Категория успешно добавлена');
    }

    public function edit(Category $category): Response
    {
        return $this->responseFactory->view('admin.category.edit',[
            'category'=>$category,
            ]);
    }

    public function update(Request $request, Category $category): RedirectResponse
    {
        $category->title = $request->title;
        $category->slug = Str::of($request->title)->slug('-');
        $category->save();

        return $this->redirectTo->back()->with('success','Категория успешно обновлена');
    }

    public function destroy(Category $category): RedirectResponse
    {
        Storage::disk('public')->delete($category->image);
        $category->delete();

        return $this->redirectTo->back()->with('success','Категория удалена');
    }

    public function show(Category $category)
    {
        //
    }
}
