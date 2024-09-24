<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class States extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    // Relationship with City
    public function cities()
    {
        return $this->hasMany(City::class, 'state_id');
    }
}
