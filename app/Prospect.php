<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prospect extends Model
{
    protected $casts = [
    	'meeting_date' => 'datetime',
    	'created_at' => 'datetime',
		'updated_at' => 'datetime'
    ];
}
