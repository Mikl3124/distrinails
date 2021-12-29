<?php

use Illuminate\Support\Facades\Route;

Route::get('install/pre-installation', 'InstallController@complete')->name('install.pre_installation');
Route::get('install/configuration', 'InstallController@complete')->name('install.configuration.show');
Route::post('install/configuration', 'InstallController@complete')->name('install.configuration.post');
Route::get('install/complete', 'InstallController@complete')->name('install.complete');

Route::get('license', 'LicenseController@create')->name('license.create');
Route::post('license', 'LicenseController@store')->name('license.store');
