<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudUserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('dashboard', [CrudUserController::class, 'dashboard']);

Route::get('login', [CrudUserController::class, 'login'])->name('login');
Route::post('login', [CrudUserController::class, 'authUser'])->name('user.authUser');

// EXE1
Route::get('login1', [CrudUserController::class, 'login1'])->name('login1');
Route::post('login1', [CrudUserController::class, 'authUser1'])->name('user.authUser1');

Route::get('create', [CrudUserController::class, 'createUser'])->name('user.createUser');
Route::post('create', [CrudUserController::class, 'postUser'])->name('user.postUser');

// EXE1
Route::get('create1', [CrudUserController::class, 'createUser1'])->name('user.createUser1');
Route::post('create1', [CrudUserController::class, 'postUser1'])->name('user.postUser1');

Route::get('read', [CrudUserController::class, 'readUser'])->name('user.readUser');

// EXE1
Route::get('view1', [CrudUserController::class, 'readUser1'])->name('user.view1');


Route::get('delete', [CrudUserController::class, 'deleteUser'])->name('user.deleteUser');

//EXE1
Route::get('delete1', [CrudUserController::class, 'deleteUser1'])->name('user.deleteUser1');

Route::get('update', [CrudUserController::class, 'updateUser'])->name('user.updateUser');
Route::post('update', [CrudUserController::class, 'postUpdateUser'])->name('user.postUpdateUser');

//EXE1
Route::get('update1', [CrudUserController::class, 'updateUser1'])->name('user.updateUser1');
Route::post('update1', [CrudUserController::class, 'postUpdateUser1'])->name('user.postUpdateUser1');


Route::get('list', [CrudUserController::class, 'listUser'])->name('user.list');

// EXE1
Route::get('list1', [CrudUserController::class, 'listUser1'])->name('user.list1');

Route::get('signout', [CrudUserController::class, 'signOut'])->name('signout');

Route::get('/', function () {
    return view('welcome');
});