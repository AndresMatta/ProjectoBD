<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get the teacher that gives classes in this subject.
     * 
     * @return App\Teacher
     */
    public function teacher()
    {
   		return $this->belongsTo('App\Teacher');
    }

    /**
     * Get the grade that owns the subject.
     * 
     * @return App\Grade
     */
    public function grade()
    {
   		return $this->belongsTo('App\Grade');
    }

    /**
     * Get the records of the subject for a specific student.
     * 
     * @return App\StudentRecord
     */
    public function records()
    {
        return $this->hasMany('App\StudentRecord');
    }

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
