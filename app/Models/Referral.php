<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referral extends Model
{
    use HasFactory;

    protected $fillable = ['referrer_email', 'referred_email'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
