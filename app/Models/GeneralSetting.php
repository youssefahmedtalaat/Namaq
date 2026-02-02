<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GeneralSetting extends Model
{
    protected $fillable = [
        'site_title',
        'maintenance_mode',
        'primary_color',
        'secondary_color',
        'logo',
    ];

    protected $casts = [
        'maintenance_mode' => 'boolean',
    ];
}
