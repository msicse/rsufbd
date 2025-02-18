    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <!-- <script src="js/popper.min.js"></script> -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <!-- Toastr -->
    <script src="{{ asset('js/toastr.min.js') }}"></script>

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
    @stack('js')
