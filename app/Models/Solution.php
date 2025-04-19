<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'tagline',
        'overview',
        'testimonials',
        'highlights',
        'who_can_opt',
        'ideal_for',
        'key_benefits',
        'business_impact',
        'how_it_works',
        'implementation',
        'image',
        'status', // optional if you're tracking active/inactive
    ];

    protected $casts = [
        'testimonials' => 'array',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
