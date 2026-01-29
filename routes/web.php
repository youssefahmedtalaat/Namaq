<?php

use App\Http\Controllers\ProjectController;
use App\Models\Project;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['projects' => Project::all()]);
});

Route::get('/projects', [ProjectController::class, 'index']);

Route::get('/projects/{project}', [ProjectController::class, 'show']);


// Route::get('/artisan/{command}', function ($command) {
//     Artisan::call($command);
//     return nl2br(Artisan::output());
// });

require __DIR__.'/debug_config.php';
