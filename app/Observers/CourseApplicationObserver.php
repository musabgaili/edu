<?php

namespace App\Observers;

use App\Models\CourseApplication;

class CourseApplicationObserver
{
    /**
     * Handle the CourseApplication "created" event.
     */
    public function created(CourseApplication $courseApplication): void
    {
        
    }

    /**
     * Handle the CourseApplication "updated" event.
     */
    public function updated(CourseApplication $courseApplication): void
    {
        //
    }

    /**
     * Handle the CourseApplication "deleted" event.
     */
    public function deleted(CourseApplication $courseApplication): void
    {
        //
    }

    /**
     * Handle the CourseApplication "restored" event.
     */
    public function restored(CourseApplication $courseApplication): void
    {
        //
    }

    /**
     * Handle the CourseApplication "force deleted" event.
     */
    public function forceDeleted(CourseApplication $courseApplication): void
    {
        //
    }
}
