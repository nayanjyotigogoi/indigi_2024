<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'tagline',
        'header_image',
        'stats_section',
        'features_section',
        'duration_section',
        'details_section',
        'cta_section',
    ];
}

