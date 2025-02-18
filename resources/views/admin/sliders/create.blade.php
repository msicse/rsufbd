@extends('layouts.backend.app')
@section('title', 'Sliders | Create')

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
                    <h4 class="title"> <span>Add Slider</span> <a href="{{ route('admin.sliders.index') }}" class="btn btn-info pull-right"><i class="fas fa-backward icon"></i>Back</a> </h4>
                </div>
                <div class="card-content">
                    <form class="" action="{{ route('admin.sliders.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input type="text"  name="title" class="form-control" id="" placeholder="Title">
                                </div>

                                <div class="form-group">
                                    <label for="">Sub Title</label>
                                    <input type="text" name="sub_title" class="form-control" id="" placeholder="Sub Title">
                                </div>
                                <label for="">Image</label>
                                <input type="file" name="image" required>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Piority</label>
                                    <input type="number" name="piority" class="form-control"  placeholder="Example- 1,2,3" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea name="description" class="form-control" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 text-center">
                                <input type="submit" class="btn btn-success" name="" value="Submit" >
                            </div>
                        </div>


                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script src="{{ asset('fontawesome/all.min.js') }}"></script>
@endpush
