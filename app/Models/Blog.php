<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Translatable\HasTranslations;

class Blog extends Model
{
    use HasFactory;
    use HasTranslations;


    protected $guarded = ['id'];

    
    protected $casts =[
        'title'=>'json',
        'content'=> 'json',
    ];

    protected $translatable = [ 'title', 'content',];
    


    // public function course(): BelongsTo {
    //     return $this->belongsTo(Course::class,'course_id');   
    // }
    
}
