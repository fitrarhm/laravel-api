<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Database\Events\MigrationsEnded;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// 1. Get all (GET) /api/posts
// 2. Create a post (POST) /api/posts
// 3. Get a single post (GET) /api/posts/{id}
// 4. Update a single post (PUT/PATCH) /api/posts/{id}
// 5. Delete a post (DELETE) /api/posts/{id}


// To create a resource (posts) in laravel
// 1. Create the Database and MigrationsEnded
// 2. Create a model
// 3. Create a controller to get info from the database
// 4. return that info


Route::get('/hello', function() {
    return ['Message' => 'Hello World'];
});


// Cara lambat satu persatu
// Route::get('/posts', 'PostController@index');
// Route::post('/posts', 'PostController@store');
// Route::get('/posts/{id}', 'PostController@show');
// Route::put('/posts/{id}', 'PostController@update');
// Route::delete('/posts/{id}', 'PostController@destroy');

// Cara singkat

Route::prefix('v1')->group(function() {
    Route::apiResource('posts', PostController::class);
});



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
