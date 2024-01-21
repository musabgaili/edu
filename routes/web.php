<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Models\Course;
use App\Models\Service;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use Spatie\Analytics\Facades\Analytics;
use Spatie\Analytics\Period;


use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

Route::get('/x', function () {
 
})->name('welcome');




Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact', [HomeController::class, 'store'])->name('contact.store');
Route::post('/quote', [HomeController::class, 'quote'])->name('quote.store');

Route::get('/courses', [HomeController::class, 'courses'])->name('courses');
Route::post('/courses', [CourseController::class, 'search'])->name('courses.search');
Route::get('/courses/apply/{course}', [CourseController::class, 'applyToCourseForm'])->name('courses.apply');
Route::post('/courses/apply/{course}', [CourseController::class, 'applyToCourse'])->name('courses.apply.save');





Route::get('/blog', [HomeController::class, 'blog'])->name('blog');



Route::get('language/{locale}', function ($locale = null) {
    app()->setLocale($locale);
    session()->put('locale', $locale);

    return redirect()->back();
})->name('locale');
