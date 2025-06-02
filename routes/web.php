<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Language switcher route
// Language switcher route
Route::get('/language/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'ar'])) {
        // Set the locale in session
        session(['locale' => $locale]);
        
    }
    return redirect()->back();
})->name('language.switch')->middleware(['web']);


// Define routes for all pages
Route::get('/', function () {
    return view('home');
})->name('home');

// Route::get('/about', function () {
//     return view('about');
// })->name('about');

Route::get('/about', [\App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::get('/investor', [\App\Http\Controllers\InvestorController::class, 'index'])->name('investor');
Route::get('/service', [\App\Http\Controllers\ServiceController::class, 'index'])->name('service');
Route::get('/solution', [\App\Http\Controllers\SolutionController::class, 'index'])->name('solution');
Route::get('/career', [\App\Http\Controllers\CareerController::class, 'index'])->name('career');
Route::get('/engagement_model', [\App\Http\Controllers\EngagementController::class, 'index'])->name('engagement_model');
Route::get('/value_proposition', [\App\Http\Controllers\ValueController::class, 'index'])->name('value_proposition');


Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/industries', function () {
    return view('industries');
})->name('industries');

Route::get('/careers', function () {
    return view('careers');
})->name('careers');

Route::get('/investors', function () {
    return view('investors');
})->name('investors');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

// Route::get('/contact', function () {
//     return view('contact');
// })->name('contact');

Route::post('/contact/submit', [\App\Http\Controllers\ContactController::class, 'submit'])->name('contact.submit');

// Language switcher route
Route::get('/language/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'ar'])) {
        session(['locale' => $locale]);
        app()->setLocale($locale);
    }
    return redirect()->back();
})->name('language.switch');


