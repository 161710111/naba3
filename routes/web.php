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

Route::get('welcome', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/', 'FrontendController@home')->name('home');
Route::get('profile', 'FrontendController@index1')->name('profile');
Route::get('umroh', 'FrontendController@index2')->name('umroh');
Route::get('wisata', 'FrontendController@index4')->name('wisata');
Route::get('detailwisata/{wisata}', 'FrontendController@nampil')->name('detailwisata');
Route::get('testimoni', 'FrontendController@index5')->name('testimoni');
Route::get('galeri', 'FrontendController@index6')->name('galeri');
Route::get('daftar_umroh', 'FrontendController@index7')->name('daftar_umroh');
Route::get('berita', 'FrontendController@berita')->name('berita');
Route::get('detailberita/{berita}', 'FrontendController@show')->name('detailberita');
Route::get('faqs', 'FrontendController@index9')->name('faqs');
Route::get('kontak', 'FrontendController@index10')->name('kontak');
Route::get('haji', 'FrontendController@index11')->name('haji');
Route::get('jadwal_keberangkatan', 'FrontendController@index14')->name('jadwal_keberangkatan');
Route::get('promo', 'FrontendController@index15')->name('promo');
Route::get('tabungan', 'FrontendController@index16')->name('tabungan');
Route::get('jadwal_manasik', 'FrontendController@index17')->name('jadwal_manasik');
Route::get('menu_umroh', 'FrontendController@index19')->name('menu_umroh');
Route::get('menu_haji', 'FrontendController@index20')->name('menu_haji');
Route::get('menu_wisata', 'FrontendController@index21')->name('menu_wisata');
Route::get('umroh/kategori/{kategori}', 'FrontendController@umrahkategori');
Route::get('haji/kategoria/{kategoria}', 'FrontendController@hajikategori');\
Route::get('wisata/kategoriw/{kategoriw}', 'FrontendController@wisatakategori');
//Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin', 'middleware'=>['auth','role:admin']],function(){
	Route::resource('berita','BeritaController');
	Route::resource('faqs','FaqsController');
	Route::resource('wisata','WisataController');
	Route::resource('kategoriw','KategoriwController');
	Route::resource('haji','HajiController');
	Route::resource('kategoria','KategoriaController');
	Route::resource('tabungan','TabunganController');
	Route::resource('umroh','UmrohController');
	Route::resource('kategorie','KategorieController');
	Route::resource('umplus','UmplusController');
	Route::resource('umpbyreq','UmpbyreqController');
	Route::resource('kontak','KontakController');
	Route::resource('daftar','DaftarController');
	Route::resource('kategori','KategoriController');
	Route::resource('testimoni','TestimoniController');
	Route::resource('galerihome','GalerihomeController');
	Route::resource('galerihaji','GalerihajiController');
	Route::resource('galmanhaji','GalmanhajiController');
	Route::resource('galmanumroh','GalmanumrohController');
	Route::resource('galumplus','GalumplusController');
	Route::resource('galumreguler','GalumregulerController');
	Route::resource('galeriwisata','GaleriwisataController');
});