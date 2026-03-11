<?php

use Illuminate\Support\Facades\Route;



Route::get('/', [App\Http\Controllers\WebController::class, 'home'])->name('home');
Route::get('blog_details', [App\Http\Controllers\WebController::class, 'blog_details'])->name('blog_details');
Route::get('blog', [App\Http\Controllers\WebController::class, 'blog'])->name('blog');
Route::get('checkout', [App\Http\Controllers\WebController::class, 'checkout'])->name('checkout');
Route::get('contact', [App\Http\Controllers\WebController::class, 'contact'])->name('contact');
Route::get('main', [App\Http\Controllers\WebController::class, 'main'])->name('main');
Route::get('shop_details', [App\Http\Controllers\WebController::class, 'shop_details'])->name('shop_details');
Route::get('shop_grid', [App\Http\Controllers\WebController::class, 'shop_grid'])->name('shop_grid');
Route::get('shoping_cart', [App\Http\Controllers\WebController::class, 'shoping_cart'])->name('home');

