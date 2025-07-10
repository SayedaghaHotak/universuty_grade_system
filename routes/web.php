<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

// 🔒 مسیر اصلی داشبورد: تشخیص نقش کاربر
Route::middleware(['auth'])->get('/dashboard', function () {
    $user = auth()->user();

    if ($user->role === 'professor') {
        return redirect()->route('professor.dashboard');
    } elseif ($user->role === 'student') {
        return redirect()->route('student.dashboard');
    }

    abort(403, 'نقش نامعتبر!');
})->name('dashboard');

// 🔐 مسیرهایی که نیاز به احراز هویت دارند
Route::middleware(['auth'])->group(function () {

    // 🧑‍🎓 داشبورد دانشجو
    Route::get('/dashboard/student', function () {
        return view('dashboard.student', [
            'user' => auth()->user()
        ]);
    })->name('student.dashboard');

    // 👨‍🏫 داشبورد استاد
    Route::get('/dashboard/professor', function () {
        return view('dashboard.professor', [
            'user' => auth()->user()
        ]);
    })->name('professor.dashboard');

    // 🔓 خروج از سیستم (logout)
    Route::post('/logout', function () {
        auth()->logout();
        return redirect('/login');
    })->name('logout');

    // 👤 پروفایل
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// 🔐 مسیرهای احراز هویت Breeze یا Laravel UI
require __DIR__.'/auth.php';
