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

use App\Models\Carousel as Carousel;

Route::get('/', function () {
    $carousel = Carousel::where('section_name', 'intro')->get();
    return view('welcome', ['carousels' => $carousel]);
});


Route::get('/gallery', function () {
    $gallery = \App\gallery::get();
    return view('gallery')->with('gallery', $gallery);
});

Route::get('/portfolio', function () {

    return view('portfolio');
});




Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');
Route::get('/admin/carousel', 'HomeController@carouselAdmin')->name('carouselAdmin');
Route::get('/carousel/{section}', 'CarouselController@index')->name('carousel');
Route::post('/intro/carousel', 'CarouselController@saveCarousel')->name('createCarousel');

Route::get('/about/block', 'BlockController@about')->name('about');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/hero', 'HomeController@hero')->name('hero');
