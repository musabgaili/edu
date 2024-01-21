<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

class Course extends Model
{
    use HasTranslations;

    protected $guarded = ['id'];

    protected $casts = [
        'name' => 'json',
    ];

    protected $translatable = ['name', 'content', 'agenda', 'thumbnail'];


    public function getRouteKeyName()
    {
        return 'slug';
    }


    /**
     * Get all of the applications for the Course
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function applications(): HasMany
    {
        return $this->hasMany(CourseApplication::class);
    }
}
