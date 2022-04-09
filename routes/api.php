<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicController;
Route::get('/music',[MusicController::class,'index']);