<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// ទំព័រ Login
Route::get('/', function () {
    return view('welcome');
})->name('login');

Route::post('/', function (Request $request) {
    return redirect()->route('dashboard');
});

// ទំព័រ Dashboard (ហៅ View ផ្ទាល់)
Route::get('/dashboard', function () {
    return view('dashboard'); // ត្រូវប្រាកដថាមាន file resources/views/dashboard.blade.php
})->name('dashboard');
Route::get('/memories', function () {
    return view('memories');
})->name('memories.index');
// 📌 Route សម្រាប់ទំព័រកម្រិតក្ដីសុខ
Route::get('/happiness', function () {
    return view('happiness');
})->name('happiness.index');
