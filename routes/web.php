<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\VisitorController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\VolunteerController;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);



// Frontend Routes
Route::get('/', [FrontendController::class, 'index'])->name('home');


Route::get('/get-involved', [FrontendController::class, 'involved'])->name('involved');
Route::get('/contact-us', [FrontendController::class, 'contact'])->name('contact');
Route::post('/contact-us', [FrontendController::class, 'postContact'])->name('contact.store');
Route::get('/news-and-visitors', [FrontendController::class, 'news'])->name('news');

Route::get('/galleries/photo-gallery', [FrontendController::class, 'gallery'])->name('galleries.photo');
Route::get('/galleries/video-gallery', [FrontendController::class, 'videoGallery'])->name('galleries.video');

//About US Routes
Route::get('about/about-us', [FrontendController::class, 'about'])->name('about');
Route::get('/about/registration', [FrontendController::class, 'registration'])->name('about.registration');
Route::get('about/vision-and-mission', [AboutController::class, 'mission'])->name('mission');
Route::get('about/areas-of-operation', [FrontendController::class, 'operation'])->name('about.operation');
Route::get('about/history', [FrontendController::class, 'history'])->name('about.history');
Route::get('about/what-we-do', [FrontendController::class, 'do'])->name('about.do');
Route::get('about/success', [FrontendController::class, 'success'])->name('about.success');




// Admin Routes
Route::group(['prefix'=>'admin','as'=>'admin.','namespace'=>'Admin','middleware'=>'auth'], function(){
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //Users Routes
    Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::get('users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('users', [UserController::class, 'store'])->name('users.store');
    Route::get('users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('users/{id}', [UserController::class, 'update'])->name('users.update');

    //Sliders Routes
    Route::get('sliders', [SliderController::class, 'index'])->name('sliders.index');
    Route::get('sliders/create', [SliderController::class, 'create'])->name('sliders.create');
    Route::post('sliders', [SliderController::class, 'store'])->name('sliders.store');
    Route::get('sliders/{id}/edit', [SliderController::class, 'edit'])->name('sliders.edit');
    Route::put('sliders/{id}', [SliderController::class, 'update'])->name('sliders.update');
    Route::delete('sliders/{id}', [SliderController::class, 'destroy'])->name('sliders.destroy');
    Route::post('sliders/{id}', [SliderController::class, 'status'])->name('sliders.status');

    // Galleries Routes
    Route::get('galleries', [GalleryController::class, 'index'])->name('galleries.index');
    Route::get('galleries/create', [GalleryController::class, 'create'])->name('galleries.create');
    Route::post('galleries', [GalleryController::class, 'store'])->name('galleries.store');
    Route::post('galleries/{id}', [GalleryController::class, 'status'])->name('galleries.status');
    Route::delete('galleries/{id}', [GalleryController::class, 'destroy'])->name('galleries.destroy');

    // Galleries Routes
    Route::get('volunteers', [VolunteerController::class, 'index'])->name('volunteers.index');
    Route::get('volunteers/create', [VolunteerController::class, 'create'])->name('volunteers.create');
    Route::post('volunteers', [VolunteerController::class, 'store'])->name('volunteers.store');
    Route::post('volunteers/{id}', [VolunteerController::class, 'status'])->name('volunteers.status');
    Route::delete('volunteers/{id}', [VolunteerController::class, 'destroy'])->name('volunteers.destroy');

    // Visitors Routes
    Route::get('visitors', [VisitorController::class, 'index'])->name('visitors.index');
    Route::get('visitors/create', [VisitorController::class, 'create'])->name('visitors.create');
    Route::post('visitors', [VisitorController::class, 'store'])->name('visitors.store');
    Route::delete('visitors/{id}', [VisitorController::class, 'destroy'])->name('visitors.destroy');


    // News Routes
    Route::get('news', [NewsController::class, 'index'])->name('news.index');
    Route::get('news/create', [NewsController::class, 'create'])->name('news.create');
    Route::post('news', [NewsController::class, 'store'])->name('news.store');
    Route::delete('news/{id}', [NewsController::class, 'destroy'])->name('news.destroy');


});
