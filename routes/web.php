<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\DataController;


Route::get('/test-email', function () {
    Mail::raw('Ini adalah email percobaan dari Laravel.', function ($message) {
        $message->to('penerima@example.com')
                ->subject('Uji Coba Email dari Laravel');
    });

    return 'Email berhasil dikirim!';
});


Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard',[DataController::class,'index'])->name('dashboard');
    Route::get('/ruangan',[DataController::class,'ruangan'])->name('ruangan');
    Route::get('/booking',[DataController::class,'booking'])->name('booking');
});

require __DIR__.'/auth.php';
