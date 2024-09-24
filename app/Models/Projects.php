<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    public function getImageAttribute()
    {
        return asset('image/project_image/'.$this->attributes['image']);
    }
}
