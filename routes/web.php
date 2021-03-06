<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;

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

/*
Route::get('/hello', function () {
    return 'Hello World';
});
*/

/*
Route::get('/users/{id}/{name}', function ($id, $name) {
    return 'This is user '.$name.' with the id of '.$id;
});
*/

Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/services', [PagesController::class, 'services']);
Route::resources(['posts' => PostsController::class]);



Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);
