@extends('layouts.frontend.app')

@section('title', 'Contact Us')


@push('css')
<style>

.container-fluid {
    padding: 0;
}
.address p {
    font-size: 20px;
}
</style>
@endpush

@section('content')

<!-- Start Welcome Section -->
<section  class="section">
    <div class="container">
        <h2 class="py-5">Contact Us</h2>
        <div class="row ">
            <div class="col">
                 <div class="address">
                     <h3 class="py-2">Central Office</h3>
                     <strong style="font-size: 22px;">Rahmantunnessa Shikkha Unnayan Foundation (RSUF)</strong>
                     <p>
                         <strong>Village : </strong> Paturia,
                         <strong> Post Office </strong> : Gee-Comla <br>
                         <strong> Upazilla</strong>: Kalukhali,
                         <strong>Dist. </strong> : Rajbari <br>Bangladesh

                         <br>
                         <strong>Phone:</strong> +880 1786360453 <br>
                         <strong>Email:</strong> rsufbd@gmail.com <br>
                         <strong>Web:</strong> www.rsufbd.com <br>


                     </p>
                 </div>
            </div>
            <div class="col">
                <h3 class="py-2">Send Us a Message</h3>
                <form action="{{ route('contact.store') }}" method="post">
                    @csrf
                        <div class="mb-3 row">
                            <div class="col-md-6 mb-4 mb-lg-0">
                                <input type="text" name="fname" value="{{ old('fname') }}" class="form-control" placeholder="First name">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="lname" value="{{ old('lname') }}" class="form-control" placeholder="First name">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-md-12">
                                <input type="text" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email address">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-md-12">
                                <input type="text" name="phone" value="{{ old('phone') }}" class="form-control" placeholder="Phone number">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-md-12">
                                <textarea name="message" class="form-control" placeholder="Write your message." cols="30" rows="10">{{ old('message') }}</textarea>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col text-center">
                                <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Send Message">
                            </div>
                        </div>
                        </form>
            </div>

            </div>
        </div>
    </div>
</section>
<!-- End Welcome Section -->

<section>
    <div class="container-fluid">
        <div class="col">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.2023449726134!2d89.43189941538378!3d23.668720797807577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe5fdaf9165a2d%3A0x2848e995acbad72f!2sRESI!5e0!3m2!1sbn!2sbd!4v1619532595380!5m2!1sbn!2sbd" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>


        </div>
    </div>
</section>







@endsection
