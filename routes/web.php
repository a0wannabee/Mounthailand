<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// Fallback static asset handlers for serverless environments (Vercel)
Route::get('/build/{path}', function ($path) {
    $filePath = public_path('build/' . $path);
    if (file_exists($filePath)) {
        $mime = str_ends_with($path, '.css') ? 'text/css' : (str_ends_with($path, '.js') ? 'application/javascript' : mime_content_type($filePath));
        return response()->file($filePath, [
            'Content-Type' => $mime,
            'Cache-Control' => 'public, max-age=31536000, immutable',
        ]);
    }
    abort(404);
})->where('path', '.*');

Route::get('/assets/{path}', function ($path) {
    $filePath = public_path('assets/' . $path);
    if (file_exists($filePath)) {
        return response()->file($filePath, [
            'Cache-Control' => 'public, max-age=86400',
        ]);
    }
    abort(404);
})->where('path', '.*');

Route::get('/gallery/{path}', function ($path) {
    $filePath = public_path('gallery/' . $path);
    if (file_exists($filePath)) {
        return response()->file($filePath, [
            'Cache-Control' => 'public, max-age=86400',
        ]);
    }
    abort(404);
})->where('path', '.*');
