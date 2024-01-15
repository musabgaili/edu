<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Course extends Model
{
    use HasTranslations;

    protected $guarded = ['id'];

    protected $casts =[
        'name'=> 'json',
    ];

    protected $translatable = ['name','content','agenda'];
}
