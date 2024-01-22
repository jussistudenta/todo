<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\FeedbackController;
use Illuminate\Support\Facades\Route;

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

Route::get('/admin', [FeedbackController::class, 'index'])->middleware(['auth']);

Route::get('/dashboard',
    [FeedbackController::class, 'index'])->middleware(['auth'])
    ->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/tasks/{task}/confirm_delete', [TaskController::class, 'confirmDelete'])->name('tasks.confirm_delete');
Route::get('/feedbacks/thanks', [FeedbackController::class, 'thanks'])->name('feedbacks.thanks');
Route::get('/admin/feedbacks', [FeedbackController::class, 'index'])->name('feedbacks.index');

Route::resource('tasks', TaskController::class)
    ->only(['index', 'create', 'store', 'edit', 'update', 'destroy'])->middleware(['auth']);

Route::resource('feedbacks', FeedbackController::class)
    ->only(['create', 'store']);
