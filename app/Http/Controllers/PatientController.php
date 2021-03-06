<?php

namespace App\Http\Controllers;

use PDF;
use Auth;
use Toastr;
use App\User;
use App\Patient;
use Carbon\Carbon;
use App\Insurance;
use App\EmergencyContact;
use Illuminate\Http\Request;

class PatientController extends Controller
{
	public function index(){

		return view('patient.patient');
	}

	public function lists(){
		
		$patients = Patient::orderBy('created_at', 'DESC')
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

		$result = Patient::where('id', $patients->id)->get();

		if (!is_null(request('saveAndDownloadBtn'))){
			$pdf = PDF::loadView('patient.pdf.patient', compact('result'));
			$filename = $request->social_security ."_". Carbon::now('America/Boise')->subDay()->toDateString() . "pdf";
			return $pdf->download($filename);
		}

		Toastr::success('Information of patient was saved!', 'Success', ["positionClass" => "toast-top-right", "closeButton" => "true"]);
		return redirect()->to('/patient')->with(['success' => true]);
	}

	public function pdf(Request $request){

		/*$user = User::with('role')->first();
		dd(Auth::user()->role->name);
		return "joelgomezb"; */

		$result= Patient::where('id', request('id'))->get();

		$pdf = PDF::loadView('patient.pdf.patient', compact('result'));
		$filename = $result[0]->social_security ."_". Carbon::now('America/Boise')->subDay()->toDateString() . "pdf";
		return $pdf->download($filename);
		return redirect()->to('/list')->withInput();
	}
}
