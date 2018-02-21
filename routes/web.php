<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/create_account', function () {
    return view('pages.create_account');
});

Route::get('/log_in', function () {
    return view('pages.log_in');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::post('/contact', function () {

    $data = request()->all();

    echo "Email: ". $data['email'] . '<br>';
    echo "Subject: ". $data['subject'] . '<br>';
    echo "Message: ". $data['body'];

});