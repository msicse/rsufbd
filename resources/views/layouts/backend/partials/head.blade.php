<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>RSUF | @yield('title')</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap -->
    <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="{{ asset('backend/css/material-dashboard.css?v=1.2.0') }}" rel="stylesheet" />

    <!-- DataTable -->
    <link href="{{ asset('datatables/jquery.dataTables.min.css') }}" rel="stylesheet" />

    <!-- Toastr -->
    <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet" />

    <!-- Fontawesome -->
    <link href="{{ asset('fontawesome/all.min.css') }}" rel="stylesheet" />


    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>

    @stack('css')
</head>
