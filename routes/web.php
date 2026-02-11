<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {

    Route::get('/notes',[NoteController::class,'index']);

    Route::get('/notes/create',[NoteController::class,'create']);

    Route::put('/notes/store',[NoteController::class,'store']);

    Route::get('/notes/{note}/edit',[NoteController::class,'edit']);

    Route::patch('/notes/{note}',[NoteController::class,'update']);

    Route::get('/notes/{note}',[NoteController::class,'show']);

    Route::delete('/notes/{note}',[NoteController::class,'destroy']);

    //logout
    Route::get('/logout',[LoginController::class,'logout']);
});

Route::middleware(['guest'])->group(function () {

    Route::get('/register',[RegisterController::class,'create']);
    Route::put('/register',[RegisterController::class,'store']);

    Route::get('/login',[LoginController::class,'create']);
    Route::put('/login',[LoginController::class,'store']);
});
