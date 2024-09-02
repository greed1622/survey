<?php

use App\Livewire\CustomerAddress;
use App\Livewire\CustomerFeedback;
use App\Livewire\CustomerRating;
use App\Livewire\Profile;
use App\Livewire\Service;
use App\Livewire\SurveyForm;
use Illuminate\Support\Facades\Route;

Route::get('/', Profile::class);
Route::get('/survey-form', SurveyForm::class);
Route::get('/address', CustomerAddress::class);
Route::get('/success', function () {
    return 'Transaction successful!';
})->name('success');
Route::get('/error', function () {
    return 'Transaction failed!';
})->name('error');
Route::get('/cancelled', function () {
    return 'Transaction cancelled!';
})->name('cancelled');

Route::get('/profile', Profile::class);

Route::get('/services', Service::class);
Route::get('/rating', Customerrating::class);
Route::get('/feedback', CustomerFeedback::class);