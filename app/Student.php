<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $casts = [
    	'created_at' => 'datetime',
		'updated_at' => 'datetime'
    ];
}
