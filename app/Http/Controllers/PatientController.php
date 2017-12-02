<?php

namespace App\Http\Controllers;

use App\Patient;
use App\Insurance;
use App\EmergencyContact;
use Illuminate\Http\Request;

class PatientController extends Controller
{
	public function index(){

		return view('patient.patient');
	}

	public function lists(){
		
		$patients = Patient::whereNull('signature')
					->orderBy('created_at', 'DESC')
					->with('insurance')
					->with('emergency_contact')
					->paginate(10);

		return view('patient.lists')->with(['patients' => $patients]);
	}

	public function search(Request $request){

		$conditions= [];
		if (!is_null(request('name_'))) $conditions[] = ['name', 'ilike', '%' .request('name_') .'%'];
		if (!is_null(request('social_security'))) $conditions[] = ['social_security', 'ilke', '%'. request('social_security') .'%'];

		$patients = Patient::where($conditions)
					->with('insurance')
					->with('emergency_contact')
					->paginate(10);

		return view('patient.lists')->with(['patients' => $patients]);
	}

	public function store(Request $request){
		
		// left validation insurance 
		$insurance = new Insurance;
		
		$insurance->company = request('company');
		$insurance->phone = request('phone');
		$insurance->address = request('companyaddress');
		$insurance->insured = request('insured');
		$insurance->relation_insure = request('relation_insure');
		$insurance->policy = request('policy');
		$insurance->save();

		$contact = new EmergencyContact;

		$contact->name = request('name_contact');
		$contact->surname = request('surname_contact');
		$contact->relationship = request('relationship');
		$contact->phone = request('phone_contact');

		$contact->save();

		$patients = new Patient;
		$patients->social_security = request('social_security');
		$patients->name = request('name_');
		$patients->surname = request('surname');
		$patients->address = request('address');
		$patients->city = request('city');
		$patients->state = request('state');
		$patients->zip = request('zip');
		$patients->cellphone = request('cellphone');
		$patients->homephone = request('homephone');
		$patients->email = request('email');
		$patients->dateofbirth = request('dateofbirth');
		$patients->age = request('age');
		$patients->sex = request('sex');
		$patients->maritalstatus = request('maritalstatus');
		$patients->numchildren = request('numchildren');
		$patients->familydoctor = request('familydoctor');
		$patients->phonefamilydoctor = request('phonefamilydoctor');
		$patients->signature = request('signature');
		$patients->emergency_contact_id = $contact->id;
		$patients->insurance_id = $insurance->id;

		$patients->save();
		return redirect()->to('/patient')->with(['success' => true]);
	}
}
