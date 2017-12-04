@extends('layouts.pdf')

@section('content')
<table class="table table-bordered">
	@foreach($result as $patient)
      <tr>
		<td>
			<p>Social Security</p>
		</td>
        <td>
          {{ $patient->social_security }}
        </td>
	  </tr>
	  <tr>
		<td>
			<p>Name</p>
		</td>

      	<td>
          {{$patient->name }}
        </td>
      </tr>
	  <tr>
		<td>
			<p>Surname</p>
		</td>
        <td>
          {{$patient->surname }}
        </td>
		</tr>
		<tr>
		<td>
			<p>Surname</p>
		</td>
        <td>
          {{$patient->address }}
        </td>
	  </tr>

		<tr>
			<td colspan="2" style="text-align:center;"><p>Siganture</p></td>
		</tr>
		<tr>
			<td colspan="2" style="text-align:center;"><img src="{{ $patient->signature }}" /></td>
		</tr>
			
	@endforeach
    </table>
@endsection
