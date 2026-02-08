<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TeamMemberController;
use App\Models\Project;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'projects' => Project::all(),
        'categories' => Project::select('category')->distinct()->pluck('category')
    ]);
})->name('home');

Route::view('/about', 'about')->name('about');

Route::get('/team', [TeamMemberController::class, 'index'])->name('team');
Route::redirect('/team/profile-template', '/team/1');
Route::get('/team/{teamMember}', [TeamMemberController::class, 'show'])->name('team.show');
Route::view('/contact', 'contact')->name('contact');

Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');

Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');


// Route::get('/artisan/{command}', function ($command) {
//     Artisan::call($command);
//     return nl2br(Artisan::output());
// });

require __DIR__.'/debug_config.php';
