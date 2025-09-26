<?php
    use App\Http\Controllers\Root\HomeController;
    use Illuminate\Support\Facades\Route;

    Route::controller(HomeController::class)->group(function () {
        Route::get('/', 'index')->name('home');
        Route::get('/sobre-nos', 'about')->name('about');
        Route::get('/galeria', 'imageGallery')->name('imgGallery');
        Route::get('/termos-de-uso', 'termsOfUse')->name('termsOfUse');
        Route::get('/politica-de-privacidade', 'privacyPolicy')->name('privacyPolicy');
    });
/*
    Route::controller(PostController::class)->group(function () {
        Route::get('/editoriais', 'editorial')->name('editorial');
        Route::get('/editorial/{editorial:slug}', 'editorialShow')->name('editorial.show');
    });

    Route::controller(ProjectController::class)->group(function () {
        Route::get('/projetos', 'project')->name('project');
        Route::get('/projeto/{project:slug}', 'projectShow')->name('project.show');
    });
*/
