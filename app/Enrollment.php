<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    protected $casts = [
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
}
