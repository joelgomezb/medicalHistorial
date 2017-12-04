@switch (Session::has('success'))
    @case ('success')
        <script>toastr.success('{{ session('success') }}');</script>
    @break

	@case (2)
	    Second case...
	@break

	@default
        Default case...
	@endswitch
