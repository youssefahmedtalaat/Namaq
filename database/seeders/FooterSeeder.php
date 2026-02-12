<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Update or create General Settings
        $setting = \App\Models\GeneralSetting::firstOrNew(['id' => 1]);
        $setting->footer_about_title = 'About Us';
        $setting->footer_about_description = 'NAMAQ Design is a creative studio that approaches every project as a story waiting to be told. We work at the intersection of design, material, and emotion, shaping spaces that feel personal, expressive, and alive.<br><br>At NAMAQ, design is not just about how a space looks, but how it feels to live in.';
        $setting->footer_news_title = 'Latest News';
        $setting->footer_contact_address = 'Riyadh, Saudi Arabia';
        $setting->footer_contact_phone = '(406) 555-0120';
        $setting->footer_contact_fax = '(208) 333 9298';
        $setting->footer_contact_email = 'Architecture@Namaq.com';
        $setting->footer_contact_website = 'http://namaq.com';
        $setting->footer_services_title = 'Our Services';
        $setting->footer_copyright = '&copy; Copyright 2026 Namaq. All Rights Reserved.';
        $setting->save();

        // Seed Footer Links
        $news = [
            'The Essentials Interior Design Tips',
            'Functional Wall-to-Wall Shelves',
            '9 Unique Ways to Display Your TV',
            'The 5 Secrets to Minimal Design',
            'Make a Huge Impact With Multiples'
        ];

        foreach ($news as $index => $item) {
            \App\Models\FooterLink::updateOrCreate(
                ['title' => $item, 'type' => 'news'],
                ['url' => '#', 'order' => $index + 1]
            );
        }

        $services = [
            'Interior Design',
            'Architecture',
            'Industry',
            'Consulting',
            'Photography'
        ];

        foreach ($services as $index => $item) {
            \App\Models\FooterLink::updateOrCreate(
                ['title' => $item, 'type' => 'service'],
                ['url' => '#', 'order' => $index + 1]
            );
        }
    }
}
