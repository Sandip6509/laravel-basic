<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::group(['prefix' => 'basic'], function () {
    Route::view('create-first-project', 'basic.create-first-project')->name('basic.create-first-project');
    Route::view('routing', 'basic.routing.index')->name('basic.routing');
});

Route::group(['prefix' => 'livewire'], function () {
    Route::view('submit-form-request', 'livewire-learn.livewire-form')->name('livewire.submit-form-request');
    Route::view('change-event', 'livewire-learn.change-event')->name('livewire.change-event');
    Route::view('click-event', 'livewire-learn.click-event')->name('livewire.click-event');
    Route::view('sweetalert', 'livewire-learn.sweetalert')->name('livewire.sweetalert');
    Route::view('notification-demo', 'livewire-learn.notification-demo')->name('livewire.notification-demo');
    Route::view('livewire-crud', 'livewire-learn.crud')->name('livewire.livewire-crud');
    Route::view('dependant-dropdown', 'livewire-learn.dependant-dropdown')->name('livewire.dependant-dropdown');
});
