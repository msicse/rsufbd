@extends('layouts.frontend.app')

@section('title', 'About Us')


@push('css')
<style>
    .project {
        height: 150px;
        display: flex;
        align-items: center;
        justify-content: center;

    }
    .project h4 {
        text-align: center;
    }
    .mission {
        background: #fff;
    }
    td:first-child  {
        min-width: 220px;
    }
    .committee {
        background: #fff;
        padding: 20px;
        margin-bottom: 25px;
}
.committee h4 {
        margin-top: 10px;
        font-size: 23px;
        font-weight: bold;
}

.volunteers .committee {
}
.volunteers p. .visitors p {
    margin: 0;
}
.executive img {
    height: 140px;
    width: 140px;
}

ol li {
    margin-bottom: 15px;
}

.table {
    font-size: 24px;
}
p {
    margin: 0;
}
</style>
@endpush

@section('content')

<!-- Start About-US Section -->
<section id="mission" class="section">
    <div class="container">
        <h2>About Us</h2>
        <div class="row">
            <div class="col">
                 <table class="table">
                     <tbody>
                         <tr>
                             <td>Name of the Organization</td>
                             <td>:</td>

                             <td>
                                 <strong>Rahmantunnessa Shikkha Unnayan Foundation (RSUF)</strong>
                             </td>
                         </tr>
                         <tr>
                             <td>Contact Person</td>
                             <td>:</td>

                             <td>
                                 <ol>
                                     <li>
                                         <strong>Md. Jahidul Islam <br>Founder and Chairman<br>

                                             Phone. +88 01708515958     <br>
                                              E-mail. rsufbd@gmail.com<br>
                                              Website. www.rsufbd.com
                                         </strong>
                                     </li>
                                     <li>
                                         <strong>Md. Sohidul Islam <br> Director<br>
                                             Phone +88 01711231830 <br>
                                             E-mail. rsufbd@gmail.com<br>
                                             Website. www.rsufbd.com
                                         </strong>

                                     </li>
                                 </ol>


                             </td>
                         </tr>
                         <tr>
                             <td>Established date</td>
                             <td>:</td>

                             <td>
                                 <strong>January 10, 2002</strong>
                             </td>
                         </tr>
                         <tr>
                             <th colspan="3">National Skill Development Athority (NSDA)</th>
                         </tr>
                         <tr>
                             <td>Registration No </td>
                             <td>:</td>
                             <td>STP-RAJ-000375</td>
                             
                         </tr>
                         <tr>
                             <td>Date  </td>
                             <td>:</td>
                             <td>2022</td>
                             
                         </tr>

                     </tbody>

                 </table>
            </div>
        </div>
    </div>
</section>
<!-- End About-Us Section -->


