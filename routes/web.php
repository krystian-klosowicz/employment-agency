<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ContactUsFormController;

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
    return view('welcome');
});

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/home');
});



Route::get('/create', [JobController::class, 'create'])->name('create.offer')->middleware('auth');
Route::post('/job/store', [JobController::class, 'store'])->name('store.offer')->middleware('auth');

Route::get('/job/edit/{job}', [JobController::class, 'edit'])->name('edit.offer')->middleware('auth');
Route::post('/job/{job}', [JobController::class, 'update'])->name('update.offer')->middleware('auth');

Route::delete('/job/{job}/delete', [JobController::class, 'delete'])->name('offer.delete')->middleware('auth');

Route::get('/alloffers', [JobController::class, 'showAllOffers'])->name('all.offers')->middleware('auth');

Route::get(' / test', function () {
    return DB::select('select * from test_table');
});

Route::controller(JobController::class)->group(function () {
    Route::get('/jobs/{id}', 'show')->name('jobs.show');
    Route::get('/home', 'index')->name('index');
    Route::get('/search', 'search')->name('wyszukaj');
});

Route::get('/contact', [ContactUsFormController::class, 'createForm'])->name('contact');;
Route::post('/contact/store', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');

Auth::routes();

Route::get('/register', function () {
    return redirect('/home');
});
