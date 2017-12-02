<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    protected $table = 'insurance';

    protected $fillable = [
        'id', 'company', 'phone', 'address', 'insured', 'relation_insure', 'policy'
    ];

	public $timestamps = false;

}
