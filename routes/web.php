<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\pesanController;
use App\Http\Controllers\projectController;
use App\Http\Controllers\indexController;


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

// Route::get('/', function () {
//     return view('frontend.frontendd');
// });


Route::get('/login', function () {
    return view('login');
});

Route::get('/', [indexController::class, 'index'])->name('frontend');


Route::post('contact', [indexController::class,'submitcontact'])->name('contact.submit');


Route::get('/project', [projectController::class, 'index'])->name('project');
Route::get('/addproject', [projectController::class, 'add']);
Route::post('/saveproject', [projectController::class, 'save']);
Route::get('/hapuss/{id}',[projectController::class, 'hapus']);
Route::get('/edit/{id}', [ProjectController::class, 'edit']);
Route::post('/update/{id}', [projectController::class, 'update']);

Route::get('/pesan', [pesanController::class, 'index'])->name('pesan');
Route::get('/hapus/{id}',[pesanController::class, 'hapuspesan']);
Route::get('/addpesan', [indexController::class, 'add']);
Route::post('/savepesan', [indexController::class, 'save']);
Route::get('/editpesan/{id}', [indexController::class, 'edit']);
Route::post('/updatepesan/{id}', [indexController::class, 'update']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
