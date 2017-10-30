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
    return view('content.home');
})->name('home');


Route::get('tentang-kami', function(){
	return view('content.tentang-kami');
})->name('tentang');

Route::get('kontak', function(){
	return view('content.contact');
})->name('contact');

Route::get('vendor', 'VendorController@index')->name('vendor');

Route::get('detail-vendor/{id}/{params}', 'VendorController@show')->name('detail-vendor');



Route::get('paket', function(){
	return view('content.paket');
});

Route::get('gallery', function(){
	return view('content.gallery');
})->name('gallery');


Route::get('checkout-step-1', function(){
	return view('content.checkout-step-1');
});

Route::get('checkout-step-2', function(){
	return view('content.checkout-step-2');
});

Route::get('checkout-step-3', function(){
	return view('content.checkout-step-3');
});

Route::get('checkout-step-4', function(){
	return view('content.checkout-step-4');
});

Route::get('kategori', 'KategoriController@index');

