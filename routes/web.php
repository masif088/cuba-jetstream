<?php


use App\Http\Controllers\CollegeController;
use App\Http\Controllers\LearningPathController;
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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/learningpath', [LearningPathController::class,'index']);
Route::get('/learningpath/create', [LearningPathController::class,'create']);
Route::resource('college', CollegeController::class)->only(['index','create','edit']);
