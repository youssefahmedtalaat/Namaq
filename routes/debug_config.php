<?php

use Illuminate\Support\Facades\Route;

Route::get('/debug-php-config', function () {
    return response()->json([
        'upload_max_filesize' => ini_get('upload_max_filesize'),
        'post_max_size' => ini_get('post_max_size'),
        'gd_enabled' => extension_loaded('gd'),
        'fileinfo_enabled' => extension_loaded('fileinfo'),
        'exif_enabled' => extension_loaded('exif'),
        'pdo_mysql_enabled' => extension_loaded('pdo_mysql'),
        'mysqli_enabled' => extension_loaded('mysqli'),
        'php_ini_loaded_file' => php_ini_loaded_file(),
        'db_connection' => config('database.default'),
        'db_database' => config('database.connections.'.config('database.default').'.database'),
    ]);
});
