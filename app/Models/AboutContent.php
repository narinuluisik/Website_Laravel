<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutContent extends Model
{
    protected $table = 'about_contents'; 
    protected $fillable = [
        'name',
        'subtitle',
        'content',
        'image',
        'title', 
        'vision', 
        'mission'
    ];
}
