@extends('layouts.app')

@section('content')
@include('layouts.bar')
    <div class="col-md-9">
	{{ Form::open(['url' => '/patient/store']) }}
            <div class="panel panel-default">
                <div class="panel-heading">Patient Information</div>

                <div class="panel-body">
					<div class="form-group">
						<div class="row">
							<div class="col-md-2">
								{{ Form::label('social_security', 'Social Security No') }}
							</div>

							<div class="col-md-4">
								{{ Form::text('social_security', null, ['class' => 'form-control', 'required']) }}
							</div>

						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-md-1">
								{{ Form::label('name_', 'Name') }}
							</div>

							<div class="col-md-4">
								{{ Form::text('name_', null, ['class' => 'form-control', 'required']) }}
							</div>

							<div class="col-md-1">
								{{ Form::label('surname', 'Surname') }}
							</div>

							<div class="col-md-4">
								{{ Form::text('surname', null, ['class' => 'form-control', 'required']) }}
							</div>

						</div>
					</div>


					<div class="form-group">
						<div class="row">
							<div class="col-md-1">
								{{ Form::label('address', 'Address') }}
							</div>

							<div class="col-md-6">
								{{ Form::text('address', null, ['class' => 'form-control', 'required']) }}
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-md-1">
								{{ Form::label('city', 'City') }}
							</div>

							<div class="col-md-3">
								{{ Form::text('city', null, ['class' => 'form-control', 'required']) }}
							</div>

							<div class="col-md-1">
								{{ Form::label('state', 'State') }}
							</div>

							<div class="col-md-3">
								{{ Form::text('state', null, ['class' => 'form-control', 'required']) }}
							</div>

							<div class="col-md-1">
								{{ Form::label('zip', 'Zip') }}
							</div>

							<div class="col-md-2">
								{{ Form::text('zip', null, ['class' => 'form-control', 'required']) }}
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-md-1">
								{{ Form::label('cellphone', 'Tel. No. (Cell)') }}
							</div>

							<div class="col-md-4">
								{{ Form::text('cellphone', null, ['class' => 'form-control', 'required']) }}
							</div>

							<div class="col-md-1">
								{{ Form::label('homephone', 'Home Phone') }}
							</div>

							<div class="col-md-4">
								{{ Form::text('homephone', null, ['class' => 'form-control', 'required']) }}
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-md-1">
								{{ Form::label('email', 'Email Address') }}
							</div>

							<div class="col-md-4">
								{{ Form::text('email', null, ['class' => 'form-control', 'required']) }}
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-md-1">
								{{ Form::label('dateofbirth', 'Date of Birth') }}
							</div>

							<div class="col-md-3">
								{{ Form::date('dateofbirth', \Carbon\Carbon::now(), ['class' => 'form-control', 'required']) }}
							</div>

							<div class="col-md-1">
								{{ Form::label('age', 'Age') }}
							</div>

							<div class="col-md-1">
								{{ Form::text('age', null, ['class' => 'form-control']) }}
							</div>

							<div class="col-md-1">
								{{ Form::label('sex', 'Sex') }}
							</div>

							<div class="col-md-2">
								{{ Form::select('sex', ['' => '', 'female' => 'Female', 'male' => 'Male'], null, ['class' => 'form-control', 'required']) }}
							</div>

						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-md-5">
								{{ Form::label('maritalstatus', 'Single') }}
								{{ Form::radio('maritalstatus', 'single') }}
								
								{{ Form::label('maritalstatus', 'Married') }}
								{{ Form::radio('maritalstatus', 'married') }}

								{{ Form::label('maritalstatus', 'Widowed') }}
								{{ Form::radio('maritalstatus', 'widowed') }}

								{{ Form::label('maritalstatus', 'Divorced') }}
								{{ Form::radio('maritalstatus', 'divorced') }}
							</div>

							<div class="col-md-1">
								{{ Form::label('numchildren', 'No Children') }}
							</div>

							<div class="col-md-2">
								{{ Form::number('numchildren', null, ['class' => 'form-control', 'required']) }}
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-md-2">
								{{ Form::label('familydoctor', 'Present Family Doctor') }}
							</div>

							<div class="col-md-3">
								{{ Form::text('familydoctor', null, ['class' => 'form-control']) }}
							</div>


							<div class="col-md-1">
								{{ Form::label('phonefamilydoctor', 'Phone No') }}
							</div>

							<div class="col-md-3">
								{{ Form::text('phonefamilydoctor', null, ['class' => 'form-control']) }}
							</div>
						</div>
					</div>
                </div>
            </div>

    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Health Insurance Information</div>

                <div class="panel-body">
					<div class="form-group">
						<div class="row">
							<div class="col-md-2">
								{{ Form::label('company', 'Company Name') }}
							</div>

							<div class="col-md-3">
								{{ Form::text('company', null, ['class' => 'form-control']) }}
							</div>


							<div class="col-md-1">
								{{ Form::label('phone', 'Tel No') }}
							</div>

							<div class="col-md-3">
								{{ Form::text('phone', null, ['class' => 'form-control']) }}
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-md-2">
								{{ Form::label('companyaddress', 'Address') }}
							</div>

							<div class="col-md-6">
								{{ Form::text('companyaddress', null, ['class' => 'form-control']) }}
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-md-2">
								{{ Form::label('insured', 'Name of Insured') }}
							</div>

							<div class="col-md-3">
								{{ Form::text('insured', null, ['class' => 'form-control']) }}
							</div>


							<div class="col-md-2">
								{{ Form::label('relation_insure', 'Relation of Insured') }}
							</div>

							<div class="col-md-3">
								{{ Form::text('relation_insure', null, ['class' => 'form-control']) }}
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-md-2">
								{{ Form::label('policy', 'Policy No') }}
							</div>

							<div class="col-md-3">
								{{ Form::text('policy', null, ['class' => 'form-control']) }}
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Patient Signature</div>

                <div class="panel-body">
					<div class="form-group">
						<div class="row">
							<div class="col-md-12">
								<div class="js-signature" data-width="100%" data-height="200" data-line-color="#bc0000" data-auto-fit="true"></div>
								{{ Form::hidden('signature', '', ['id' => 'signature'] ) }}
							</div>
						</div>
                   </div>
                </div>
				<div class="panel-footer">
					{{ Form::button('Clear', ['id' => 'clearBtn', 'class' => 'btn btn-primary', 'onClick' => 'clearCanvas();']) }}
				</div>
            </div>

    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Emergency Contact</div>

                <div class="panel-body">
					<div class="form-group">
						<div class="row">
							<div class="col-md-2">
								{{ Form::label('name_contact', 'Name') }}
							</div>

							<div class="col-md-3">
								{{ Form::text('name_contact', null, ['class' => 'form-control', 'required']) }}
							</div>


							<div class="col-md-1">
								{{ Form::label('surname_contact', 'Surname') }}
							</div>

							<div class="col-md-3">
								{{ Form::text('surname_contact', null, ['class' => 'form-control', 'required']) }}
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-md-2">
								{{ Form::label('relationship', 'Relationship') }}
							</div>

							<div class="col-md-3">
								{{ Form::text('relationship', null, ['class' => 'form-control', 'required']) }}
							</div>


							<div class="col-md-1">
								{{ Form::label('phone_contact', 'Tel. No') }}
							</div>

							<div class="col-md-3">
								{{ Form::text('phone_contact', null, ['class' => 'form-control', 'required']) }}
							</div>
						</div>
					</div>
                </div>
				<div class="panel-footer">
					{{ Form::submit('Save', ['id' => 'saveBtn','class' => 'btn btn-primary', 'disabled' => 'true']) }}
					{{ Form::submit('Save and Download', ['id' => 'saveAndDownloadBtn','class' => 'btn btn-primary', 'disabled' => 'true']) }}
				</div>
            </div>
	</div>
</div>


{{ Form::close() }}
</div>
@endsection

@section('local_js')
	<script>
		$('.js-signature').jqSignature();	

		function clearCanvas() {
				$('.js-signature').jqSignature('clearCanvas');
		}

		$('.js-signature').on('jq.signature.changed', function() {
			var dataUrl = $('.js-signature').jqSignature('getDataURL');
			$("#signature").attr('value', dataUrl);
			$('#saveBtn').attr('disabled', false);
			$('#saveAndDownloadBtn').attr('disabled', false);
		});

		toastr.info('Are you the 6 fingered man?')
	</script>
@endsection
