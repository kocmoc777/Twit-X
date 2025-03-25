<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Admin\Main\IndexController;


Route::get('/', function () {
    return redirect('/post');
});


Auth::routes(['verify' => true]);

//Route::prefix('/')->middleware(['auth', 'admin', 'verified'])->group(function () {
//    Route::get('/show', [App\Http\UserPost\ShowController::class, '__invoke'])->name('main.show');
//
//});
Route::prefix('/post')->group(function () {
    Route::get('/', [App\Http\Post\IndexController::class, 'index'])->name('main.index');
    Route::get('/show/{post}', [App\Http\Post\ShowController::class, 'show'])->name('main.show');
    Route::group(['namespace' =>'Comment','prefix' => '{post}/comments'], function () {
        Route::post('/', [App\Http\Post\Comment\StoreController::class, '__invoke'])->name('main.comment.store');
    });
    Route::group(['namespace' =>'Like','prefix' => '{post}/likes'], function () {
        Route::post('/', [App\Http\Post\Like\StoreController::class, '__invoke'])->name('main.like.store');
    });


});
Route::group(['namespace' =>'Category', 'prefix'=> 'post-categories'], function () {
    Route::get('/', [App\Http\Category\IndexController::class, '__invoke'])->name('category.index');
    Route::group(['namespace' =>'UserPost','prefix' => '{category}/posts'], function () {
        Route::get('/', [App\Http\Category\Post\IndexController::class, '__invoke'])->name('category.post.index');
    });
});






Route::prefix('personal')->middleware(['auth','verified'])->group(function () {
    Route::get('/', [App\Http\Personal\Main\IndexController::class, '__invoke'])->name('personal.main.index');
    Route::get('/liked', [App\Http\Personal\Liked\IndexController::class, '__invoke'])->name('personal.liked.index');
    Route::get('/comment', [App\Http\Personal\Comment\IndexController::class, '__invoke'])->name('personal.comment.index');
    Route::prefix('user-posts')->group(function () {
        Route::get('/', [App\Http\Post\UserPost\IndexController::class, '__invoke'])->name('personal.post.index');

        Route::get('/create', [App\Http\Post\UserPost\CreateController::class, '__invoke'])->name('personal.post.create');
        Route::post('/create', [App\Http\Post\UserPost\StoreController::class, '__invoke'])->name('personal.post.store');

        Route::get('/{post}', [App\Http\Post\UserPost\ShowController::class, '__invoke'])->name('personal.post.show');
        Route::get('/{post}/edit', [App\Http\Post\UserPost\EditController::class, '__invoke'])->name('personal.post.edit');
        Route::patch('/{post}', [App\Http\Post\UserPost\UpdateController::class, '__invoke'])->name('personal.post.update');
        Route::delete('/{post}', [App\Http\Post\UserPost\DeleteController::class, '__invoke'])->name('personal.post.delete');
    });
});

Route::prefix('admin')->middleware(['auth', 'admin', 'verified'])->group(function () {
    Route::get('/', [App\Http\Admin\Main\IndexController::class, '__invoke'])->name('admin.main.index');
});
Route::prefix('comments')->group(function () {
    Route::get('/', [App\Http\Personal\Comment\IndexController::class, '__invoke'])->name('personal.comment.index');
    Route::get('/{comment}/edit', [App\Http\Personal\Comment\EditController::class, '__invoke'])->name('personal.comment.edit');
    Route::patch('/{comment}', [App\Http\Personal\Comment\UpdateController::class, '__invoke'])->name('personal.comment.update');
    Route::delete('/{comment}', [App\Http\Personal\Comment\DeleteController::class, '__invoke'])->name('personal.comment.delete');
});
Route::prefix('likes')->group(function () {
    Route::get('/', [App\Http\Personal\Liked\IndexController::class, '__invoke'])->name('personal.liked.index');
    Route::delete('/{post}', [App\Http\Personal\Liked\DeleteController::class, '__invoke'])->name('personal.liked.delete');
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
