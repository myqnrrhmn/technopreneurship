<?php

use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Route;

Route::controller(HomepageController::class)->name('homepage.')->group(function(){
    Route::get('/', 'index')->name('index');
});
