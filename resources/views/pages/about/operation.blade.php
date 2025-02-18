@extends('layouts.frontend.app')

@section('title', 'About | Areas of Operation')


@push('css')
<style>

</style>
@endpush

@section('content')

<!-- Start Welcome Section -->
<section id="mission" class="section">
    <div class="container">
        <h2>Areas of Operation</h2>
        <div class="row ">
            <div class="col text-center text-danger">
                 <img src="{{ asset('images/area_of_work.png') }}" class="img-fluid" alt="" style="height: 65%;">
            </div>
        </div>
    </div>
</section>
<!-- End Welcome Section -->



@endsection
