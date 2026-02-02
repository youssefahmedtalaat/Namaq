<?php

namespace Database\Seeders;

use App\Models\PageSection;
use Illuminate\Database\Seeder;

class PageSectionSeeder extends Seeder
{
    public function run(): void
    {
        PageSection::updateOrCreate(
            ['key' => 'home_hero'],
            [
                'title' => 'Architecture & Design Bureau Based in <span class="cd-words-wrapper single-headline"><b class="is-visible">canada</b><b>australia</b><b>france</b><b>Singapore</b></span>',
                'subtitle' => 'Architectural styles and trends evolve over time, influenced by cultural shifts, technological advancements, and changing societal needs.',
                'is_active' => true,
            ]
        );
    }
}
