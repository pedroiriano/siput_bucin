<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;

Route::get('/', 'PagesController@index')->name('home');

Route::get('/daftar', [RegisterController::class, 'index'])->name('register');
Route::post('/daftar', [RegisterController::class, 'store']);
Route::get('/merah/istana/raja', [LoginController::class, 'index'])->name('login');
Route::post('/merah/istana/raja', [LoginController::class, 'store']);
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/kisah-kami', 'PagesController@story')->name('story');
Route::get('/visi-dan-misi', 'PagesController@vision')->name('vision');
Route::get('/berita', 'PagesController@news')->name('news');
Route::get('/berita/detail', 'PagesController@news_detail')->name('news_detail');
Route::get('/pengumuman', 'PagesController@announcement')->name('announcement');
Route::get('/pirt', 'PagesController@production')->name('production');
Route::get('/sertifikasi-halal', 'PagesController@halal')->name('halal');
Route::get('/izin-edar', 'PagesController@market')->name('market');

Route::get('/sistem', 'BackendController@index')->name('backend');
