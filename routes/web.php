<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ItemsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    return view('home/index');
});

Route::get('/dashboard', function(){
    return view('admin/dashboard');
});

Route::get('/items', function(){
    return view('admin/items');
});

Route::get('/about', function(){
    return view('home/about');
});

Route::get('/service', function(){
    return view('home/service');
});

Route::get('/menu', function(){
    return view('home/menu');
});

Route::get('/contact', function(){
    return view('home/contact');
});

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'check'])->name('login.check');

Route::get('/signup', [SignupController::class, 'signup'])->name('signup');
Route::post('/signup', [SignupController::class, 'store'])->name('signup.store');



Route::get('/items', [ItemsController::class, 'items'])->name('items');
Route::post('/items', [ItemsController::class, 'store'])->name('items.store');
Route::resource('items', ItemsController::class);
Route::get('/items/{id}/edit', [ItemsController::class, 'edit'])->name('items.edit');


Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/login');
})->name('logout');

Route::get('/dashboard', [AdminController::class, 'dashboard'])->middleware('auth');
