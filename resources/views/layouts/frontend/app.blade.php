<!doctype html>
<html lang="en">
    @include('layouts.frontend.partials.head')
    <body>

        <!-- Header Section -->

        @include('layouts.frontend.partials.header')

        <!-- End Header Section -->

        <!-- Main Content -->
        <section id="main-content">
        @yield('content')
        </section>
        <!-- End Main Section -->
        
        <!-- Footer Section -->

        @include('layouts.frontend.partials.footer')

        <!-- End Footer Section -->

        <!-- Scripts -->
        @include('layouts.frontend.partials.scripts')

        <script>
            $(".num").counterUp({delay:10,time:1000});
        </script>


    </body>
</html>
