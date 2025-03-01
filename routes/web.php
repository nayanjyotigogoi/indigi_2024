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

Route::get('/test', function () {
    return view('welcome');
});



// Define a route for the homepage where the portfolio section will be included
Route::get('/', [PortfolioController::class, 'index']);


//nav-bar routes




Route::get('/about', function () {
    return view('about');
})->name('about');



//products.
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
//products learn-more button.
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');

//Route for services
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/{id}', [ServiceController::class, 'show'])->name('services.show');



//Route for portfolio in the nav-bar.
Route::get('/portfolio', [PortfolioController::class, 'view'])->name('portfolio.portfolio');

//Route for gallery in the nav-bar
Route::get('/gallery', function () {
    return view('gallery.gallery');
})->name('gallery');

//Route for Contact in the home-section
Route::get('/contact-us', function () {
    return view('contactus');
})->name('contact');

//Route for the career in the nav-bar
Route::get('/career', function () {
    return view('career.career');
})->name('career');

//contact us route
Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact/submit', [ContactController::class, 'submitContactForm'])->name('contact.submit');


//route for the apply now button present at the career. 
Route::get('/apply-now', [ApplicationController::class, 'show']);

Route::post('/submit-application', [ApplicationController::class, 'store'])->name('submit-application');





