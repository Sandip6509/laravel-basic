<?php

use App\Http\Controllers\RelationshipController;
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
    Route::view('confirm-delete', 'livewire-learn.confirm-delete')->name('livewire.confirm-delete');
    Route::view('wizard-form', 'livewire-learn.wizard-form')->name('livewire.wizard-form');
    Route::view('data-tables', 'livewire-learn.data-table')->name('livewire.data-table');
    Route::view('load-more', 'livewire-learn.load-more')->name('livewire.load-more');
    Route::view('image-upload', 'livewire-learn.image-upload')->name('livewire.image-upload');
});

Route::group(['prefix' => 'relationship'], function () {
    Route::get('one-to-one', [RelationshipController::class, 'oneToOne'])->name('relationship.one-to-one');
    Route::get('one-to-many', [RelationshipController::class, 'oneToMany'])->name('relationship.one-to-many');
    Route::get('many-to-many', [RelationshipController::class, 'manyToMany'])->name('relationship.many-to-many');
    Route::get('has-many-through', [RelationshipController::class, 'hasManyThrough'])->name('relationship.has-many-through');
    Route::get('one-to-one-polymorphic', [RelationshipController::class, 'oneToOnePolymorphic'])->name('relationship.one-to-one-polymorphic');
    Route::get('many-to-many-polymorphic', [RelationshipController::class, 'manyToManyPolymorphic'])->name('relationship.many-to-many-polymorphic');
    Route::get('eager-loading', [RelationshipController::class, 'eagerLoading'])->name('relationship.eager-loading');
});
