<?php

use App\Http\Controllers\FeedbackController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

Route::get('/', function () {
    return redirect('tasks');
})->name('home');

Route::get('/tasks/{task}/confirm_delete', [TaskController::class, 'confirmDelete'])->name('tasks.confirm_delete');
Route::get('/feedbacks/thanks', [FeedbackController::class, 'thanks'])->name('feedbacks.thanks');

Route::resource('tasks', TaskController::class)
    ->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);

Route::resource('feedbacks', FeedbackController::class)
    ->only(['index', 'create', 'store']);
