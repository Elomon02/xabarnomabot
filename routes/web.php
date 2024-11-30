<?php


use App\Http\Controllers\TelegramController;
use App\Http\Controllers\Controller;



Route::get('/send-message', function(){
    return view('send-message');
});

Route::get('/', [Controller::class, 'index']);

Route::post('/send-message',[TelegramController::class,'sendMessage']);

