@extends('layouts.frontend.app')

@section('title', 'Get Involved')


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
        height: 300px;
        padding: 20px;
        margin-bottom: 25px;
}
.committee h4 {
        margin-top: 10px;
}
.involved {
    margin-bottom: 10px;
}
.involved h4 {
    font-size: 35px;
}
.involved li {
    font-size: 22px;
    margin-bottom: 5px;
}
</style>
@endpush

@section('content')

<!-- Start Welcome Section -->
<section  class="section">
    <div class="container">
        <h2>Get Involved</h2>
        <div class="row ">
            <div class="col">
                 <div class="involved">
                     <h4>Membership</h4>
                     <p>Open to all adults people with good social reputation and character irrespective who actively believe in the principles and philosophy of RSUF.</p>
                 </div>
                 <div class="involved">
                     <h4>Volunteers</h4>
                     <p>RSUF accepts non-paid volunteers from home and abroad for exchange experiences and assistance in development and cultural issues.</p>
                 </div>
                 <div class="involved">
                     <h4>Collaboration</h4>
                     <p>RSUF takes up joint ventures with other organizations such as NGOs or Government institutions and seeks services of consultants and volunteers to implement its development programs in a dynamic manner. It has membership with NSDA.</p>
                 </div>
                 <div class="involved">
                     <h4>Partners and Donors</h4>
                     <p>The present partners and donors of RSUF projects are:</p>
                     <ul>
                         <li>Shanti-Switzerland</li>
                         <li>SHETU-Germany</li>
                         <li>Swiss Agency for Development Cooperation (SDC)</li>
                     </ul>
                 </div>
            </div>
        </div>
    </div>
</section>
<!-- End Welcome Section -->




@endsection
