<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StoreController;

Route::get('/daftar', [RegisterController::class, 'index'])->name('register');
Route::post('/daftar', [RegisterController::class, 'store']);

Route::get('/merah/istana/raja', [LoginController::class, 'index'])->name('login');
Route::post('/merah/istana/raja', [LoginController::class, 'store']);

Route::post('/keluar', [LogoutController::class, 'store'])->name('logout');

Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/kisah-kami', [PagesController::class, 'story'])->name('story');
Route::get('/visi-dan-misi', [PagesController::class, 'vision'])->name('vision');
Route::get('/berita', [PagesController::class, 'news'])->name('news');
Route::get('/berita/detail', [PagesController::class, 'news_detail'])->name('news-detail');
Route::get('/pengumuman', [PagesController::class, 'announcement'])->name('announcement');
Route::get('/pirt', [PagesController::class, 'production'])->name('production');
Route::get('/sertifikasi-halal', [PagesController::class, 'halal'])->name('halal');
Route::get('/izin-edar', [PagesController::class, 'market'])->name('market');
Route::get('/haki', [PagesController::class, 'trademark'])->name('trademark');

Route::get('/sistem', [BackendController::class, 'index'])->name('backend');

Route::get('/wewenang', [RoleController::class, 'index'])->name('role');
Route::get('/wewenang/tambah', [RoleController::class, 'create'])->name('role-form');
Route::post('/wewenang', [RoleController::class, 'store'])->name('role-store');
Route::get('/wewenang/{role}', [RoleController::class, 'show'])->name('role-show');
Route::get('/wewenang/{role}/ubah', [RoleController::class, 'edit'])->name('role-edit');
Route::put('/wewenang/{role}', [RoleController::class, 'update'])->name('role-update');
Route::delete('/wewenang/{role}', [RoleController::class, 'destroy'])->name('role-delete');

Route::get('/pengguna', [UserController::class, 'index'])->name('user');
Route::get('/pengguna/tambah', [UserController::class, 'create'])->name('user-form');
Route::post('/pengguna', [UserController::class, 'store'])->name('user-store');
Route::get('/pengguna/{user}', [UserController::class, 'show'])->name('user-show');
Route::get('/pengguna/{user}/ubah', [UserController::class, 'edit'])->name('user-edit');
Route::put('/pengguna/{user}', [UserController::class, 'update'])->name('user-update');
Route::delete('/pengguna/{user}', [UserController::class, 'destroy'])->name('user-delete');

Route::get('/toko', [StoreController::class, 'index'])->name('store');
Route::get('/toko/tambah', [StoreController::class, 'create'])->name('store-form');
Route::post('/toko', [StoreController::class, 'store'])->name('store-store');
Route::get('/toko/{store}', [StoreController::class, 'show'])->name('store-show');
Route::get('/toko/{store}/ubah', [StoreController::class, 'edit'])->name('store-edit');
Route::put('/toko/{store}', [StoreController::class, 'update'])->name('store-update');
Route::delete('/toko/{store}', [StoreController::class, 'destroy'])->name('store-delete');
