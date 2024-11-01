<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    use HasFactory;

    protected $fillable = [
        'team_id',
        'NIM',
        'Nama',
        'Position',
        'Jurusan',
        'Image'
    ];
    public function Teams(){

        return $this->belongsTo(Teams::class, 'team_id');

    }
}
