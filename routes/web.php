<?php

use App\Http\Controllers\PortfolioController;
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

Route::get('/', function () {
    return view('index');
});



// Define a route for the homepage where the portfolio section will be included
Route::get('/', [PortfolioController::class, 'index']);

//nav-bar routes


Route::get('/about', function () {
    return view('nav-bar.nav_about');
})->name('about');

Route::get('/products', function () {
    return view('nav-bar.nav_products');
})->name('products');

Route::get('/service', function () {
    return view('nav-bar.nav_service');
})->name('service');

Route::get('/portfolio', [PortfolioController::class, 'view'])->name('portfolio');


Route::get('/gallery', function () {
    return view('home_sections.gallery');
})->name('gallery');

Route::get('/contact', function () {
    return view('home_sections.contactus');
})->name('contact');

Route::get('/career', function () {
    return view('nav-bar.nav_career');
})->name('career');

Route::get('/contact', function () {
    return view('nav-bar.nav_contact');
})->name('contact');


