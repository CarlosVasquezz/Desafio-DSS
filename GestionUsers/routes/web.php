<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CreateController;


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Rutas para el CRUD de empleados
Route::resource('empleados', EmpleadoController::class)->middleware('checkRole:admin');



Route::get('/user/{id}', [UserController::class, 'show'])->name('user.profile');


Route::post('/create', [CreateController::class, 'create'])->name('create.store');
