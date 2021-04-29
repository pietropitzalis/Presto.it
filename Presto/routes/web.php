<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\AnnouncementController;

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
Route::get('/search',[AnnouncementController::class,'search'])->name('announcement.search');


// Route::get('/category/{category}',[AnnouncementController::class,'category'])->name('announcement.cat');


// ANNUNCI
 Route::get('/announcement/index',[AnnouncementController::class,'index'])->name('announcement.index');
 Route::get('/announcement/create',[AnnouncementController::class,'create'])->name('announcement.create')->middleware('auth');
 Route::post('/announcement/store',[AnnouncementController::class,'store'])->name('announcement.store')->middleware('auth'); 
 Route::get('/category/{name}/{id}/announcements',[AnnouncementController::class,'announcementByCategory'])->name('announcement.cat');
 Route::get('/announcement/show/{announcement}',[AnnouncementController::class,'show'])->name('announcement.show');
 Route::get('announcement/edit/{announcement}',[AnnouncementController::class , 'edit'])->name('announcement.edit');
 Route::post('announcement/update',[AnnouncementController::class , 'update'])->name('announcement.update');

 //  revisor
Route::get('/revisor/home' , [RevisorController::class,'index'])->name('revisor.home');
Route::post('/revisor/announcement/{id}/accept' , [RevisorController::class,'accept'])->name('revisor.accept');
Route::post('/revisor/announcement/{id}/reject' , [RevisorController::class,'reject'])->name('revisor.reject');

Route::get('/profile',[PublicController::class , 'profile'])->name('profile');