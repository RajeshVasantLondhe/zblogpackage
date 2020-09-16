<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route; 
use Illuminate\Support\Facades\Auth;
use Models\Zblog;

Route::group(['prefix' => 'api'], function(){

    Route::get('/zblog', function () {

        // $blogs = Zblog::all();
        return response()->json([
            'code' => 200,
            'error' => false,
            'message' => 'Activity is successfully done.',
            'data' => []
        ], 200);
    });
   
});
