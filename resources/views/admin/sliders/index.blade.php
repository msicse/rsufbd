@extends('layouts.backend.app')
@section('title', 'Sliders')

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
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" data-background-color="purple">
                    <h4 class="title"> <span>Sliders</span> <a href="{{ route('admin.sliders.create') }}" class="btn btn-success pull-right"><i class="fas fa-plus-square icon"></i>Add Slider</a> </h4>
                </div>
                <div class="card-content table-responsive">
                    <table id="myTable" class="table">
                        <thead class="text-primary">
                            <th>S.L</th>
                            <th>Title</th>
                            <th>Subtitle</th>
                            <th>Piority</th>
                            <th>Descrption</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach( $sliders as $key => $data)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $data->title }}</td>
                                <td>{{ $data->sub_title }}</td>
                                <td>{{ $data->piority }}</td>
                                <td>{{ $data->description }}</td>
                                <td>
                                    <img src="{{ asset('uploads/sliders/'.$data->image ) }}"  class="img-responsive">
                                </td>
                                <td>

                                    <form  action="{{ route('admin.sliders.status', $data->id) }}"  method="post">
                                        @csrf
                                        @if($data->status == 1)
                                        <button type="submit" class="btn btn-success ">Active</button>
                                        @else
                                        <button type="submit" class="btn btn-danger ">Deactive</button>
                                        @endif
                                    </form>
                                </td>
                                <td>
                                    <a href="{{ route('admin.sliders.edit', $data->id) }}" class="btn btn-info action-btn "><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger action-btn delete" data-delete-id="{{$data->id}}" data-toggle="modal" data-target="#delete-modal"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

 <!-- Delete Modal  -->
  <div class="modal fade" id="delete-modal">
	<div class="modal-dialog">
		<form class="delete_form" method="post">
			@csrf
			@method('DELETE')
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Delete Slider</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<strong>Are you sure to delete this Data ?</strong>
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
            var url=location.origin+'/admin/sliders/'+data_id;
            $('.delete_form').attr('action',url);

        });
</script>
@endpush
