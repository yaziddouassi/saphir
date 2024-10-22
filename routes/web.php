<?php

use Illuminate\Support\Facades\Route;

Route::get('/robert', function () {
    return view('saphir::kader');
});

Route::get('/contact', [Saphircrud\Saphir\Http\Controllers\ContactController::class,'index']); 