<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentRecord extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get the student that owns the records.
     * 
     * @return App\Student
     */
    public function student()
    {
   		return $this->belongsTo('App\Student');
    }

    /**
     * Get the subject that owns the student records.
     * 
     * @return App\Subject
     */
    public function subject()
    {
   		return $this->belongsTo('App\Subject');
    }
}
