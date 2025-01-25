<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    use HasFactory;

    protected $fillable = [
        'fname',
        'lname',
        'email',
        'whatsappnum',
        'country_of_residence',
        'highest_education',
        'current_profession',
        'professional_experience',
        'specialty',
        'motivation',
        'tech_skills_impact',
        'career_goals',
        'scholarship_reason',
        'idcard',
        'resume',
        'education_verification',
    ];
    
}
