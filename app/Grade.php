<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get the Teacher that gives classes in the grade.
     * 
     * @return App\Teacher
     */
    public function teacher()
    {
   		return $this->belongsTo('App\Teacher');
    }

    /**
     * Get the subjects that belongs to this grade.
     * 
     * @return App\Subject
     */
    public function subjects()
    {
        return $this->hasMany('App\Subject');
    }
}
