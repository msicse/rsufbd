@extends('layouts.backend.app')
@section('title', 'Users')

@push('css')
<link rel="stylesheet" href="{{ asset('fontawesome/all.min.css') }}">
<style>
    #myTable img {
        height: 110px;
        width: 100px;
    }
    .card .title, .btn {
        margin: 0 !important;
    }
    .card .card-header {
            padding: 11px 15px 25px !important;
    }
    .action-btn {
        padding: 12px 15px !important;
        margin-right: 10px !important;
    }
    .icon {
        margin-right: 6px;
    }
</style>
@endpush
@section('content')
<div class="container-fluid">
    <div class="row">
        
        @if(Auth::user()->type == 1)
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" data-background-color="purple">
                    <h4 class="title"> <span>Users</span> <a href="{{ route('admin.users.create') }}" class="btn btn-success pull-right"><i class="fas fa-user-plus icon"></i>Add User</a> </h4>
                </div>
                <div class="card-content table-responsive">
                    <table id="myTable" class="table">
                        <thead class="text-primary">
                            <th>S.L</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Descrption</th>
                            <th>Image</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach( $users as $key => $data)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->description }}</td>
                                <td>
                                    <img src="{{ asset('uploads/users/'.$data->image ) }}"  class="img-responsive">
                                </td>
                                <td>
                                    <a href="{{ route('admin.users.edit', $data->id) }}" class="btn btn-info action-btn "><i class="fas fa-edit"></i></a>
                                    <!-- <a href="#" class="btn btn-danger action-btn delete" data-delete-id="{{$data->id}}" data-toggle="modal" data-target="#delete-modal"><i class="fas fa-trash-alt"></i></a> -->
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @else
        
        <div class="col-md-12 ">
            <h1 class="text-center text-danger">You don't have any access</h1>
        </div>
        
        @endif
    </div>
</div>

{{-- Delete Modal --}}
  <div class="modal fade" id="delete-modal">
	<div class="modal-dialog">
		<form class="delete_form" method="post">
			@csrf
			@method('DELETE')
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Delete User</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<strong>Are you sure to delete this information ?</strong>
				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-danger">Delete</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</form>
	</div>
	<!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
@endsection

@push('js')
<script src="{{ asset('fontawesome/all.min.js') }}"></script>
<script>
    $( ".delete" ).click(function() {

            var data_id=$(this).data('delete-id');
            var url=location.origin+'/admin/users/'+data_id;
            $('.delete_form').attr('action',url);

        });
</script>
@endpush
