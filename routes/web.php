<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomepagesController;


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

Route::get('/', [HomepagesController::class, 'index'])->name('home');
Route::get('/about-us', [HomepagesController::class, 'about_us'])->name('about_us');
Route::get('/services', [HomepagesController::class, 'services'])->name('services');
Route::get('/projects', [HomepagesController::class, 'projects'])->name('projects');
Route::get('/contact', [HomepagesController::class, 'contact_us'])->name('contact');
Route::get('/locations', [HomepagesController::class, 'locations'])->name('locations');
Route::get('/blogs', [HomepagesController::class, 'blogs'])->name('blogs');
Route::post('contact_submit', [ContactController::class, 'store'])->name('contact.store');

Route::get('services/{services:slug}', [HomepagesController::class, 'service_detail'])->name('service_detail');
Route::get('projects/{projects:slug}', [HomepagesController::class, 'project_detail'])->name('project_detail');
Route::get('blogs/{blog:slug}', [HomepagesController::class, 'blog_detail'])->name('blog_detail');

//login
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Route::get('location/{city:slug}', [HomepagesController::class, 'location_detail'])->name('location_detail');

Route::group(['where' => ['city' => '^[a-z0-9-]+$']], function () {
    Route::get('{city:slug}', [HomepagesController::class, 'location_detail'])->name('location_detail');
});




Auth::routes(['register' => false]);


// ADMIN ROUTES
Route::group(['middleware' => ['auth']], function () {
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // for Contact route
        Route::resource('contact', ContactController::class)->except('store');

        // for Services route
        Route::resource('services', ServiceController::class, ['parameters' => [
            'services' => 'services:slug',
        ]])->except('show');

        // for Projects route
        Route::resource('projects', ProjectsController::class, ['parameters' => [
            'projects' => 'projects:slug',
        ]])->except('show');

        // for Blog route
        Route::resource('blog', BlogController::class, ['parameters' => [
            'blog' => 'blog:slug',
        ]])->except('show');

        // CityController
        Route::resource('city', CityController::class, ['parameters' => [
            'city' => 'city:slug',
        ]])->except('show');
    });
});
