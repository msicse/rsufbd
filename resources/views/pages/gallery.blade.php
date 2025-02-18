@extends('layouts.frontend.app')

@section('title', 'Galleries | Photo Gallery')


@push('css')
<link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}">
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
<section  class="section">
    <div class="container">
        <h2>Photo Gallery</h2>
        <div class="row ">
            @foreach( $galleries as $gallery )
            <div class="col-sm-6 col-md-4 mb-4 item">
                <a href="{{ asset('uploads/galleries/'. $gallery->image) }}" class="fancybox" data-fancybox="gallery1">
                    <img src="{{ asset('uploads/galleries/'. $gallery->image) }}" alt="" width="100%" height="100%">
                </a>
            </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center py-4">
                {!! $galleries->links() !!}
        </div>



    </div>

</section>
<!-- End Welcome Section -->




@endsection

@push('js')
<script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
@endpush
