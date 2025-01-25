<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserScore extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'score'];

    // Define the relationship with User model
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
