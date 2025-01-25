<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }


    public function lessontask()
    {
        return $this->belongsTo('App\Models\Lessontask');
    }

    public function submittedtask()
    {
        return $this->belongsTo('App\Models\Submittedtask');
    }
}
