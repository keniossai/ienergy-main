<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['name','created_at', 'updated_at', 'title', 'slug', 'description', 'image', 'category_id', 'category', 'user_id', 'published_at'];

    protected $dates = [
        'published_at',
    ];

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag');
    }
}
