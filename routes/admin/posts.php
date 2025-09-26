<?php
    use App\Http\Controllers\Admin\PostController;
    use Illuminate\Support\Facades\Route;

    Route::middleware(['auth', 'verified'])->group(function () {
        Route::controller(PostController::class)->group(function () {
            Route::get('/dashboard/postagens', 'index')->name('post.index');
            Route::get('/dashboard/postagem/editar/{post:slug}', 'edit')->name('post.edit');
            Route::patch('/dashboard/postagem/{post:slug}', 'update')->name('post.update');
            Route::get('/dashboard/postagem/criar', 'create')->name('post.create');
            Route::patch('/dashboard/postagem', 'store')->name('post.store');
            Route::delete('/dashboard/postagem/{id}', 'destroy')->name('post.destroy');
        });
    });
