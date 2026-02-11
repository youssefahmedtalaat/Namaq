<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TeamMember;

class TeamMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing data to prevent duplicates
        TeamMember::truncate();

        $members = [
            [
                'name' => 'John Smith',
                'role' => 'Project Director',
                'photo' => 'assets/img/team/t1-img-1.png',
                'bio' => 'As the Project Director at Namaq, John oversees the execution of large-scale commercial and residential developments across the UAE. With over 15 years of experience in the region, he ensures that every project meets our rigorous standards for quality and sustainability.',
                'age' => 42,
                'joined_year' => 2015,
                'location' => 'Dubai, UAE',
                'email' => 'john.smith@namaq.com',
                'social_links' => [
                    ['platform' => 'linkedin', 'url' => '#'],
                    ['platform' => 'twitter', 'url' => '#'],
                ],
                'skills' => [
                    ['name' => 'Project Management', 'percent' => 98],
                    ['name' => 'Contract Negotiation', 'percent' => 90],
                    ['name' => 'Site Supervision', 'percent' => 95],
                ],
                'career_path' => [
                    ['date' => '2019 - Present', 'title' => 'Project Director', 'description' => 'Leading the project management division.'],
                    ['date' => '2015 - 2019', 'title' => 'Senior Project Manager', 'description' => 'Managed the "Spring Wellness" and "Skyline" projects.'],
                    ['date' => '2010 - 2015', 'title' => 'Construction Manager', 'description' => 'Oversaw on-site operations for high-rise towers.'],
                ],
                'accomplishments' => [
                    ['title' => 'Project of the Year 2024', 'description' => 'Led the award-winning Downtown Plaza renovation.'],
                    ['title' => 'Safety Excellence', 'description' => 'Achieved 5 million man-hours without LTI.'],
                ],
                'display_order' => 1,
            ],
            [
                'name' => 'Michael Dennis',
                'role' => 'Creative Director',
                'photo' => 'assets/img/team/t1-img-2.png',
                'bio' => 'Michael is the visionary force behind Namaq’s design philosophy. His avant-garde approach to interior design and architecture has redefined luxury living in Dubai. He specializes in blending modern aesthetics with functional living spaces.',
                'age' => 38,
                'joined_year' => 2016,
                'location' => 'Dubai, UAE',
                'email' => 'michael.dennis@namaq.com',
                'social_links' => [
                    ['platform' => 'instagram', 'url' => '#'],
                    ['platform' => 'behance', 'url' => '#'],
                    ['platform' => 'linkedin', 'url' => '#'],
                ],
                'skills' => [
                    ['name' => 'Creative Direction', 'percent' => 99],
                    ['name' => 'Interior Design', 'percent' => 95],
                    ['name' => 'Concept Development', 'percent' => 92],
                ],
                'career_path' => [
                    ['date' => '2018 - Present', 'title' => 'Creative Director', 'description' => 'Head of Design at Namaq.'],
                    ['date' => '2016 - 2018', 'title' => 'Senior Architect', 'description' => 'Lead designer for luxury villas.'],
                ],
                'accomplishments' => [
                    ['title' => 'Best Interior Design 2023', 'description' => 'Awarded for the Royal Palm Villa.'],
                    ['title' => 'TEDx Speaker', 'description' => 'Spoke on "The Future of Sustainable Luxury".'],
                ],
                'display_order' => 2,
            ],
            [
                'name' => 'Sarah Michelle',
                'role' => 'Lead Interior Designer',
                'photo' => 'assets/img/team/t1-img-3.png',
                'bio' => 'Sarah brings elegance and warmth to every space she touches. Specializing in high-end residential interiors, she works closely with clients to translate their personalities into their homes. Her expertise in color theory and textiles is unmatched.',
                'age' => 32,
                'joined_year' => 2019,
                'location' => 'Abu Dhabi, UAE',
                'email' => 'sarah.michelle@namaq.com',
                'social_links' => [
                    ['platform' => 'pinterest', 'url' => '#'],
                    ['platform' => 'instagram', 'url' => '#'],
                ],
                'skills' => [
                    ['name' => 'Space Planning', 'percent' => 95],
                    ['name' => 'FF&E Selection', 'percent' => 90],
                    ['name' => '3D Visualization', 'percent' => 85],
                ],
                'career_path' => [
                    ['date' => '2022 - Present', 'title' => 'Lead Interior Designer', 'description' => 'Heading the residential design team.'],
                    ['date' => '2019 - 2022', 'title' => 'Senior Designer', 'description' => 'Designed interiors for 20+ luxury apartments.'],
                ],
                'accomplishments' => [
                    ['title' => 'Vogue Living Feature', 'description' => 'Featured designer in March 2024 issue.'],
                ],
                'display_order' => 3,
            ],
            [
                'name' => 'Katty Wilson',
                'role' => 'Sustainability Architect',
                'photo' => 'images/team/team_pic_4.jpg',
                'bio' => 'Katty is passionate about green building and sustainable architecture. She ensures that Namaq’s projects are not only beautiful but also environmentally responsible. She is a LEED Accredited Professional.',
                'age' => 29,
                'joined_year' => 2021,
                'location' => 'Dubai, UAE',
                'email' => 'katty.wilson@namaq.com',
                'social_links' => [
                    ['platform' => 'linkedin', 'url' => '#'],
                ],
                'skills' => [
                    ['name' => 'Sustainable Design', 'percent' => 98],
                    ['name' => 'Energy Modeling', 'percent' => 90],
                    ['name' => 'Revit / BIM', 'percent' => 92],
                ],
                'career_path' => [
                    ['date' => '2023 - Present', 'title' => 'Sustainability Architect', 'description' => 'Leading green initiatives.'],
                    ['date' => '2021 - 2023', 'title' => 'Junior Architect', 'description' => 'Assisted on eco-friendly commercial projects.'],
                ],
                'accomplishments' => [
                    ['title' => 'LEED Platinum Certification', 'description' => 'Secured for the "Oasis Office" project.'],
                ],
                'display_order' => 4,
            ],
        ];

        foreach ($members as $member) {
            TeamMember::create($member);
        }
    }
}
