
@extends('layouts.frontend.app')

@section('title', 'About | Registration')


@push('css')
<style>
ol li {
    margin: 10px;
}

.reg {
    font-size: 22px;
}
</style>
@endpush

@section('content')

<!-- Start Welcome Section -->
<section id="mission" class="section reg">
    <div class="container">
        <h2>Registration</h2>

        <p class="p-4" style="font-weight: bolder;">Rahmantunnessa Shikkha Unnayan Foundation (RSUF) is registered with the Government of the People’s Republic of Bangladesh under the following departments.</p>
        <div class="row ">
            <div class="col">

                <ol>
                    <li>
                        Department of Social Welfare under the Joint Stock Companies and Firms, Bangladesh. Registration and Control Ordinance No. (XXI) of 1860 Registration No: S - 5460(574)/06 dt. February 23, 2006.
                    </li>
                    <li>NGO AFFAIRS BUREAU Registration No - 3142/18.</li>
                    <li>
                        National Skill Development Athority (NSDA)
Registration No: STP-RAJ-000375
Date: 2022
                    </li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!-- End Welcome Section -->


@endsection
