<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Project extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'region',
        'category',
        'date',
        'main_image',
        'gallery_images',
        'size_sqm',
        'description',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'gallery_images' => 'array',
        'description' => 'string',
    ];

    protected function date(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? \Carbon\Carbon::parse($value)->format('Y') : null,
            set: fn ($value) => $value ? $value . '-01-01' : null,
        );
    }
}
