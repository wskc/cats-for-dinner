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
    return view('welcome');
});

Route::get('cats', function () {
    $giphyBetaUrl = 'http://api.giphy.com/v1/gifs/random?api_key=dc6zaTOxFJmzC&tag=funny+cats';
    $randomCats = json_decode(file_get_contents($giphyBetaUrl), true);
    $randomCatGif = $randomCats['data']['fixed_height_downsampled_url'];

    return view('cats', ['dinner' => $randomCatGif]);
});
