<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    protected $casts = [
        'attendance_date' => 'date',
    	'meeting_date' => 'datetime',
    	'starting_date' => 'date',
    	'ending_date' => 'date',
    	'created_at' => 'datetime',
		'updated_at' => 'datetime'
    ];
    public function contact ()
    {
    	return $this->belongsTo(Contact::class);
    }
    public function teacher () 
    {
    	return $this->belongsTo(Teacher::class);
    }
    public function attendances ()
    {
        return $this->hasMany(Attendance::class);
    }
    public function funder () 
    {
        return $this->belongsTo(Funder::class);
    }
}
