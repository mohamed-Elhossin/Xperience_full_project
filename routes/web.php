<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserPageController;
use App\Http\Controllers\PayCourseController;
use App\Http\Controllers\InstructorController;


Route::get('/', function () {
    return view('user.pages.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


Route::get('/instructor', [InstructorController::class, 'index'])->name('instructor.index');
Route::post('/instructor', [InstructorController::class, 'store'])->name('instructor.store');
Route::get("change_password", [UserPageController::class, 'change_password'])->name('change_password');


Route::prefix("pay_courses")->name('pay_courses.')->group(function () {
    Route::get("/", [PayCourseController::class, 'index'])->name('index');
});



Route::prefix("user_pages")->name('user_pages.')->group(function () {
    Route::get('/', [UserPageController::class, 'index'])->name('index');
    Route::get('/contact', [UserPageController::class, 'contact'])->name('contact');
});

require __DIR__ . '/auth.php';
