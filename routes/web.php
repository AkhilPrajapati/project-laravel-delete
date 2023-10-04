<?php

use App\Http\Controllers\MemberController;
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

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/list', function(){return view('list');});
Route::get('/list', [MemberController::class, 'list']);
Route::get('/delete/{id}', [MemberController::class, 'delete']);

Route::get('/edit/{id}', [MemberController::class, 'edit']);
Route::post('/edit', [MemberController::class, 'update']);
