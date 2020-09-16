<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route; 
use Illuminate\Support\Facades\Auth;
use Zivlify\Zblog\Models\Zblog;

Route::group(['prefix' => 'api'], function(){

    Route::get('/zblog', function () {

        $zblogs = Zblog::factory()->count(3)->make();
        return response()->json([
            'code' => 200,
            'error' => false,
            'message' => 'Activity is successfully done.',
            'data' => $zblogs
        ], 200);
    });
   
});
