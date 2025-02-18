
@extends('layouts.frontend.app')

@section('title', 'About | Vision ans Mission')


@push('css')
<style>
    h4{
        font-weight: bold;
    }
    
    .txt-just {
    text-align: justify;
}
</style>
@endpush

@section('content')

<!-- Start Welcome Section -->
<section id="mission" class="section">
    <div class="container">
        <h2>Vision and Mission</h2>
        <div class="row txt-just">
            <div class="col">

                <h4>Vision</h4>
                <p class="my-3">
                    "A poverty free, educated and peaceful society"
                </p>

                <h4>Mission</h4>
                <p>
                <strong>Rahmatunnesa Shikkha Unnayan Foundation (RSUF) – </strong>a spark of action, commits itself to reduce poverty alleviation, establishment of equal opportunities, peace and justice and ensuring formational quality education, appropriate agriculture, hygiene, sanitation, skills promotion and supports for income generation adjustable as time requires for the development of the poor, marginalized and deprived of the rural, semi-urban and urban communities in descending priority. </p>
                <p>
                <strong>Rahmatunnesa Shikkha Unnayan Foundation (RSUF) </strong>with a team of dedicated, skilled and competent workers practice the principles of human dignity, ethical values, participation, team-work, mutual respect and inter-religious harmony with clearly defined policies. Essentially RSUF believes in firing the spark of actions towards capacity building for self-help and self-reliance of its collaborating peoples, communities and people.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- End Welcome Section -->

@endsection
