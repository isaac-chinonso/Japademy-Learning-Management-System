<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function order()
    {
        return $this->hasMany('App\Models\Order');
    }

    // Course.php
    public function registeredCourses()
    {
        return $this->hasMany(Registeredcourse::class, 'course_id');
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class, 'course_id');
    }

    public function lessontask()
    {
        return $this->belongsTo('App\Models\Lessontask');
    }
}
