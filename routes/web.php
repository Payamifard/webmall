<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Frontend\FrontendController;

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

// Frontend Routes
Route::get('/', [FrontendController::class, 'index'])->name('frontend');
Route::get('/categories/{category_slug}', [FrontendController::class, 'products'])->name('frontend.products');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admin Routes
Route::prefix('/admin')->middleware(['auth', 'isAdmin'])->group(function () {

    // Dashboard Route
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Category Routes
    Route::controller(CategoryController::class)->group(function () {
        Route::get('/category', 'index')->name('category.index');
        Route::get('/category/create', 'create')->name('category.create');
        Route::post('/category', 'store')->name('category.store');
        Route::get('/category/edit/{category}', 'edit')->name('category.edit');
        Route::put('/category/{category}', 'update')->name('category.update');
    });

    // Brand Routes
    Route::get('/brands', App\Livewire\Admin\Brand\Index::class)->name('brand.index');

    // Product Routes
    Route::controller(ProductController::class)->group(function () {
        Route::get('/products', 'index')->name('product.index');
        Route::get('/products/create', 'create')->name('product.create');
        Route::post('/products', 'store')->name('product.store');
        Route::get('/products/edit/{product}', 'edit')->name('product.edit');
        Route::put('/products/{product}', 'update')->name('product.update');
        Route::get('/product-image/delete/{product_image_id}', 'destroyImage')->name('product.deleteImage');
        Route::post('/product-color/{prod_color_id}', 'updateProdColorQty');
        Route::get('/product-color/{prod_color_id}/delete', 'deleteProdColor');
    });

    // Color Routes
    Route::controller(ColorController::class)->group(function () {
        Route::get('/colors', 'index')->name('colors.index');
        Route::get('/colors/create', 'create')->name('colors.create');
        Route::post('/colors/create', 'store')->name('colors.store');
        Route::get('/colors/edit/{color}', 'edit')->name('colors.edit');
        Route::put('/colors/edit/{color}', 'update')->name('colors.update');
        Route::get('/colors/delete/{color}', 'destroy')->name('colors.destroy');
    });

    // Slider Routes
    Route::controller(SliderController::class)->group(function () {
        Route::get('/sliders', 'index')->name('sliders.index');
        Route::get('/sliders/create', 'create')->name('sliders.create');
        Route::post('/sliders/create', 'store')->name('sliders.store');
        Route::get('/sliders/edit/{slider}', 'edit')->name('sliders.edit');
        Route::put('/sliders/edit/{slider}', 'update')->name('sliders.update');
        Route::get('/sliders/delete/{slider}', 'destroy')->name('sliders.destroy');
    });

});
