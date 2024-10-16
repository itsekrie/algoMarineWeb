<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class station extends Model
{
    use HasFactory;

    protected $fillable = [
        'Station_Name',
        'latitude',
        'longtitude',
        'Slug',
    ];

    public function ApiKey(){
        return $this->hasMany(ApiKey::class);
    }
}
