<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

     // Add 'level' to the fillable property

    protected $fillable = ['fname', 'lname', 'phone', 'address', 'user_id'];


    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
