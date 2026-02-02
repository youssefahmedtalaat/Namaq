<?php

namespace Database\Seeders;

use App\Models\SeoSetting;
use Illuminate\Database\Seeder;

class SeoSettingSeeder extends Seeder
{
    public function run(): void
    {
        $pages = [
            'home' => 'Home',
            'about' => 'About Us',
            'contact-us' => 'Contact Us',
            'team' => 'Our Team',
            'projects.index' => 'Projects List',
        ];

        foreach ($pages as $key => $title) {
            SeoSetting::updateOrCreate(
                ['page_identifier' => $key],
                [
                    'meta_title' => $title . ' - Namaq',
                    'meta_description' => 'Welcome to ' . $title . ' page of Namaq.',
                    'meta_keywords' => 'architecture, design, ' . strtolower($title),
                ]
            );
        }
    }
}
