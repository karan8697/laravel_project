<?php


Route::get('/', function () {
    return view('welcome');
});
Route::get('/header', function () {
    return view('header');
});
Route::get('/dashheader', function () {
    return view('dashheader');
});
Route::get('/footer', function () {
    return view('footer');
});
Route::get('/matches', function () {
    return view('matches');
});
Route::get('/news', function () {
    return view('news');
});
Route::get('/players', function () {
    return view('players');
});
Route::get('/results', function () {
    return view('results');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/uploadnews', function () {
    return view('uploadnews');
});
Route::get('/uploadmatches', function () {
    return view('uploadmatches');
});
Route::get('/uploadplayers', function () {
    return view('uploadplayers');
});
Route::get('/uploadresults', function () {
    return view('uploadresults');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/news','mynews@data');
Route::get('/matches','mymatches@data');
Route::get('/players','myplayers@data');
Route::get('/results','myresults@data');
Route::get('/profile','myprofile@data');

Route::get('/inputresults','myresults@formdata');
Route::get('/inputnews','mynews@formdata');
Route::get('/inputlplayers','myplayers@formdata');
Route::get('/inputresults','myresults@formdata');
Route::get('/inputusers','myusers@formdata');
Route::get('/loginprocess','loginprocess@data');

// Route::get('/getupvote','myupvotes@data');
