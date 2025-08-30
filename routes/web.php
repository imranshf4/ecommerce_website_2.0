<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
    // return redirect('/admin/dashboard');
});

Route::get('/admin/{any}', function () {
    return view('admin.app');
})->where('any', '.*');
############## frontend routes ################
require __DIR__.'/frontend.php';