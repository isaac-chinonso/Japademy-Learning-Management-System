<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'email',
        'password',
        'activated',
        'referral_code',
        'role_id',
        'status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profile()
    {
        return $this->hasMany('App\Models\Profile');
    }

    public function order()
    {
        return $this->hasMany('App\Models\Order');
    }

    public function review()
    {
        return $this->hasMany('App\Models\Review');
    }

    public function registeredcourse()
    {
        return $this->hasMany(RegisteredCourse::class);
    }

    public function submittedtask()
    {
        return $this->hasMany('App\Models\Submittedtask');
    }

    public function userscores()
    {
        return $this->hasMany('App\Models\UserScore');
    }

    public function quizscores()
    {
        return $this->hasMany('App\Models\QuizScore');
    }

    public function referrals()
    {
        return $this->hasMany(Referral::class, 'referrer_email', 'email');
    }
}
