@extends('layouts.app')

@section('content')
@include('layouts.bar')
    <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Tools Search</div>

                <div class="panel-body">
				{{ Form::open(['url' => '/patient/search']) }}
					<div class="form-group">
						<div class="row">
							<div class="col-md-2">
								{{ Form::label('name_', 'Name') }}
							</div>

							<div class="col-md-4">
								{{ Form::text('name_', null, ['class' => 'form-control']) }}
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-2">
								{{ Form::label('social_security', 'Social Security No') }}
							</div>

							<div class="col-md-4">
								{{ Form::text('social_security', null, ['class' => 'form-control']) }}
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-md-2">
								{{ Form::submit('Search', ['class' => 'btn btn-primary']) }}
								<div class='js-signature'></div>
							</div>
						</div>
					</div>

				{{ Form::close() }}
                </div>
            </div>

@if ($patients->count() > 0)
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Patients</div>

                <div class="panel-body">
					<div class="form-group">
						<div class="row">
        					<div class="col-md-12">
							<table class="table table-striped table-hover">
								<thead>
									<tr>
										<th>Social Security</th>
										<th>Name</th>
										<th>Surname</th>
										<th>Created</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>

								<tbody>
									@foreach ($patients as $patient)
										<tr>
											<td>{{ $patient->social_security }}</td>
											<td>{{ $patient->name }}</td>
											<td>{{ $patient->surname }}</td>
											<td>{{ $patient->created_at }}</td>
											<td>@if ($patient->signature)
													<span class="label label-success">Signed</span></td>
												@else
													<span class="label label-warning">Pending</span></td>
												@endif
											<td>
					<a href="#" onClick="javacript:openModal({{ $loop->index }})" style="cursor: pointer;margin-right:5px;"><li class="fa fa-edit"></li></a>
					<a href='{{ url("/patient/pdf/" . $loop->index ) }}' style="cursor: pointer;margin-right:5px;"><li class="fa fa-download"></li></a>
					<a href="#" onClick="javacript:deleteHistorial({{ $loop->index }})" style="cursor: pointer;"><li class="fa fa-trash"></li></a></td>
											<td></td>
										</tr>
									@endforeach
								</tbody>
							</table>
						</div>
						</div>
					</div>
				</div>

				<div class="panel-footer">
					{{ $patients->links() }}
            	</div>
            </div>
        </div>
    </div>
@else
	<div class="alert alert-success">
	  <strong>Warning!</strong> No records matches.
	</div>	
@endif
</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Patient: <span id="modal_name_patient_delete"></span></h4>
      </div>
      <div class="modal-body">
			<table class="table table-striped">
				<tr>
					<td><span>Security Social No</span></td>
					<td><span id="modal_social_security"></span></td>
				<tr>
			</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- Modal Delete-->
<div id="myModalDelete" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Patient: <span id="modal_name_patient"></span></h4>
      </div>
      <div class="modal-body">
			<span>Are you sure?</span>
      </div>
	  <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger">Delete</button>
      </div>
    </div>

  </div>
</div>

<script>

</script>
@endsection

@section ('local_js')
<script>
	function openModal(index){
		var patient = {!! json_encode($patients) !!}

		$("#modal_social_security").html("<b>" + patient.data[index].social_security + "<b>");
		$('#myModal').modal('show');
	}

	function deleteHistorial(index){
				
		var patient = {!! json_encode($patients) !!}

		$("#modal_name_patient_delete").html("<b>" + patient.data[index].social_security + "<b>");
		$('#myModalDelete').modal('show');
	}

</script>
@endsection
