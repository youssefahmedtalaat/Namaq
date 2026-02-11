<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TeamMemberController;
use App\Models\Project;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

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


// ---------------------------------------------------------
// ULTIMATE STORAGE & DB FIXER (For Shared Hosting / Hostinger)
// ---------------------------------------------------------
Route::get('/fix-system', function () {
    // Actions: 'link', 'copy', 'seed'
    $action = request()->query('action', 'menu'); 
    
    $target = storage_path('app/public');
    $link = public_path('storage');
    $log = [];

    $log[] = "<h2>System Fixer Tool v3.0</h2>";
    
    // MENU
    if ($action === 'menu') {
        return "
            <h2>Namaq System Tools</h2>
            <ul>
                <li><strong>Storage Fixes:</strong>
                    <ul>
                        <li><a href='?action=link'>Fix Storage Link (Standard)</a> - Try this first for 403 errors.</li>
                        <li><a href='?action=copy'>Fix Storage via Copy (Hostinger Mode)</a> - Use if 'Link' fails.</li>
                    </ul>
                </li>
                <li><strong>Database Fixes:</strong>
                    <ul>
                        <li><a href='?action=seed'>Update Team Data (Run Seeder)</a> - Refreshes team members from code.</li>
                        <li><a href='?action=migrate'>Run Migrations (Force)</a> - Updates database structure.</li>
                        <li><a href='?action=cache'>Clear All Caches</a> - Fixes config/view issues.</li>
                    </ul>
                </li>
            </ul>
        ";
    }

    $log[] = "<strong>Action:</strong> " . strtoupper($action);
    $log[] = "<hr>";

    // --- CACHE CLEAR ---
    if ($action === 'cache') {
        try {
            Artisan::call('optimize:clear');
            $log[] = "<span style='color:green'>Cache cleared successfully!</span>";
        } catch (\Exception $e) {
            $log[] = "<span style='color:red'>Error clearing cache: " . $e->getMessage() . "</span>";
        }
    }

    // --- SEEDER ---
    if ($action === 'seed') {
        try {
            // Force production to allow seeding
            Artisan::call('db:seed', ['--class' => 'TeamMemberSeeder', '--force' => true]);
            $log[] = "<span style='color:green'>Team Member Database Updated!</span> Output:<br>" . nl2br(Artisan::output());
        } catch (\Exception $e) {
            $log[] = "<span style='color:red'>Seeding Failed: " . $e->getMessage() . "</span>";
        }
    }
    
    // --- MIGRATE ---
    if ($action === 'migrate') {
        try {
            Artisan::call('migrate', ['--force' => true]);
            $log[] = "<span style='color:green'>Database Migrated!</span> Output:<br>" . nl2br(Artisan::output());
        } catch (\Exception $e) {
            $log[] = "<span style='color:red'>Migration Failed: " . $e->getMessage() . "</span>";
        }
    }

    // --- STORAGE FIXES ---
    if ($action === 'link' || $action === 'copy') {
        $log[] = "<strong>Target Path:</strong> $target";
        $log[] = "<strong>Link Path:</strong> $link";

        // 0. Check Source
        if (!file_exists($target)) {
            mkdir($target, 0755, true);
            $log[] = "Created missing source directory.";
        }

        // 1. Clean up
        if (file_exists($link)) {
            if (is_link($link)) {
                @unlink($link);
                $log[] = "Removed existing symlink.";
            } else {
                if ($action === 'link') {
                    $backup = public_path('storage_backup_' . time());
                    rename($link, $backup);
                    $log[] = "Renamed existing folder to $backup.";
                } elseif ($action === 'copy') {
                    $log[] = "Updating existing storage folder...";
                }
            }
        }

        // 2. Execute
        if ($action === 'link') {
            try {
                symlink($target, $link);
                $log[] = "<span style='color:green'>SUCCESS: Symlink created.</span>";
            } catch (\Exception $e) {
                $log[] = "<span style='color:red'>ERROR: Symlink failed. Try 'Copy Mode'.</span>";
            }
        } elseif ($action === 'copy') {
            $copyCount = 0;
            $iterator = new RecursiveIteratorIterator(
                new RecursiveDirectoryIterator($target, RecursiveDirectoryIterator::SKIP_DOTS),
                RecursiveIteratorIterator::SELF_FIRST
            );
            if (!file_exists($link)) mkdir($link, 0755, true);

            foreach ($iterator as $item) {
                $destPath = $link . DIRECTORY_SEPARATOR . $iterator->getSubPathName();
                if ($item->isDir()) {
                    if (!file_exists($destPath)) mkdir($destPath, 0755);
                } else {
                    copy($item, $destPath);
                    $copyCount++;
                }
            }
            $log[] = "<span style='color:green'>SUCCESS: Copied $copyCount files.</span>";
        }

        // 3. Permissions
        try {
            chmod($target, 0755);
            if (file_exists($link) && !is_link($link)) chmod($link, 0755);
            
            $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($target));
            foreach ($iterator as $item) {
                if ($item->getFilename() === '.' || $item->getFilename() === '..') continue;
                if ($item->isDir()) chmod($item, 0755);
                else chmod($item, 0644);
            }
            $log[] = "Permissions fixed (755/644).";
            
            if ($action === 'copy') {
                 $iteratorPublic = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($link));
                 foreach ($iteratorPublic as $item) {
                    if ($item->getFilename() === '.' || $item->getFilename() === '..') continue;
                    if ($item->isDir()) chmod($item, 0755);
                    else chmod($item, 0644);
                 }
            }
        } catch (\Exception $e) {
            $log[] = "<span style='color:orange'>Permission Warning: " . $e->getMessage() . "</span>";
        }
    }

    $log[] = "<hr><a href='?action=menu'>Back to Menu</a>";
    return implode('<br>', $log);
});


// Route::get('/artisan/{command}', function ($command) {
//     Artisan::call($command);
//     return nl2br(Artisan::output());
// });

require __DIR__.'/debug_config.php';