<!-- Start Executive Section -->
<section  class="section executive">
    <div class="container">
        <h2>Executive Committee</h2>
        <div class="row ">
            <div class="col-md-4">
                <div class="committee text-center">
                    <img src="{{ asset('images/executive/jahidul.jpg') }}"  class="bd-placeholder-img rounded-circle" alt="">
                    <h4>Md. Jahidul Islam</h4>
                    <!--<p>Founder and Chairman</p>-->
                    <p>President</p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="committee text-center">
                    <img src="{{ asset('images/executive/ibrahim.png') }}"  class="bd-placeholder-img rounded-circle" alt="">
                    <h4>Md. Abdullah Ibraim</h4>
                    <!--<p>Founder and Chairman</p>-->
                    <p>Vice-President</p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="committee text-center">
                    <img src="{{ asset('images/executive/rokeya.png') }}"  class="bd-placeholder-img rounded-circle" alt="">
                    <h4>Rokeya Razzak </h4>
                    <!--<p>Founder and Chairman</p>-->
                    <p>General Secretary</p>
                </div>
            </div>
            
            <!--

            <div class="col-md-4">
                <div class="committee text-center">
                    <img src="{{ asset('images/executive/motiur.jpg') }}" class="bd-placeholder-img rounded-circle" alt="">
                    <h4>Sheakh Motiur Rahman</h4>
                    <p>Vice-Chairman</p>
                </div>
            </div>
            
            -->

            <div class="col-md-4">
                <div class="committee text-center">
                    <img src="{{ asset('images/executive/bari.png') }}" class="bd-placeholder-img rounded-circle" alt="">
                    <h4>M A Bari </h4>
                    <p>Treasurer</p>
                </div>
            </div>

            <!--<div class="col-md-4">-->
            <!--    <div class="committee text-center">-->
            <!--        <img src="{{ asset('images/executive/abdullah.png') }}"  class="bd-placeholder-img rounded-circle" alt="">-->
            <!--        <h4>Md. Abdullah Ibrahim</h4>-->
            <!--        <p>Executive Member</p>-->
            <!--    </div>-->
            <!--</div>-->
            <div class="col-md-4">
                <div class="committee text-center">
                    <img src="{{ asset('images/executive/robiul.png') }}" class="bd-placeholder-img rounded-circle" alt="">
                    <h4>Md. Robiul Karim</h4>
                    <p> Member</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="committee text-center">
                    <img src="{{ asset('images/executive/roksana.png') }}"  class="bd-placeholder-img rounded-circle" alt="">
                    <h4>Rokshana Parvin</h4>
                    <p> Member</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="committee text-center">
                    <img src="{{ asset('images/executive/khalilur.jpg') }}"  class="bd-placeholder-img rounded-circle" alt="">
                    <h4>Kholilur Rahaman</h4>
                    <p> Member</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="committee text-center">
                    <img src="{{ asset('images/executive/tareq.jpg') }}" s class="bd-placeholder-img rounded-circle" alt="">
                    <h4>Abu Tareq Shake</h4>
                    <p>Member</p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="committee text-center">
                    <img src="{{ asset('images/executive/alomgir.png') }}" s class="bd-placeholder-img rounded-circle" alt="">
                    <h4>Md. Alomgir Hossain</h4>
                    <p>Member</p>
                </div>
            </div>
            

        </div>
    </div>
</section>
<!-- End Executive Section -->

<!-- Start Visitors Section -->
<section  class="section visitors">
    <div class="container">
        <h2>Our Visitors</h2>
        <div class="row ">
            
            @if( $visitors->count() > 0)
            
            @foreach($visitors as $visitor)


            <div class="col-md-4">
                <div class="committee">
                    <div class="text-center p-2">
                        <img src="{{ asset('uploads/visitors/'. $visitor->image ) }}" style="height:140px; width:140px;" class="bd-placeholder-img rounded-circle" alt="">
                    </div>

                    <h4><strong>Name:</strong> {{ $visitor->name }}</h4>
                    <p><strong>Country:</strong> {{ $visitor->country }}</p>
                    <p><strong>Date:</strong> {{ $visitor->date }}</p>
                </div>
            </div>
            @endforeach
            @else
            <div class="col text-center text-danger bg-light p-4">
                No Visitors Found
            </div>
            @endif

        </div>
    </div>
</section>
<!-- End Visitors Section -->

<!-- Start Volunteers Section -->
<section  class="section volunteers">
    <div class="container">
        <h2>Our Volunteers</h2>
        <div class="row ">
            
            @if( $visitors->count() > 0)
             
            @foreach( $volunteers as $volunteer )
            <div class="col-md-4">
                <div class="committee">
                    <div class="text-center p-2">
                        <img src="{{ asset('uploads/volunteers/'. $volunteer->image ) }}" style="height:140px; width:140px;" class="bd-placeholder-img rounded-circle" alt="">
                    </div>

                    <h4><strong>Name:</strong> {{ $volunteer->name }}</h4>
                    <p><strong>Country:</strong> {{ $volunteer->country }}</p>
                    <p><strong>Expertise:</strong> {{ $volunteer->expertise }}</p>
                    <p><strong>Duration:</strong> {{ $volunteer->duration }}</p>
                </div>
            </div>
            @endforeach
            
            @else
            <div class="col text-center text-danger bg-light p-4">
                No Volunteers Found
            </div>
            @endif

        </div>
    </div>
</section>
<!-- End Volunteers Section -->


@endsection
