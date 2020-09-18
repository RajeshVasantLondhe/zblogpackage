<?php

use Illuminate\Support\Facades\Route;
  
Route::group(['prefix' => 'api'], function(){ 
    Route::apiResource('zblog', 'Zivlify\Zblog\Http\Controllers\ZblogController');
});