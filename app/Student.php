<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
	 /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get the records of the subject for a specific student.
     * 
     * @return App\StudentRecord
     */
    public function records()
    {
        return $this->hasMany('App\StudentRecord');
    }
}
