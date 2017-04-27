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
     * Get the teacher that gives classes in the grade.
     * 
     * @return App\Grade
     */
    public function grade()
    {
   		return $this->belongsTo('App\Grade');
    }
}
