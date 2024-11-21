<?php


use App\Http\Controllers\TelegramController;

Route::get('/send-message', function () {
    return view('send-message');
});

Route::post('/send-message', [TelegramController::class, 'sendMessage']);
