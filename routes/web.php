<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;

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
 */

Auth::routes();

// R del CRUD
Route::get('/',[UserController::class, 'index'])->middleware('auth');
Route::get('/homeTeacher',[UserController::class,'index'])->name('home')->middleware('auth');

// D del CRUD
Route::delete('/delete{id}', [UserController::class, 'destroy'])->name('deleteUser')->middleware('isTeacher', 'auth');

// C del CRUD
Route::get('/create', [UserController::class, 'create']) ->name('createUser')->middleware('isTeacher', 'auth');
Route::post('/', [UserController::class, 'store']) ->name('storeUser')->middleware('isTeacher', 'auth');

// U del CRUD
Route::get('/edit/{id}', [UserController::class, 'edit'])->name('editUser')->middleware('isTeacher', 'auth');
Route::patch('/user/{id}', [UserController::class, 'update'])->name('updateUser')->middleware('isTeacher', 'auth');

// SHOW
Route::get('/showUser/{id}',[UserController::class,'show'])->name('showUser')->middleware('auth');

// Validation
// Route::post('/save', [ValidateformController::class, 'saveDataForm']);

// CRUD GRADES

// R
// Route::get('/home',[GradeController::class,'redirectUsers']);
// Route::get('/homeTeacher',[GradeController::class,'index']);