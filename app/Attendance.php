<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $casts = [
        'attendance_date' => 'date',
    	'created_at' => 'datetime',
		'updated_at' => 'datetime'
    ];
    public function enrollment ()
    {
    	return $this->belongsTo(Enrollment::class);
    }
}
