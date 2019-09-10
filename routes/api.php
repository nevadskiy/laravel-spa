<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;

Route::get('stats', function () {
    return [
        'series' => 200,
        'lessons' => 1300,
    ];
});

Route::get('achievements', function () {
    $achievements = [];

    foreach (range(1, 5) as $i) {
        $achievements[] = "Your #{$i} achievement";
    }

    return response()->json($achievements, Response::HTTP_OK);
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
