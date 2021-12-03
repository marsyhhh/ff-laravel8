<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Post;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [LandingController::class, 'index'] );

Route::get('/about', function () {
    $data = [
        'name' => 'Marsyah Fajar M',
        'email' => 'marsyhhhf@gmail.com',
        'image' => '/images/foto.jpg',
    ];
    return view('about', $data);
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/credits', function () {
    $data = [
        'tittle' => 'Credit',
        'body' => 'Salam Admin',
    ];
    return view('admin.credits', $data);
});

Route::get('/profile', function() {
    return view('profile');
});


Route::get('/blog', [BlogController::class, 'index']);

Route::get('/blog/{slug}', [BlogController::class, 'show']);

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// route post
Route::resource('post', PostController::class);

// route user
Route::resource('user', UserController::class);