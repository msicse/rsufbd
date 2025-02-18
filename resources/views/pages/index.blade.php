@extends('layouts.frontend.app')

@section('title', 'Home')


@push('css')
<style>
    .project {
        height: 200px;
        display: flex;
        align-items: flex-end;
        justify-content: center;

    }
    .pd-x {
        padding: 30px 15px 10px !important;
    }
    .project h4 {
        color: #fff;
        font-size: 20px;
    }
    .mission {
        background: transparent !important;
    }
    #main-content {
        margin-top: 100px;
    }

    .improvement-bg {
        background:
        linear-gradient(
          rgba(0, 0, 0, 0.45),
          rgba(0, 0, 0, 0.45)
        ),
        url('images/campus.jpg');
        background-size: cover;
    }

    .hospital {
        background:
        linear-gradient(
          rgba(0, 0, 0, 0.45),
          rgba(0, 0, 0, 0.45)
        ),
        url('images/hospital.jpg');
        background-size: cover !important;
        background-position: center center;
    }
    .scholarship {
        background:
        linear-gradient(
          rgba(0, 0, 0, 0.45),
          rgba(0, 0, 0, 0.45)
        ),
        url('images/scolarship.jpg');
        background-size: cover !important;
        background-position: center center;
    }
    .old {
        background:
        linear-gradient(
          rgba(0, 0, 0, 0.45),
          rgba(0, 0, 0, 0.45)
        ),
        url('images/old.jpg');
        background-size: cover !important;
        background-position: center center;
    }
    .relief {
        background:
        linear-gradient(
          rgba(0, 0, 0, 0.45),
          rgba(0, 0, 0, 0.45)
        ),
        url('images/releif.jpg');
        background-size: cover !important;
        background-position: center center;
    }

    .discover .card {
        margin-bottom: 25px;
        height: 325px;
    }
    .discover img {
        height: 240px;
    }
    .discover h4 {
        font-size: 21px;
    }


</style>
@endpush

@section('content')
<!-- Slider Section -->
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-inner">
        @foreach( $sliders as $slider )
        <div class="carousel-item {{ $slider->piority == 1 ? 'active' : ''  }}">
            <img class="bd-placeholder-img" src="{{ asset('uploads/sliders/'. $slider->image) }}" alt="" width="100%" height="100%">
            <div class="container">
                <div class="carousel-caption">
                    <h1>{{ $slider->title }}</h1>
                    <p>{{ $slider->description }}</p>
                    <!-- <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p> -->
                </div>
            </div>
        </div>

        @endforeach


    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- End Slider Section -->

<!-- Start Welcome Section -->
<section id="mission" class="section mission">
    <div class="container">
        <h2>Welcome to the RSUF</h2>
        <div class="row">
            <div class="col">
                <p class="text-justify">
                    <strong>Rahmantunnessa Shikkha Unnayan Foundation (RSUF)</strong> is a Bangladeshi organization engaged in socio-economic development activities among the poorest of the poor. It is a Non-Government, non-political and non- profitable organization working with the poor of all levels irrespective of caste or creed. The main aim of this organization is to bring about self-reliance of the people. RSUF is people based learning organization. Participation in real sense of the grass root people in development effort is one of the key issues for RSUF.<br>

                    We appreciate and are thankful for all efforts of our well-wishers, partners and donors in home and abroad. We are very much grateful to our people, Government and Donor community for their continuous support to our initiatives.

                </p>
            </div>
        </div>
    </div>
</section>
<!-- End Welcome Section -->

<!-- Project Section -->
<section id="discover" class="section  discover">
    <div class="container">
        <h2>Projects of RSUF</h2>
        <div class="row">
            <div class="col-md-4 col-sm-12  wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/campus.jpg') }}" alt="rsufbd">
                    <div class="card-body">
                        <h4 class="card-title text-center"> Rahmatunnesa Skill Training Project (RSTP)</h4>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-12  wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/schlorship-rogram.JPG') }}" alt="rsufbd">
                    <div class="card-body">
                        <h4 class="card-title text-center">RSUF Scholarship Program</h4>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-12  wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/hospital.jpg') }}" alt="rsufbd">
                    <div class="card-body">
                        <h4 class="card-title text-center">Late Mazad Mollah Eye Hospital</h4>
                    </div>
                </div>
            </div>

            
            <div class="col-md-4 col-sm-12  wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/safe-drinking-water.jpg') }}" alt="rsufbd">
                    <div class="card-body">
                        <h4 class="card-title text-center">Safe Drinking Water Project</h4>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-12  wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/old.jpg') }}" alt="rsufbd">
                    <div class="card-body">
                        <h4 class="card-title text-center">RSUF Old Care Project</h4>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-12  wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/relief.jpg') }}" alt="rsufbd">
                    <div class="card-body">
                        <h4 class="card-title text-center">RSUF Emergency Relief Activities</h4>
                    </div>
                </div>
            </div>


        </div>

    </div>
</section>
<!-- End Project Section -->

<!-- Start Welcome Section -->
<!-- <section  class="section">
    <div class="container">
        <h2>Welcome to the RSUF</h2>
        <div class="row">
            <div class="col">
                <p class="text-center">
                    Rahmantunnessa Shikkha Unnayan Foundation (RSUF) is a Bangladeshi organization engaged in socio-economic development activities among the poorest of the poor. It is a Non-Government, non-political and non- profitable organization working with the poor of all levels irrespective of caste or creed. The main aim of this organization is to bring about self-reliance of the people. RSUF is people based learning organization. Participation in real sense of the grass root people in development effort is one of the key issues for RSUF.<br>

                    We appreciate and are thankful for all efforts of our well-wishers, partners and donors in home and abroad. We are very much grateful to our people, Government and Donor community for their continuous support to our initiatives.

                </p>
            </div>
        </div>
    </div>
</section> -->
<!-- End Welcome Section -->




@endsection
