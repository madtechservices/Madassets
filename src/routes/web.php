<?php

Route::post('/campuses', [Madtechservices\MadAssets\Http\Controllers\CampusController::class, 'store'])->name('campuses.store');

Route::get('/campuses/create', function () {
    return view('campuses.create');
})->name('campuses.create');

Route::get('/settings/campuses', [Madtechservices\MadAssets\Http\Controllers\CampusController::class, 'index'])->name('settings.campuses');

Route::get('/campuses', [\Madtechservices\MadAssets\Http\Controllers\CampusController::class, 'index'])->name('settings.campuses');