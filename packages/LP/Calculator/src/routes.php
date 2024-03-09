<?php

use LP\Calculator\UserController;



Route::get('calculator',function(){

    echo "a";
});

// Route::get('add',[LP\Calculator\UserController::class],'index');
Route::get('/add', [UserController::class, 'index']);
