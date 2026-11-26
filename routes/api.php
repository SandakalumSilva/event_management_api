<?php

use App\Http\Controllers\AttendeeCOntroller;
use App\Http\Controllers\EventCOntroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('events', EventCOntroller::class);
Route::apiResource('events.attendees',AttendeeCOntroller::class)->scoped()->except("update");

