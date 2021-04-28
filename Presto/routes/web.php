<?php

use App\Http\Controllers\AnnouncementController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[AnnouncementController::class,'homepage'])->name('homepage');

// Route::get('/category/{category}',[AnnouncementController::class,'category'])->name('announcement.cat');


// ANNUNCI
 Route::get('/announcement/index',[AnnouncementController::class,'index'])->name('announcement.index');
 Route::get('/announcement/create',[AnnouncementController::class,'create'])->name('announcement.create')->middleware('auth');
 Route::post('/announcement/store',[AnnouncementController::class,'store'])->name('announcement.store')->middleware('auth'); 
 Route::get('/category/{name}/{id}/announcements',[AnnouncementController::class,'announcementByCategory'])->name('announcement.cat');
 Route::get('/announcement/show/{announcement}',[AnnouncementController::class,'show'])->name('announcement.show');
