<?php

use Illuminate\Support\Facades\Route;
use App\Models\Supplier;

Route::get('/', function () {
    // return view('welcome');
    return Supplier::all();
});
