<?php
// fix_admin.php
// Place this file in your 'public' or 'public_html' folder on the server
// Then visit: https://namaqarch.com/fix_admin.php

// 1. Load Laravel
require __DIR__.'/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/app.php';

// 2. Create Kernel
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$request = Illuminate\Http\Request::capture();
$kernel->bootstrap();

echo "<h1>Namaq Admin Fixer</h1>";

// 3. Clear Caches
echo "<h3>1. Clearing Caches...</h3>";
try {
    \Illuminate\Support\Facades\Artisan::call('optimize:clear');
    echo "<div style='color:green'>Success: " . nl2br(\Illuminate\Support\Facades\Artisan::output()) . "</div>";
} catch (\Exception $e) {
    echo "<div style='color:red'>Error: " . $e->getMessage() . "</div>";
}

// 4. Check for Admin Panel Provider
echo "<h3>2. Checking Codebase...</h3>";
if (class_exists('App\Providers\Filament\AdminPanelProvider')) {
    echo "<div style='color:green'>AdminPanelProvider class FOUND.</div>";
} else {
    echo "<div style='color:red'>AdminPanelProvider class NOT FOUND. You likely need to upload the 'app/Providers' folder.</div>";
}

// 5. Check Routes
echo "<h3>3. Checking Routes...</h3>";
$routes = \Illuminate\Support\Facades\Route::getRoutes();
$adminRoute = $routes->getByName('filament.admin.auth.login');

if ($adminRoute) {
    echo "<div style='color:green'>Route 'filament.admin.auth.login' exists! URL: /" . $adminRoute->uri() . "</div>";
    echo "<p>You should be able to login at: <a href='/" . $adminRoute->uri() . "'>Go to Login</a></p>";
} else {
    echo "<div style='color:red'>Route NOT found in route list. (Even after cache clear)</div>";
}

echo "<hr><p><em>Delete this file after use.</em></p>";
