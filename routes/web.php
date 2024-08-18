<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\ColorController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\Frontend\FrontendController::class, 'index'] )->name('frontend');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/categories/{category_slug}',[App\Http\Controllers\Frontend\FrontendController::class, 'products'] )->name('frontend.products');


//adminmiddleware ra dar kernel ba esme isadmin tarif kardim va inja esefade mikonim
//un auth dar parantez ham dare middlware authentication ro seda mikone yani baraye dastresi be in route niaz be login has
route::prefix('/admin')->middleware(['auth','isAdmin'])->group(function(){

    route::get('/dashboard', [App\Http\Controllers\admin\DashboardController::class, 'index'])->name('dashboard') ;

    Route::controller(CategoryController::class)->group(function () {
        route::get('/category', 'index')->name('category.index') ;
        route::get('/category/create', 'create')->name('category.create') ;
        route::post('/category', 'store')->name('category.store') ;
        route::get('/category/edit/{category}', 'edit')->name('category.edit') ;
        route::put('/category/{category}', 'update')->name('category.update') ;
    });

    route::get('/brands',App\Livewire\Admin\Brand\Index::class)->name('brand.index') ;

    //route::get('/products/edit/{productid}',App\Livewire\Admin\Products\Edit::class)->name('product.edit') ;


    Route::controller(ProductController::class)->group(function () {
        route::get('/products', 'index')->name('product.index') ;
        route::get('/products/create', 'create')->name('product.create') ;
        route::post('/products', 'store')->name('product.store') ;
        //
        route::get('/products/edit/{productid}', 'edit')->name('product.edit') ;
        route::put('/products/{product}', 'update')->name('product.update') ;
        route::get('/products', 'index')->name('product.index') ;
        route::get('/product-image/delete/{product_image_id}', 'destroyImage')->name('product.deleteImage') ;
        // route::get('/product/delete/{product_id}', 'destroyProduct')->name('product.destroy') ;
        route::post('/product-color/{prod_color_id}','updateProdColorQty') ;
        route::get('/product-color/{prod_color_id}/delete','deleteProdColor') ;
    });

    Route::controller(ColorController::class)->group(function () {
        route::get('/colors', 'index')->name('colors.index') ;
        route::get('/colors/create', 'create')->name('colors.create') ;
        route::post('/colors/create', 'store')->name('colors.store') ;
        route::get('/colors/edit/{color}', 'edit')->name('colors.edit') ;
        route::put('/colors/edit/{color}', 'update')->name('colors.update') ;
        route::get('/colors/delete/{color}', 'destroy')->name('colors.destroy') ;
    });


    Route::controller(SliderController::class)->group(function () {

        route::get('/sliders','index')->name('sliders.index') ;
        route::get('/sliders/create','create')->name('sliders.create') ;
        route::post('/sliders/create','store')->name('sliders.store') ;
        route::get('/sliders/edit/{slider}','edit')->name('sliders.edit') ;
        route::put('/sliders/edit/{slider}','update')->name('sliders.update') ;
        route::get('/sliders/delete/{slider}','destroy')->name('sliders.destroy') ;
    });



}) ;



