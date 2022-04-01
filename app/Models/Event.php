<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'description', 'date', 'place', 'image', 'event_type', 'status'];

    public function events()
        {
            return $this->hasMany(Event::class);
        }

}
