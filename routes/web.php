<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\UserController;

use App\Http\Livewire\Auth\ForgotPassword;
use App\Http\Livewire\Auth\ResetPassword;
use App\Http\Livewire\Auth\SignUp;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Billing;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Tables;
use App\Http\Livewire\StaticSignIn;
use App\Http\Livewire\StaticSignUp;
use App\Http\Livewire\Rtl;

use App\Http\Livewire\LaravelExamples\UserProfile;
use App\Http\Livewire\LaravelExamples\UserManagement;

use Illuminate\Http\Request;

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

Route::get('/', Login::class)->name('login');

Route::get('/sign-up', SignUp::class)->name('sign-up');
Route::get('/login', Login::class)->name('login');

Route::get('/login/forgot-password', ForgotPassword::class)->name('forgot-password');
 
Route::get('/reset-password/{id}',ResetPassword::class)->name('reset-password')->middleware('signed');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/billing', Billing::class)->name('billing');
    Route::get('/profile', Profile::class)->name('profile');
    Route::get('/tables', Tables::class)->name('tables');
    Route::get('/static-sign-in', StaticSignIn::class)->name('sign-in');
    Route::get('/static-sign-up', StaticSignUp::class)->name('static-sign-up');
    Route::get('/rtl', Rtl::class)->name('rtl');
    Route::get('/laravel-user-profile', UserProfile::class)->name('user-profile');
    Route::get('/laravel-user-management', UserManagement::class)->name('user-management');
});

// User
Route::get('/back/users', [UserController::class, 'index'])->name('user.index');
Route::get('/back/users/create', [UserController::class, 'create'])->name('user.create');
Route::post('/back/users/store', [UserController::class, 'store'])->name('user.store');
Route::get('/back/users/{id}/read', [UserController::class, 'read'])->name('user.read');
Route::get('/back/users/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::post('/back/users/{id}/update', [UserController::class, 'update'])->name('user.update');
Route::post('/back/users/{id}/delete', [UserController::class, 'destroy'])->name('user.destroy');
// Album
Route::get('/back/albums', [AlbumController::class, 'index'])->name('album.index');
Route::get('/back/albums/create', [AlbumController::class, 'create'])->name('album.create');
Route::post('/back/albums/store', [AlbumController::class, 'store'])->name('album.store');
Route::get('/back/albums/{id}/read', [AlbumController::class, 'read'])->name('album.read');
Route::get('/back/albums/{id}/edit', [AlbumController::class, 'edit'])->name('album.edit');
Route::post('/back/albums/{id}/update', [AlbumController::class, 'update'])->name('album.update');
Route::post('/back/albums/{id}/delete', [AlbumController::class, 'destroy'])->name('album.destroy');
// Photo
Route::get('/back/photos', [PhotoController::class, 'index'])->name('photo.index');
// Photo
Route::get('/back/photos', [PhotoController::class, 'index'])->name('photo.index');
Route::get('/back/photos/create', [PhotoController::class, 'create'])->name('photo.create');
Route::post('/back/photos/store', [PhotoController::class, 'store'])->name('photo.store');
Route::get('/back/photos/{id}/read', [PhotoController::class, 'read'])->name('photo.read');
Route::get('/back/photos/{id}/edit', [PhotoController::class, 'edit'])->name('photo.edit');
Route::post('/back/photos/{id}/update', [PhotoController::class, 'update'])->name('photo.update');
Route::post('/back/photos/{id}/delete', [PhotoController::class, 'destroy'])->name('photo.destroy');
// Foto
Route::get('/back/fotos', [FotoController::class, 'index'])->name('foto.index');
// Photo
Route::get('/back/photos', [PhotoController::class, 'index'])->name('photo.index');
Route::get('/back/photos/create', [PhotoController::class, 'create'])->name('photo.create');
Route::post('/back/photos/store', [PhotoController::class, 'store'])->name('photo.store');
Route::get('/back/photos/{id}/read', [PhotoController::class, 'read'])->name('photo.read');
Route::get('/back/photos/{id}/edit', [PhotoController::class, 'edit'])->name('photo.edit');
Route::post('/back/photos/{id}/update', [PhotoController::class, 'update'])->name('photo.update');
Route::post('/back/photos/{id}/delete', [PhotoController::class, 'destroy'])->name('photo.destroy');
