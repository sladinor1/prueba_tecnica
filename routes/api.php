<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('people', [PeopleController::class, 'index'])->name('person.index');
//Route::get('people', 'PeopleController@index');
Route::get('people/{people}', [PeopleController::class, 'show'])->name('person.show');
//Route::get('people/{people}', 'PeopleController@show');
Route::post('people', [PeopleController::class, 'store'])->name('person.store');
//Route::post('people','PeopleController@store');
Route::put('people/{people}', [PeopleController::class, 'update'])->name('person.update');
//Route::put('people/{people}','PeopleController@update');
Route::delete('people/{people}', [PeopleController::class, 'delete'])->name('person.delete');
//Route::delete('people/{people}', 'PeopleController@delete');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
