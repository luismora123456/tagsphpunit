<?php

use Illuminate\Support\Facades\Route;
use App\Models\Tag;


Route::get('/', function () {
    return view('welcome', [
        'tags' => App\Models\Tag::get()
    ]);
});


Route::post('tags', [\App\Http\Controllers\TagController::class, 'store']);
