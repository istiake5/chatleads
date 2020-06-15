<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('/movie', 'MovieController');
Route::apiResource('/movie/{movie}/comment', 'CommentController');
