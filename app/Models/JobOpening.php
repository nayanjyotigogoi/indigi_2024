<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobOpening extends Model
{
    protected $table = 'job_opening';
    

    protected $fillable = [
        'post_name',
        'introduction',
        'country',
        'city',
        'department',
        'education',
        'skills',
        'experience',
        'position_type',
        'role',
        'status',
        'number_of_opening',
        'working_hour',
        'workplace_type',
        'notice_period',
        'preferred_skill',
        'candidate_profile',
    ];
}
