<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProductController;
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

//Route for services in the nav-bar.
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/{id}', [ServiceController::class, 'show'])->name('services.show');


//Route for portfolio in the nav-bar.
Route::get('/portfolio', [PortfolioController::class, 'view'])->name('portfolio');

//Route for gallery in the nav-bar
Route::get('/gallery', function () {
    return view('nav-bar\nav_gallery');
})->name('gallery');

//Route for Contact in the home-section
Route::get('/contact', function () {
    return view('home_sections.contactus');
})->name('contact');

//Route for the career in the nav-bar
Route::get('/career', function () {
    return view('nav-bar.nav_career');
})->name('career');

//contact us route
Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact/submit', [ContactController::class, 'submitContactForm'])->name('contact.submit');


//route for the apply now button present at the career. 
Route::get('/apply-now', [ApplicationController::class, 'show']);

Route::post('/submit-application', [ApplicationController::class, 'store'])->name('submit-application');

//products learn-more button.
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.learn-more');


