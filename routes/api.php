<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::any('/convert', 'ConverterController@index')->name('converter');
Route::any('/converted/list', 'ReportingController@list')->name('list');
Route::any('/converted/top', 'ReportingController@top')->name('top');