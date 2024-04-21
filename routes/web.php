<?php

use App\Http\Controllers\AlbumController;
use Illuminate\Support\Facades\Route;


// Route::view('/check','Album.index');
Route::resource('/album', AlbumController::class);
