<?php


use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SpecificationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//users

Route::get('/',[App\Http\Controllers\Users\HomeController::class,'index'])->name('home');

Route::get('/catalog',[\App\Http\Controllers\Users\CatalogController::class,'index'])->name('catalog');

Route::get('/catalog/{cat}',[\App\Http\Controllers\Users\CatalogController::class,'showCategory'])->name('showCategory');

Route::get('/catalog/{cat}/{id}',[\App\Http\Controllers\Users\CatalogController::class,'showProduct'])->name('showProduct');

Route::get('/contact',[\App\Http\Controllers\Users\HomeController::class,'showContacts'])->name('showContacts');

Route::get('/about',[\App\Http\Controllers\Users\HomeController::class,'showAbout'])->name('showAbout');










Auth::routes();

Route::get('/admin_panel_88', [App\Http\Controllers\HomeController::class, 'index'])->name('admin_panel_88');


//admin

Route::middleware(['role:admin'])->prefix('admin_panel')->group(function ()
{

    Route::get('/',[App\Http\Controllers\Admin\HomeController::class, 'index'])->name('homeAdmin');

    Route::resource('category',CategoryController::class);

    Route::resource('product',ProductController::class);



Route::prefix('specification')->group(function (){

    Route::get('/',[App\Http\Controllers\Admin\SpecificationsController::class, 'index'])->name('specification');

    Route::get('/{id}',[App\Http\Controllers\Admin\SpecificationsController::class, 'create'])->name('createSpecification');

    Route::post('/',[App\Http\Controllers\Admin\SpecificationsController::class, 'store'])->name('addSpecification');

    Route::get('/update/{id}',[App\Http\Controllers\Admin\SpecificationsController::class, 'showUpdateForm'])->name('updateFormSpecification');

    Route::post('/update/{id}',[App\Http\Controllers\Admin\SpecificationsController::class, 'update'])->name('updateSpecification');

});


    Route::prefix('description')->group(function (){

        Route::get('/',[App\Http\Controllers\Admin\DescriptionsController::class, 'index'])->name('description');

        Route::get('/{id}',[App\Http\Controllers\Admin\DescriptionsController::class, 'create'])->name('create');

        Route::post('/',[App\Http\Controllers\Admin\DescriptionsController::class, 'store'])->name('addDescription');

        Route::get('/update/{id}',[App\Http\Controllers\Admin\DescriptionsController::class, 'showUpdateForm'])->name('updateForm');

        Route::post('/update/{id}',[App\Http\Controllers\Admin\DescriptionsController::class, 'update'])->name('update');

    });











});


