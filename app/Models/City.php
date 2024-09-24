<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use NunoMaduro\Collision\Adapters\Phpunit\State;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class City extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    public function getImageAttribute()
    {
        return asset('image/city_image/'.$this->attributes['image']);
    }
    // Relationship with States
    public function state() // Ensure the method is singular
    {
        return $this->belongsTo(States::class); // Use the correct class name 'State'
    }

}
