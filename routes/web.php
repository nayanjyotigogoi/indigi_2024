<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SolutionController;
use App\Http\Controllers\CareerApplicationController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\JobOpeningController;
use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Route;

/*
|---------------------------------------------------------------------------
| Web Routes
|---------------------------------------------------------------------------
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider within a group
| which contains the "web" middleware group. Now create something great!
|
*/

// Simple test route
Route::get('/test', function () {
    return view('welcome');
});

// Home route, used to load the homepage
Route::get('/', [FrontendController::class, 'index'])->name('home');

// Route for the "About" page
Route::get('/about', [AboutController::class, 'show'])->name('about');

// Route for listing products
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

// Route for viewing a specific service
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/{slug}', [ServiceController::class, 'view'])->name('services.viewservices');

// Route for portfolio section in the nav-bar
Route::get('/portfolio', [PortfolioController::class, 'view'])->name('portfolio.portfolio');

// Route for the gallery page
// Route::get('/gallery', function () {
//     return view('gallery.gallery');
// })->name('gallery');

Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');


// Contact route for handling the form submission
Route::get('/contact-us', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact/submit', [ContactController::class, 'submitContactForm'])->name('contact.submit');

// Route for writing a review
Route::get('/write-review', [ReviewController::class, 'index'])->name('write-review');
Route::post('/submit-review', [ReviewController::class, 'store'])->name('submit.review');


Route::get('/products', [SolutionController::class, 'index'])->name('products.index');
Route::get('/Solution/{item}', [SolutionController::class, 'show'])->name('products.learn-more');
Route::get('/solutions/{slug}', [SolutionController::class, 'show'])->name('solutions.show');



// Routes for career application
Route::get('/apply-now/{job}', [CareerApplicationController::class, 'show'])->name('apply-now');
Route::get('/career/job/{id}', [CareerApplicationController::class, 'viewJob'])->name('view-job');

// Show application form route
Route::get('career/apply', [CareerApplicationController::class, 'create'])->name('career.apply');

// Store career application form submission
Route::post('career/apply', [CareerApplicationController::class, 'store'])->name('submit-application');



// Admin login/logout routes
Route::get('admin/login', [AdminController::class, 'showLogin'])->name('admin.login');
Route::post('admin/login', [AdminController::class, 'login'])->name('admin.login.submit');
Route::post('admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

// Admin routes for managing "About" section
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth'])->group(function () {

    // Admin dashboard route
    Route::get('/admin', [AdminDashboardController::class, 'index'])->name('admin.index');
    Route::get('/About/view', [AboutController::class, 'view'])->name('admin.about.view');
    Route::get('/About/edit', [AboutController::class, 'edit'])->name('admin.about.edit');
    Route::post('/About/update', [AboutController::class, 'update'])->name('admin.about.update');

    // Routes for managing "Solutions" section

    // Route::get('/admin/solutions/view', [SolutionController::class, 'viewAll'])->name('solutions.view');
    Route::get('/admin/view-solutions', [SolutionController::class, 'show_solutions'])->name('solutions.view');
    Route::get('/admin/solutions/edit/{item}', [SolutionController::class, 'edit'])->name('solutions.edit');
    Route::put('/admin/solutions/update/{item}', [SolutionController::class, 'update'])->name('solutions.update');
    Route::get('/admin/solution/create', [SolutionController::class, 'create'])->name('admin.solutions.create');
    Route::post('/admin/solution/store', [SolutionController::class, 'store'])->name('admin.solution.store');

    // Image upload route for editor (solution-related)
    Route::post('/editor/image_upload', [SolutionController::class, 'upload'])->name('upload');

    // Routes for managing services in the admin section
    Route::get('/admin/services', [ServiceController::class, 'show'])->name('admin.services.view');
    Route::get('admin/services/add', [ServiceController::class, 'create'])->name('admin.services.add');
    Route::post('/services', [ServiceController::class, 'store'])->name('services.store');
    Route::get('/services/{service}/edit', [ServiceController::class, 'edit'])->name('services.edit');
    Route::put('/services/{service}', [ServiceController::class, 'update'])->name('services.update');
    Route::post('/editor/image_upload', [ServiceController::class, 'upload'])->name('upload');


    // Route::post('/submit-application', [CareerApplicationController::class, 'store'])->name('submit-application');


    // View all career applications (for admin)
    Route::get('career/applications', [CareerApplicationController::class, 'index'])->name('career.applications');

    // Routes for job openings in the admin section
    Route::get('/admin/jobs/create', [JobOpeningController::class, 'create'])->name('job.create');
    Route::post('/admin/jobs/store', [JobOpeningController::class, 'store'])->name('job.store');
    Route::get('/admin/jobs', [JobOpeningController::class, 'index'])->name('job.index');
    Route::delete('/admin/jobs/{id}', [JobOpeningController::class, 'destroy'])->name('job.destroy');
    Route::get('/admin/jobs/{id}/edit', [JobOpeningController::class, 'edit'])->name('job.edit'); // Optional edit route

    //gallery route
    Route::get('/admin/add-image', [GalleryController::class, 'create'])->name('gallery.create');
    Route::get('/admin/view-image', [GalleryController::class, 'show'])->name('gallery.view');
    Route::post('/admin/add-image', [GalleryController::class, 'store'])->name('gallery.store');
    Route::put('/admin/edit-image/{id}', [GalleryController::class, 'update'])->name('gallery.update');
    Route::get('/admin/edit-image/{id}', [GalleryController::class, 'edit'])->name('gallery.edit');
    Route::delete('/admin/delete-image/{id}', [GalleryController::class, 'destroy'])->name('gallery.destroy');



});

// Route for career page (list of job openings)
Route::get('/career', [CareerApplicationController::class, 'career_page'])->name('career');


