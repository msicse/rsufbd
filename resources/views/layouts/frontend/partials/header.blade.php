
<header>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md  sticky-navbar fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/rsuf_ogo.jpg') }}" class="brand-image" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse custom-nav" id="navbarCollapse">

            <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                    <a class="nav-link " aria-current="page" href="{{ Route('home') }}">Home</a>
                </li>


                <li class="nav-item {{ Request::is('get-involved') ? 'active' : '' }}">
                    <a class="nav-link " href="{{ Route('involved')}}">Get Involved</a>
                </li>
                <li class="nav-item {{ Request::is('news-and-visitors') ? 'active' : '' }}">
                    <a class="nav-link " href="{{ Route('news')}}">News</a>
                </li>
                
                <li class="nav-item {{ Request::is('galleries*') ? 'active' : '' }}">
                    <a class="nav-link " href="{{ Route('galleries.photo')}}">Gallery</a>
                </li>
                
                
                <!--<li class="nav-item dropdown {{ Request::is('galleries*') ? 'active' : '' }}">-->
                <!--    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">-->
                <!--        Galleries-->
                <!--    </a>-->
                <!--    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">-->

                <!--        <li><a class="dropdown-item {{ Request::is('galleries/photo-gallery') ? 'active' : '' }}" href="{{ route('galleries.photo') }}">Photo Gallery</a></li>-->
                <!--        <li><a class="dropdown-item {{ Request::is('galleries/video-gallery') ? 'active' : '' }}" href="{{ route('galleries.video') }}">Video Gallery</a></li>-->


                <!--    </ul>-->
                <!--</li>-->
                <li class="nav-item dropdown {{ Request::is('about*') ? 'active' : '' }}">
                    <a class="nav-link dropdown-toggle {{ Request::is('about*') ? 'active' : '' }}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        About
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item {{ Request::is('about/about-us') ? 'active' : '' }}" href="{{ route('about') }}">About Us</a></li>
                        <li><a class="dropdown-item {{ Request::is('about/history') ? 'active' : '' }}" href="{{ route('about.history') }}">History</a></li>
                        <li><a class="dropdown-item {{ Request::is('about/registration') ? 'active' : '' }}" href="{{ route('about.registration') }}">Registration</a></li>
                        <li><a class="dropdown-item {{ Request::is('about/vision-and-mission') ? 'active' : '' }}" href="{{ route('mission') }}">Vission and Mission </a></li>
                        <li><a class="dropdown-item {{ Request::is('about/areas-of-operation') ? 'active' : '' }}" href="{{ route('about.operation') }}">Areas of Operation</a></li>
                        <li><a class="dropdown-item {{ Request::is('about/what-we-do') ? 'active' : '' }}" href="{{ route('about.do') }}">What We Do</a></li>
                        <li><a class="dropdown-item {{ Request::is('about/success') ? 'active' : '' }}" href="{{ route('about.success') }}">Success</a></li>



                    </ul>
                </li>

                <li class="nav-item {{ Request::is('contact-us') ? 'active' : '' }}">
                    <a class="nav-link " href="{{ Route('contact')}}">Contact Us</a>
                </li>
                <li class="nav-item {{ Request::is('login') ? 'active' : '' }}">
                    <a class="nav-link " href="{{ Route('login')}}">Login</a>
                </li>

            </ul>
        </div>
    </div>
    </nav>
</header>
