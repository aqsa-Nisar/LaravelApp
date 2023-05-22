<?php
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PostController;
use App\Models\Author;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
Route::get('/', function () {
  return view('welcome');
});
Route::post('authors', [AuthorController::class, 'createAuthor']);
Route::post('posts', [PostController::class, 'createPost']);

Route::get('/authors/{id}',[AuthorController::class, 'GetPostByauthor']);






