<?php

use Illuminate\Http\Request;

Route::get('stats', function () {
    return [
        'series' => 200,
        'lessons' => 1300,
    ];
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
