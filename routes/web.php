<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Admin\Main\IndexController;


Route::prefix('/')->group(function () {
    Route::get('/', [App\Http\Main\IndexController::class, 'index'])->name('index');
    Route::get('/login', [App\Http\Main\IndexController::class, 'login'])->name('login');
    Route::get('/signup', [App\Http\Main\IndexController::class, 'signup'])->name('signup');
});
////
//Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin'], function () {
//    Route::group(['namespace' => 'Main'], function () {
//        Route::get('/', 'IndexController')->name('admin');
//    });
//});

//Route::get('/', [\App\Http\Admin\main\IndexController::class, 'index']);
//Route::get('/signup', [\App\Http\Admin\main\IndexController::class, 'index']);
//Route::get('/login', [\App\Http\Admin\main\IndexController::class, 'index']);


Auth::routes(['verify' => true]);
//
//Route::get('/home', [App\Http\Controllers\IndexController::class, 'index'])->name('home');





//Route::group([], function () {
//    Route::get('/', [IndexController::class, '__invoke']);
//});





Route::prefix('admin')->middleware(['auth', 'admin', 'verified'])->group(function () {
    Route::get('/admin', [App\Http\Admin\Main\IndexController::class, '__invoke']);
});

















Route::prefix('posts')->group(function () {
    Route::get('/', [App\Http\Admin\Post\IndexController::class, '__invoke'])->name( 'admin.post.index');
    Route::get('/create', [App\Http\Admin\Post\CreateController::class, '__invoke'])->name('admin.post.create');
    Route::post('/create', [App\Http\Admin\Post\StoreController::class, '__invoke'])->name('admin.post.store');
    Route::get('/{post}', [App\Http\Admin\Post\ShowController::class, '__invoke'])->name('admin.post.show');
    Route::get('/{post}/edit', [App\Http\Admin\Post\EditController::class, '__invoke'])->name('admin.post.edit');
    Route::patch('/{post}', [App\Http\Admin\Post\UpdateController::class, '__invoke'])->name('admin.post.update');
    Route::delete('/{post}', [App\Http\Admin\Post\DeleteController::class, '__invoke'])->name('admin.post.delete');
});
Route::prefix('categories')->group(function () {
    Route::get('/', [App\Http\Admin\Category\IndexController::class, '__invoke'])->name('admin.category.index');
    Route::get('/create', [App\Http\Admin\Category\CreateController::class, '__invoke'])->name('admin.category.create');
    Route::post('/create', [App\Http\Admin\Category\StoreController::class, '__invoke'])->name('admin.category.store');
    Route::get('/{category}', [App\Http\Admin\Category\ShowController::class, '__invoke'])->name('admin.category.show');
    Route::get('/{category}/edit', [App\Http\Admin\Category\EditController::class, '__invoke'])->name('admin.category.edit');
    Route::patch('/{category}', [App\Http\Admin\Category\UpdateController::class, '__invoke'])->name('admin.category.update');
    Route::delete('/{category}', [App\Http\Admin\Category\DeleteController::class, '__invoke'])->name('admin.category.delete');
});
Route::prefix('tags')->group(function () {
    Route::get('/', [App\Http\Admin\Tag\IndexController::class, '__invoke'])->name( 'admin.tag.index');
    Route::get('/create', [App\Http\Admin\Tag\CreateController::class, '__invoke'])->name('admin.tag.create');
    Route::post('/create', [App\Http\Admin\Tag\StoreController::class, '__invoke'])->name('admin.tag.store');
    Route::get('/{tag}', [App\Http\Admin\Tag\ShowController::class, '__invoke'])->name('admin.tag.show');
    Route::get('/{tag}/edit', [App\Http\Admin\Tag\EditController::class, '__invoke'])->name('admin.tag.edit');
    Route::patch('/{tag}', [App\Http\Admin\Tag\UpdateController::class, '__invoke'])->name('admin.tag.update');
    Route::delete('/{tag}', [App\Http\Admin\Tag\DeleteController::class, '__invoke'])->name('admin.tag.delete');
});
Route::prefix('users')->group(function () {
    Route::get('/', [App\Http\Admin\User\IndexController::class, '__invoke'])->name('admin.user.index');
    Route::get('/create', [App\Http\Admin\User\CreateController::class, '__invoke'])->name('admin.user.create');
    Route::post('/create', [App\Http\Admin\User\StoreController::class, '__invoke'])->name('admin.user.store');
    Route::get('/{user}', [App\Http\Admin\User\ShowController::class, '__invoke'])->name('admin.user.show');
    Route::get('/{user}/edit', [App\Http\Admin\User\EditController::class, '__invoke'])->name('admin.user.edit');
    Route::patch('/{user}', [App\Http\Admin\User\UpdateController::class, '__invoke'])->name('admin.user.update');
    Route::delete('/{user}', [App\Http\Admin\User\DeleteController::class, '__invoke'])->name('admin.user.delete');
});
