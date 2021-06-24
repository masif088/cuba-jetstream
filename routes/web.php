<?php


use App\Http\Controllers\CollegeController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\LearningPathController;
use App\Http\Controllers\StudyProgramController;
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
Route::middleware(['auth:sanctum'])->group(function (){
//    Route::get('/learningpath', [LearningPathController::class,'index']);
//    Route::get('/learningpath/create', [LearningPathController::class,'create']);
    Route::resource('learning-path', LearningPathController::class)->only(['index','create','edit']);
    Route::resource('college', CollegeController::class)->only(['index','create','edit']);
    Route::resource('faculty', FacultyController::class)->only(['index','create','edit']);
    Route::resource('program-study', StudyProgramController::class)->only(['index','create','edit']);
});
