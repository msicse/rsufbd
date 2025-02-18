@extends('layouts.frontend.app')

@section('title', 'News')


@push('css')
<!-- DataTable -->
<link href="{{ asset('datatables/jquery.dataTables.min.css') }}" rel="stylesheet" />

<style>
    .item {
        transition: .5s ease-in-out;
    }
    .item:hover {
        filter: brightness(80%);
    }
</style>
@endpush

@section('content')

<!-- Start Welcome Section -->
<section  class="section ">
    <div class="container">
        <h2>News</h2>
        <div class="row ">
            <div class="col">
                <table id="myTable" class="table table-striped ">
                        <thead class="text-primary">
                            <th>S.L</th>
                            <th>Date</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Action </th>
                        </thead>
                        <tbody>
                            @foreach( $news as $key => $data)
                            <tr class="align-middle">
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $data->date }}</td>
                                <td>{{ $data->title }}</td>
                                <td>{{ $data->description }}</td>
                                
                                <td>
                                    <a href="{{ asset('uploads/news/'.$data->image )}}" target="_blank">
                                        <img src="{{ asset('uploads/news/'.$data->image )}}" alt="" class="img-fluid" style="height: 150px;">
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ asset('uploads/news/'.$data->image )}}" target="_blank" class="btn btn-info text-light">Click Here</a>
                                </td>

                            </tr>
                            @endforeach

                        </tbody>
                    </table>
            </div>

        </div>

    </div>

</section>
<!-- End Welcome Section -->




@endsection

@push('js')
<!-- DataTable -->
<script src="{{ asset('datatables/jquery.dataTables.min.js') }}"></script>
<script>
	$(document).ready(function () {
		$('#myTable').DataTable();
	});
</script>
@endpush
