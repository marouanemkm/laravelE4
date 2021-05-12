<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, 'home'])->name('home');

Route::get('/articles', [MainController::class, 'index'])->name('articles');

Route::get('/articles/{article:slug}', [MainController::class, 'show'])->name('article');

Auth::routes();

Route::prefix('admin')->middleware('admin')->group(function()
{
    Route::resource('article', ArticleController::class)->except([
        'show',
    ]);
});

Route::fallback(function() {
    return view('404');
 });

Route::get('/locaux', [MainController::class, 'showLocaux'])->name('locaux');
Route::get('/materiel', [MainController::class, 'showMateriel'])->name('materiel');
Route::get('/contact', [MainController::class, 'showContact'])->name('contact');