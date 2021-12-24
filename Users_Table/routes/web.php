<?php
use App\Http\Controllers\UtilisateurController;
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

Route::get('/',[UtilisateurController::class,'index']);
Route::get('/',[UtilisateurController::class,'edit']) ;
Route::get('/',[UtilisateurController::class,'show']) ;
Route::get('/',[UtilisateurController::class,'create']) ;
Route::post('/',[UtilisateurController::class,'store']) ;
Route::post('/',[UtilisateurController::class,'update']) ;
Route::post('/',[UtilisateurController::class,'detele']) ;
