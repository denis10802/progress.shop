<?php


use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SpecificationsController;
use App\Http\Controllers\MailSetting;
use App\Http\Controllers\Site\CatalogController;
use App\Http\Controllers\Site\HomeController;
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

//site

Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/catalog',[CatalogController::class,'index'])->name('catalog');

Route::get('/catalog/{cat}',[CatalogController::class,'showCategory'])->name('showCategory');

Route::get('/catalog/{cat}/{id}',[CatalogController::class,'showProduct'])->name('showProduct');

Route::get('/contact',[HomeController::class,'showContacts'])->name('showContacts');

Route::get('/about',[HomeController::class,'showAbout'])->name('showAbout');

Route::get('/shipping-and-payment',[HomeController::class,'showDelivery'])->name('showDelivery');

Route::post('/send-mail',[MailSetting::class,'sendForm' ])->name('sendForm');

Auth::routes();
//admin
Route::get('/admin_panel_88', [App\Http\Controllers\HomeController::class, 'index'])->name('admin_panel_88');

Route::middleware(['role:admin'])->prefix('admin_panel')->group(function ()
{
    Route::get('/',[App\Http\Controllers\Admin\HomeController::class, 'index'])->name('homeAdmin');

    Route::resource('category',CategoryController::class);

    Route::resource('product',ProductController::class);

//   set images

    Route::prefix('set-image-category')->group(function (){
        Route::get('/{id}',[\App\Http\Controllers\Admin\ImageCategoryController::class,'SettingImageCategory'])->name('SettingImageCategory');

        Route::post('/{id}/update',[\App\Http\Controllers\Admin\ImageCategoryController::class,'updateImageCategory'])->name('updateImageCategory');
    });

    Route::prefix('set-image-product')->group(function (){
        Route::get('/{id}',[\App\Http\Controllers\Admin\ImageProductController::class,'showSettingImage'])->name('SettingImageProduct');

        Route::post('/{id}/update',[\App\Http\Controllers\Admin\ImageProductController::class,'updateImageProduct'])->name('updateImageProduct');
    });

// end set images

//specification

Route::prefix('specification')->group(function (){

    Route::get('/',[App\Http\Controllers\Admin\SpecificationsController::class, 'index'])->name('specification');

    Route::get('/{id}',[App\Http\Controllers\Admin\SpecificationsController::class, 'create'])->name('createSpecification');

    Route::post('/',[App\Http\Controllers\Admin\SpecificationsController::class, 'store'])->name('addSpecification');

    Route::get('/update/{id}',[App\Http\Controllers\Admin\SpecificationsController::class, 'showUpdateForm'])->name('updateFormSpecification');

    Route::post('/update/{id}',[App\Http\Controllers\Admin\SpecificationsController::class, 'update'])->name('updateSpecification');

    Route::get('/delete/{id}/',[SpecificationsController::class,'delete'])->name('delete');

});

// end specification

    //description
    Route::prefix('description')->group(function (){

        Route::get('/',[App\Http\Controllers\Admin\DescriptionsController::class, 'index'])->name('description');

        Route::get('/{id}',[App\Http\Controllers\Admin\DescriptionsController::class, 'create'])->name('create');

        Route::post('/',[App\Http\Controllers\Admin\DescriptionsController::class, 'store'])->name('addDescription');

        Route::get('/update/{id}',[App\Http\Controllers\Admin\DescriptionsController::class, 'showUpdateForm'])->name('updateForm');

        Route::post('/update/{id}',[App\Http\Controllers\Admin\DescriptionsController::class, 'update'])->name('update');

        Route::get('/delete/{id}/',[\App\Http\Controllers\Admin\DescriptionsController::class,'delete'])->name('delete');
    });
//end description
});


