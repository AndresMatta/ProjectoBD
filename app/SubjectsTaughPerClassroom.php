<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubjectsTaughPerClassroom extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get the subject that owns the schedule.
     * 
     * @return App\Teacher
     */
    public function subject()
    {
   		return $this->belongsTo('App\Subject');
    }

    /**
     * Get the classroom that owns the schedule.
     * 
     * @return App\Classroom
     */
    public function classroom()
    {
   		return $this->belongsTo('App\Classroom');
    }
}
