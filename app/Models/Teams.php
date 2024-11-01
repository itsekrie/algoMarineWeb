<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    use HasFactory;

    protected $fillable = [
        'Team_Name',
        'Slug',
        'Team_Desc',
        'Team_Logo',
    ];
    public function Members(){
        return $this->hasMany(Members::class);
    }
}
