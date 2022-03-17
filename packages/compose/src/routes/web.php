<?php

use Illuminate\Support\Facades\Route;

use HP\Crud\CrudController;
use HP\Compose\Controllers\ComposeController;
use App\Http\Controllers\sampleController;


Route::get('/crud-off',function(){
    echo "hii";
});

Route::get('/crud-a',[sampleController::class,'index']);

Route::get('/crud',[ComposeController::class,'index']);
