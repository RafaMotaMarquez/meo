<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $casts = [
    	'created_at' => 'datetime',
		'updated_at' => 'datetime'
    ];

    // public function enrollments () 
    // {
    // 	return $this->belongsToMany(Enrollment::class);
    // }
    public function enrollments () 
    {
    	return $this->hasMany(Enrollment::class);
    }
}
