@if ($errors->count() > 0)
<div class="col-md-6">
	<div class="alert alert-danger">
	  <strong>Error(es)!</strong> 
		<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
		<ul>
	</div>
</div>
@endif

@if (Session::get('success'))
<div class="col-md-6">
	<div class="alert alert-success">
	  <strong>! </strong>{{ Session::get('success') }}
	</div>
</div>
@endif
