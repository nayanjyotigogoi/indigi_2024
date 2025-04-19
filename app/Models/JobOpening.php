<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobOpening extends Model
{
    protected $table = 'job_opening';

    protected $fillable = [
        'post_name', 'introduction', 'country', 'city', 'department', 'education',
        'skills', 'experience', 'position_type', 'role', 'status',
    ];
}
