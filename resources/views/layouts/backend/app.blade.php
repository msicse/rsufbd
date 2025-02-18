<!doctype html>
<html lang="en">
<!-- Head -->
@include('layouts.backend.partials.head')

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        @include('layouts.backend.partials.sidebar')


        <div class="main-panel">
            <!-- Navebar -->
            @include('layouts.backend.partials.nav')
            <div class="content">
                @yield('content')
            </div>

        </div>
    </div>
</body>
@include('layouts.backend.partials.scripts')

</html>
