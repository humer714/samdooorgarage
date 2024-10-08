<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    public function getImageAttribute()
    {
        return asset('image/services_image/'.$this->attributes['image']);
    }
}
