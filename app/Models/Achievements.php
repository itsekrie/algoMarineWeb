<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Achievements extends Model
{
    protected $fillable = [
        'id',
        'Title',
        'author',
        'description',
        'pdf_path',
        'published_at',
    ];

}
