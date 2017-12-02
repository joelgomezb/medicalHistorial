<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{

	protected $table = 'patient';

    protected $fillable = [
			'id', 'social_security', 'name', 'surname', 'address', 'city', 'state', 'zip', 'cellphone', 'homephone', 'email',
			'dateofbirth', 'age', 'sex', 'maritalstatus', 'numchildren', 'familydoctor', 'phonefamilydoctor', 'insurance_id',
			'emergency_contact_id', 'created_at', 'updated_at',
    ];

	public function insurance() {
  		return $this->hasOne('App\Insurance', 'id', 'id');
	}

	public function emergency_contact() {
  		return $this->hasOne('App\EmergencyContact', 'id', 'id');
	}

}
