<?php

use App\Http\Controllers\PodcastsController;
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
    return 'Hello World';
});

// adding new podcast to database
Route::post('/add',  [PodcastsController::class, 'store']);

// approve a podcast convert the status from review to published
Route::post('/{id}', [PodcastsController::class, 'edit']);

// display all podcasts published with where is published with pagination
Route::get('/podcasts/published',  [PodcastsController::class, 'index']);

// get a single podcast based on id
Route::get('/podcast/{id}',  [PodcastsController::class, 'show']);

// update a podcast in laravel
Route::post('/podcast/{id}', [PodcastsController::class, 'update']);

// Delete a podcast
Route::post('/podcast/{id}', [PodcastsController::class, 'destroy']);

