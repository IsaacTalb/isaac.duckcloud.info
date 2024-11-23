<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class HomePageContent extends Model
{
    use HasFactory;

    protected $fillable = [
        'section_title',
        'section_content',
        'image',
        'video_url',
    ];
}
