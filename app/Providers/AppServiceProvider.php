<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Log;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // AUTOMATIC STORAGE FIXER
        // This runs on every request to ensure images are accessible.
        // It handles both Symlinks (Standard) and Copy (Hostinger/Shared) modes.
        
        try {
            $target = storage_path('app/public');
            $link = public_path('storage');
            
            // Only attempt fix if NOT running in console (to avoid deployment script errors)
            // and if the link doesn't exist or is broken.
            if (!app()->runningInConsole()) {
                
                // Check if link/folder exists
                if (!file_exists($link)) {
                    $this->fixStorage($target, $link);
                } 
                // Check if it exists but might be broken (for symlinks)
                elseif (is_link($link) && !file_exists(readlink($link))) {
                     @unlink($link); // Remove broken link
                     $this->fixStorage($target, $link);
                }
            }
        } catch (\Exception $e) {
            // Log error but don't crash the site
            Log::error("Auto Storage Fix Failed: " . $e->getMessage());
        }
    }

    private function fixStorage($target, $link)
    {
        // 1. Ensure Source Exists
        if (!file_exists($target)) {
            @mkdir($target, 0755, true);
        }

        // 2. Try Symlink First (Standard)
        $symlinkSuccess = false;
        try {
            // @ suppresses warnings if it fails
            if (@symlink($target, $link)) {
                $symlinkSuccess = true;
            }
        } catch (\Exception $e) {
            $symlinkSuccess = false;
        }

        // 3. If Symlink Failed (Hostinger/Shared Hosting restriction), use COPY mode
        if (!$symlinkSuccess) {
            // Ensure link is gone if it was partial
            if (file_exists($link) && is_link($link)) @unlink($link);
            
            // Create directory
            if (!file_exists($link)) {
                @mkdir($link, 0755, true);
            }

            // Copy files recursively
            $this->copyRecursively($target, $link);
        }
        
        // 4. Always Try to Fix Permissions (for 403 errors)
        // Try to set public folder to 755
        if (file_exists($link)) {
            @chmod($link, 0755);
        }
    }

    private function copyRecursively($source, $dest)
    {
        if (!is_dir($source)) return;
        
        $dir = opendir($source);
        while (($file = readdir($dir)) !== false) {
            if ($file == '.' || $file == '..') continue;
            
            $srcPath = $source . '/' . $file;
            $destPath = $dest . '/' . $file;
            
            if (is_dir($srcPath)) {
                if (!file_exists($destPath)) @mkdir($destPath, 0755);
                $this->copyRecursively($srcPath, $destPath);
            } else {
                // Only copy if destination doesn't exist or is older
                if (!file_exists($destPath) || filemtime($srcPath) > filemtime($destPath)) {
                    @copy($srcPath, $destPath);
                    @chmod($destPath, 0644); // Fix file permission
                }
            }
        }
        closedir($dir);
    }
}
