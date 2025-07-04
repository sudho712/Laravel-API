<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get("/test",function(){
    return ["name"=>"raj",'age','25'];
});

Route::get('students',[StudentController::class,'list']);