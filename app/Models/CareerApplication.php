<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerApplication extends Model
{
    use HasFactory;

    // Define the table name if it's not the default (plural of the model name)
    protected $table = 'career_applications'; 

    // Specify the fillable fields
    protected $fillable = [
        'application_id',
        'name',
        'email',
        'phone',
        'education',
        'skills',
        'role',
        'experience',
        'current_ctc',
        'expected_ctc',
        'file',
    ];

    // Set the timestamps to true (Laravel will automatically manage 'created_at' and 'updated_at')
    public $timestamps = true;
}
