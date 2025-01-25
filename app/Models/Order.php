<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'transaction_id', 'course_id', 'amount'];

    public function course()
    {
    	return $this->belongsTo('App\Models\Course');
    }

    public function user()
    {
    	return $this->belongsTo('App\Models\User');
    }
}
