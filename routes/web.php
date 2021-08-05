<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PagesController@index');


// Demo routes
Route::get('/datatables', 'PagesController@datatables');
Route::get('/ktdatatables', 'PagesController@ktDatatables');
Route::get('/select2', 'PagesController@select2');
Route::get('/jquerymask', 'PagesController@jQueryMask');
Route::get('/icons/custom-icons', 'PagesController@customIcons');
Route::get('/icons/flaticon', 'PagesController@flaticon');
Route::get('/icons/fontawesome', 'PagesController@fontawesome');
Route::get('/icons/lineawesome', 'PagesController@lineawesome');
Route::get('/icons/socicons', 'PagesController@socicons');
Route::get('/icons/svg', 'PagesController@svg');

// Quick search dummy route to display html elements in search dropdown (header search)
Route::get('/quick-search', 'PagesController@quickSearch')->name('quick-search');

//clienti
Route::group(['prefix' => 'clienti', 'as' => 'clients.'], function () {
    Route::get('elenco', [\App\Http\Controllers\ClientController::class,'index'])->name('index');
    Route::get('nuovo', [\App\Http\Controllers\ClientController::class,'create'])->name('create');
    Route::post('nuovo', [\App\Http\Controllers\ClientController::class,'store'])->name('store');
    Route::get('visualizza/{id}', [\App\Http\Controllers\ClientController::class,'show'])->name('show');
    Route::get('modifica/{id}', [\App\Http\Controllers\ClientController::class,'edit'])->name('edit');
    Route::post('modifica/{id}', [\App\Http\Controllers\ClientController::class,'update'])->name('update');
});

//domini
Route::group(['prefix' => 'domini', 'as' => 'domains.'], function () {
    Route::get('elenco', [\App\Http\Controllers\DomainController::class,'index'])->name('index');
    Route::get('nuovo', [\App\Http\Controllers\DomainController::class,'create'])->name('create');
    Route::post('nuovo', [\App\Http\Controllers\DomainController::class,'store'])->name('store');
    Route::get('visualizza/{id}', [\App\Http\Controllers\DomainController::class,'show'])->name('show');
    Route::get('modifica/{id}', [\App\Http\Controllers\DomainController::class,'edit'])->name('edit');
    Route::post('modifica/{id}', [\App\Http\Controllers\DomainController::class,'update'])->name('update');

    Route::post('notify-expiration/{domain}', [\App\Http\Controllers\DomainController::class,'notifyDomainExpiration'])->name('notify-expiration');
});

//accessi
Route::group(['prefix' => 'accessi', 'as' => 'accesses.'], function () {
    Route::get('elenco', [\App\Http\Controllers\AccessController::class,'index'])->name('index');
    Route::get('nuovo', [\App\Http\Controllers\Accessontroller::class,'create'])->name('create');
    Route::post('nuovo', [\App\Http\Controllers\AccessController::class,'store'])->name('store');
    Route::get('visualizza/{id}', [\App\Http\Controllers\AccessController::class,'show'])->name('show');
    Route::get('modifica/{id}', [\App\Http\Controllers\AccessController::class,'edit'])->name('edit');
    Route::post('modifica/{id}', [\App\Http\Controllers\AccessController::class,'update'])->name('update');
});
