<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get the grade where the teacher gives classes.
     * 
     * @return App\Grade
     */
    public function grade()
    {
   		return $this->hasOne('App\Grade');
    }

    /**
     * Get the subjects where the teacher gives classes.
     * 
     * @return App\Subject
     */
    public function subject()
    {
        return $this->hasMany('App\Subject');
    }
}
