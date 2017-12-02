<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmergencyContact extends Model
{
    protected $table = 'emergency_contact';

    protected $fillable = [
        'id', 'name', 'surname', 'relationship', 'phone'
    ];

	public $timestamps = false;
}


