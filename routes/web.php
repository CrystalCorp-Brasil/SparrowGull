<?php
    use Illuminate\Support\Facades\File;
    use Illuminate\Support\Facades\Route;

    foreach(File::allFiles(__DIR__.'/*') as $route_file){
        require $route_file->getPathname();
    }

    Route::get('/', function () {
        return view('welcome');
    });
