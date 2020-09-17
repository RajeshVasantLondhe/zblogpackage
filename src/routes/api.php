<?php

use Illuminate\Support\Facades\Route; 
use Zivlify\Zblog\Models\Zblog;

 

Route::group(['prefix' => 'api'], function(){

    Route::get('/zblog', function () {
 
        $zblogs = Zblog::all();  
        return response()->json([
            'code' => 200,
            'error' => false,
            'message' => 'Activity is successfully done.',
            'data' => $zblogs
        ], 200);

    });


    Route::post('/zblog', function () {
 
        $zblogs = Zblog::all();
        $payload = request()->all();
        
        return response()->json([
            'code' => 200,
            'error' => false,
            'message' => 'Activity is successfully done.',
            'data' => $zblogs
        ], 200);

    });

   
});
 