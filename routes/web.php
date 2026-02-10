<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/notes',[NoteController::class,'index']);

Route::get('/notes/create',[NoteController::class,'create']);

Route::put('/notes/store',[NoteController::class,'store']);

Route::get('/notes/{note}/edit',[NoteController::class,'edit']);

Route::patch('/notes/{note}',[NoteController::class,'update']);

Route::get('/notes/{note}',[NoteController::class,'show']);

Route::get('/notes/{note}/delete',[NoteController::class,'destroy']);
