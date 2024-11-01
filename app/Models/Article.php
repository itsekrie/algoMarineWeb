<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $dates = ['date_column'];

    public function getDateColumnAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y'); // Change to your desired format
    }
    
    protected $casts = [
        'publish_date',
    ];
    
    public function format(){
        $publishDate = Carbon::parse($this->publish_date)->locale('id');
        $publishDate->settings(['formatFunction' => 'translatedFormat']);
        return $publishDate;
    }
    
    protected $fillable = [
        'title',
        'slug',
        'content',
        'cover',
        'is_published',
        'publish_date'
    ];
}
