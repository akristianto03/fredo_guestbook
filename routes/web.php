<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\User\UserController as UUserController;
use \App\Http\Controllers\User\EventController as UserEventController;
use \App\Http\Controllers\User\GuestController as UserGuestController;
use \App\Http\Controllers\Creator\EventController as CreatorEventController;
use \App\Http\Controllers\Creator\GuestController as CreatorGuestController;
use App\Http\Controllers\Admin\EventController as AdminEventController;
use App\Http\Controllers\Auth\ActivationController;

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

Route::get('/', 'App\Http\Controllers\PagesController@home');
Route::get('/jadwal', 'App\Http\Controllers\PagesController@jadwal');
Route::get('/kontak', 'App\Http\Controllers\PagesController@kontak');
Route::get('/listdata', 'App\Http\Controllers\PagesController@listdata');

// Route::get('/event', [EventController::class, 'index'])->name('index');
// Route::get('event/{event}', [EventController::class, 'edit'])->name('event.edit');
// Route::patch('event/{event}/update', [EventController::class, 'update'])->name('event.update');
// Route::delete('delete/{event}', [EventController::class, 'destroy'])->name('event.destroy');
// Route::view('addStudent', 'event.addStudent')->name('event.create');
// Route::post('create', [EventController::class, 'store'])->name('event.store');

Route::get('activate', [ActivationController::class, 'activate'])->name('activate');


Route::group([
    'middleware' => 'admin',
    'prefix' => 'admin',
    'as' => 'admin.'
], function (){
    Route::resource('user', UserController::class);
    Route::resource('event', AdminEventController::class);
});

Route::group([
    'middleware' => 'creator',
    'prefix' => 'creator',
    'as' => 'creator.'
], function (){
    Route::resource('event', CreatorEventController::class);
    Route::resource('guest', CreatorGuestController::class);

    Route::post('guests/{id}/approve', [CreatorGuestController::class, 'approve'])->name('guests.approve');
    Route::post('guests/{id}/decline', [CreatorGuestController::class, 'decline'])->name('guests.decline');
});

Route::group([
    'middleware' => 'user',
    'prefix' => 'user',
    'as' => 'user.'
], function (){
    Route::resource('event', UserGuestController::class);
});

// Route::get('/student', [StudentController::class, 'index'])->name('index');
// Route::get('student/{student}', [StudentController::class, 'edit'])->name('student.edit');
// Route::patch('student/{student}/update', [StudentController::class, 'update'])->name('student.update');
// Route::delete('delete/{student}', [StudentController::class, 'destroy'])->name('student.destroy');
// Route::view('addStudent', 'student.addStudent')->name('student.create');
// Route::post('create', [StudentController::class, 'store'])->name('student.store');

Route::resource('student', StudentController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
