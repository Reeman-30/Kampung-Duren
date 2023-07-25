<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\HomestayController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ShopController;
use App\Models\Facility;
use App\Models\Post;
use App\Models\Shop;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function() {
    return view('modules.pages.home', [
        'title' => '/',
        'posts' => Post::all(),
        'facilities' => Facility::all()
    ]);
});

Route::get('/tentang-kami', function() {
    return view('modules.pages.about-us', [
        'title' => 'Tentang-Kami'
    ]);
});

Route::get('/toko', function (Shop $shop) {
    return view('modules.pages.shop', [
        'title' => 'Toko',
        'shops' => $shop::all()
    ]);
});

Route::get('/penginapan', [HomestayController::class, 'index']);

Route::get('/login', [AuthController::class, 'indexLogin']);
Route::post('/login', [AuthController::class, 'authenticate']);

Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/register', [AuthController::class, 'indexRegist']);
Route::post('/register', [AuthController::class, 'storeRegist']);

Route::get('/admin/dashboard', function () {
    return view('modules.auth.admin.index');
})->middleware('auth');

Route::resource('/admin/posts', PostController::class)->middleware('auth');
Route::resource('/admin/toko', ShopController::class)->middleware('auth');
Route::resource('/admin/fasilitas', FacilityController::class)->middleware('auth');

Route::post('/admin/dashboard/logout', [AuthController::class, 'logout'])->middleware('auth');
