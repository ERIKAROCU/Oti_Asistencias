<?php

<<<<<<< HEAD
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
=======
use Illuminate\Support\Facades\Route;
>>>>>>> e4693646b05a06d721246768fe2b85237c94d6c2

Route::get('/', function () {
    return view('welcome');
});
<<<<<<< HEAD

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('empleados', EmpleadoController::class)->middleware('auth');

require __DIR__.'/auth.php';
=======
>>>>>>> e4693646b05a06d721246768fe2b85237c94d6c2
