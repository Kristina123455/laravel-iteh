<?php
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


//Route::resource('books', BookController::class);
Route::resource('books',BookController::class);   //rutiranje preko kontrolera
Route::get('/books/search/{name}', [BookController::class,'search']);
Route::get('/books/{id}', [BookController::class,'show']);
Route::get('/books', [BookController::class,'index']);
Route::post('/register',[AuthController::class,'register']); 
Route::post('/login',[AuthController::class,'login']); 




//protected routes
Route::group(['middleware'=>['auth:sanctum']], function () {
    Route::post('/books',[BookController::class,'store']); 
    Route::put('/books/{id}',[BookController::class,'update']); 
    Route::delete('/books/{id}',[BookController::class,'destroy']); 
    Route::post('/logout',[AuthController::class,'logout']); 
    
});

Route::middleware('auth:api')->get('/user',function(Request $request){
    return $request->user();
});
