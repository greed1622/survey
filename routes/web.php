<?php

use App\Livewire\Profile;
use App\Livewire\Service;
use App\Livewire\SurveyForm;
use Illuminate\Support\Facades\Route;
use App\Livewire\Survey;

Route::get('/survey-form', SurveyForm::class)->name('survey.form');
Route::get('/survey', Survey::class)->name('survey.page');
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