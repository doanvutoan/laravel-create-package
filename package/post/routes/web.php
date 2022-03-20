<?php

use Mallcode\Post\Http\Controllers\PostController;

Route::get('/post',[PostController::class,'index']);