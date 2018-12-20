<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funder extends Model
{
    protected $casts = [
    	'created_at' => 'datetime',
		'updated_at' => 'datetime'
    ];
    public function enrollments () 
    {
    	return $this->hasMany(Enrollment::class);
    }
}
