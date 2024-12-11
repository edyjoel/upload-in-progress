<?php

use App\Http\Controllers\uploadFileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/upload-file', [UploadFileController::class, 'uploadFile'])->name('upload.file');
