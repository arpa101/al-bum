<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\albumcontroller;
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
    return view('Album/album');
});

// Route::get('/',[albumcontroller::class,'album']);

Route::get('/redirect', function () {
        return view('admin/admindashboard');
    });

    Route::POST('/addcategory',[albumcontroller::class,'addFolder'])->name('folder.create');
    Route::GET('/categorylist',[albumcontroller::class,'showfolder'])->name('folder.show');
    Route::GET('/addsubcategory',[albumcontroller::class,'Sub'])->name('create.sub');
    Route::GET('/addphoto',[albumcontroller::class,'Subcat'])->name('create.subcat');
    //Route::GET('/addphoto',[albumcontroller::class,'cat'])->name('create.sub');
    Route::POST('/subcategory',[albumcontroller::class,'addsubFolder'])->name('subfolder.create');
    Route::GET('/subcategorylists',[albumcontroller::class,'showsubfolder'])->name('subfolder.show');
    Route::POST('/folder',[albumcontroller::class,'addFile'])->name('file.create');
    Route::GET('/subcategorylists/{id}',[albumcontroller::class,'showsubgallery'])->name('subgallery.show');
    Route::GET('/images/{id}',[albumcontroller::class,'fileshow'])->name('showimages');
    Route::GET('/admin',[albumcontroller::class,'admindashboard'])->name('admin');
    //Route::GET('/images/{id}',[albumcontroller::class,'editfile'])->name('showimages');
    Route::get('/images/edit/{id}', [albumcontroller::class, 'editfile'])->name('file.edit');
    Route::get('/delete/{id}', [albumcontroller::class, 'delete'])->name('file.delete');
    Route::POST('/updated/{id}', [albumcontroller::class, 'edit'])->name('edit');
    
// Route::get('/', function () {
//     return view('admin/admindashboard');
// });


    Route::get('/search', [albumcontroller::class,'search'])->name('search');
Route::get('/addadmin', function () {
    return view('admin/addadmin');
});
Route::get('/adminlist', function () {
    return view('admin/adminlist');
});
Route::get('/addcategory', function () {
    return view('admin/addcategory');
});


// Show sub gallery route

Route::get('/showgallerycategory', function () {
    return view('Album/subgallery');
});
Route::get('/showgallery', function () {
    return view('Album/gallery');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\albumcontroller::class, 'index'])->name('home');
