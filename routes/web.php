<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

Route::get('/', function () {
    return view('emails.mailform');
});

Route::post('send-mail', [MailController::class, 'index'])->name('send.mail');
