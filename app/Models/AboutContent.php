<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutContent extends Model
{
    protected $table = 'about_contents'; // İsteğe bağlı, ama açıkça yazmak iyidir

    protected $fillable = [
        'name',
        'subtitle',
        'content',
        'image'
    ];
}
