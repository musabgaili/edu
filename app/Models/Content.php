<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Content extends Model
{
    use HasTranslations;

    
    protected $guarded = ['id'];

    protected $casts =[
        'content'=> 'json',
    ];

    protected $translatable = ['content',];
}
