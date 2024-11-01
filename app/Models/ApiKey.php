<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiKey extends Model
{
    use HasFactory;

    protected $fillable = [
        'API_Name',
        'API_Key',
        'Station_id',
        'type'
    ];

    public function station(){
        return $this->belongsTo(station::class);
    }
}
