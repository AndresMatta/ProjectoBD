<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get the schedule of the subject in a specific classroom.
     * 
     * @return App\SubjectTaughPerClassroom
     */
    public function schedules()
    {
        return $this->hasMany('App\SubjectTaughPerClassroom');
    }
}
