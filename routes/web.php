<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BackEndController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontEndController;

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'validates']);
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store_user']);

Route::get('/', [FrontEndController::class, 'index'])->name('index')->name('home');
Route::get('/about', [FrontEndController::class, 'about'])->name('about');
Route::get('/product', [FrontEndController::class, 'product'])->name('product');
Route::get('/product/{slug}', [FrontEndController::class, 'product_single'])->name('product.single');
Route::get('/media', [FrontEndController::class, 'media'])->name('media');
Route::get('/media/{slug}', [FrontEndController::class, 'media_single'])->name('blog.single');
Route::get('/distribution', [FrontEndController::class, 'distribution'])->name('distribution');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'sendContactEmail']);

Route::middleware(['auth'])->group(function () {

Route::get('/admin', [AuthController::class, 'index'])->name('dashboard');

// BLOGS
Route::get('/dashboard/blog', [BlogController::class, 'blog'])->name('admin.blog');
Route::get('/dashboard/blog/create', [BlogController::class, 'create_blog'])->name('blog.create');
Route::post('/dashboard/blog/create', [BlogController::class, 'store_blog']);
Route::get('/dashboard/blog/{id}/edit', [BlogController::class, 'edit_blog'])->name('blog.edit');
Route::patch('/dashboard/blog/{id}/update', [BlogController::class, 'update_blog'])->name('blog.update');
Route::delete('/blogs/{blog}/delete', [BlogController::class, 'delete_blog'])->name('blog.delete');

//PRODUCTS
Route::get('/dashboard/product', [AuthController::class, 'product'])->name('admin.product');
Route::get('/dashboard/product/create', [AuthController::class, 'create_product'])->name('product.create');
Route::post('/dashboard/product/create', [AuthController::class, 'store_product']);
Route::get('/dashboard/product/{slug}/edit', [AuthController::class, 'edit_product'])->name('product.edit');
Route::patch('/dashboard/product/{slug}/update', [AuthController::class, 'update_product'])->name('product.update');
Route::delete('/products/{product}/delete', [AuthController::class, 'delete_product'])->name('product.delete');


Route::get('/dashboard/distributor', [AuthController::class, 'distributor'])->name('admin.distributor');
Route::get('/dashboard/distributor/create', [AuthController::class, 'create_distributor'])->name('distributor.create');
Route::post('/dashboard/distributor/create', [AuthController::class, 'store_distributor']);
Route::get('/dashboard/distributor/{id}/edit', [AuthController::class, 'edit_distributor'])->name('distributor.edit');
Route::patch('/dashboard/distributor/{id}/update', [AuthController::class, 'update_distributor'])->name('distributor.update');
Route::delete('/distributions/{distribution}/delete', [AuthController::class, 'delete_distributor'])->name('distributor.delete');


Route::get('/dashboard/testimony', [AuthController::class, 'testimony'])->name('admin.testimony');
Route::get('/dashboard/testimony/create', [AuthController::class, 'create_testimony'])->name('testimony.create');
Route::post('/dashboard/testimony/create', [AuthController::class, 'store_testimony']);
Route::get('/dashboard/testimony/{id}/edit', [AuthController::class, 'edit_testimony'])->name('testimony.edit');
Route::patch('/dashboard/testimony/{id}/update', [AuthController::class, 'update_testimony'])->name('testimony.update');
Route::delete('/testimonys/{testimony}/delete', [AuthController::class, 'delete_testimony'])->name('testimony.delete');


Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
