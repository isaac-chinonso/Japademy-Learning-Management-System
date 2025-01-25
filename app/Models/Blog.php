<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    
    protected $fillable = ['id','category_id','title','blog_image','slug','short_desc','long_desc','created_at','updated_at'];

    public function Category()
    {
        return $this->belongsTo('App\Models\BlogCategory');
    }
}
