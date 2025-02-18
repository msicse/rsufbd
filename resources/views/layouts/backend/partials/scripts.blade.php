<!--   Core JS Files   -->
<script src="{{ asset('backend/js/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('backend/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('backend/js/material.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('backend/js/perfect-scrollbar.jquery.min.js') }}"></script>
<!-- Material Dashboard javascript methods -->
<script src="{{ asset('backend/js/material-dashboard.js') }}"></script>


<!-- Toastr -->
<script src="{{ asset('js/toastr.min.js') }}"></script>

<!-- Fontawesome -->
<script src="{{ asset('fontawesome/all.min.js') }}"></script>

<!-- DataTable -->
<script src="{{ asset('datatables/jquery.dataTables.min.js') }}"></script>

@if ($errors->any())
	@foreach ($errors->all() as $error)
		<script>
			toastr.error('{{ $error }}',{
							closeButton:true,
							progressBar:true,
						});

		</script>
	@endforeach
@endif
{!! Toastr::message() !!}

<script>
	$(document).ready(function () {
		$('#myTable').DataTable();
	});
</script>

@stack('js')
