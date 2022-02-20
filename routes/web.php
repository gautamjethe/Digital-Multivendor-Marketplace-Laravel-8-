<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\EditProfileController;
use App\Http\Controllers\ProductComments;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::view('/upload', 'upload')->middleware(['auth']);;
Route::post('upload', [VideoController::class, 'upload'])->middleware(['auth']);
Route::get('data/{id}', [VideoController::class, 'show']);
Route::get('dashboard/upload-item', function () {
    return view('upload-item');
})->middleware(['auth']);
Route::post('dashboard/upload-item', [ProductsController::class, 'create']);
Route::get('/dashboard', [ProductsController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');
Route::get('/dashboard/update-item',[ProductsController::class, 'listpro'])->middleware(['auth'])->name('dashboard');
Route::get('/dashboard/update-item/edit/{id}', [ProductsController::class,'editproduct']);
Route::post('/dashboard/update-item/edit/{id}', [ProductsController::class,'realedit']);
Route::get('item/{id}', [ProductsController::class, 'show','index']);
Route::post('item/{id}', [ProductComments::class, 'comments']);
//Route::get('item/{id}', [ProductsController::class, 'index']);
Route::get('downloads/{id}', [ProductsController::class, 'download'])->middleware(['auth']);
//Route::post('/upload'. ['']);
Route::get('/', [ProductsController::class, 'home']);
Route::post('downloads/{id}', [ProductsController::class, 'downloadcount']);
Route::get('profile/{id}', [ProfileController::class, 'show']);
Route::post('dashboard/edit-profile', [EditProfileController::class, 'update']);
Route::view('dashboard/edit-profile', 'edit-profile');
Route::view('blogs', 'blogs');
//Route::view('blogs/{{id}}','blog-details');
Route::view('dashboard/addblog','addblog');
Route::post('dashboard/addblog', [BlogController::class, 'addblog']);
Route::get('blogs',[BlogController::class, 'show']);
Route::get('blogs/{id}', [BlogController::class, 'details']);
Route::post('blogs/{id}', [BlogController::class, 'blogc']);


require __DIR__.'/auth.php';
