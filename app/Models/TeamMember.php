<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'role',
        'photo',
        'bio',
        'age',
        'joined_year',
        'location',
        'email',
        'social_links',
        'skills',
        'career_path',
        'accomplishments',
        'display_order',
    ];

    protected $casts = [
        'social_links' => 'array',
        'skills' => 'array',
        'career_path' => 'array',
        'accomplishments' => 'array',
    ];
}
