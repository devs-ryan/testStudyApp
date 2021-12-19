<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // test
    Route::get('test/{test}/intro', [QuestionController::class, 'intro'])->name('test-intro');
    Route::get('test/{test}/summary', [QuestionController::class, 'summary'])->name('test-summary');
    Route::match(['get', 'post'], 'test/{test}/{questionNumber}', [QuestionController::class, 'show'])->name('test-question');
});


