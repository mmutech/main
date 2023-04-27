<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Smarthr - Bootstrap Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Dashboard - HRMS admin template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">

    <!-- Bootstrap CSS general-->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    @stack('dashboard-css')
    @stack('all-assets-css')

    <!-- Fontawesome CSS general-->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    
    <!-- Lineawesome CSS general-->
    <link rel="stylesheet" href="{{ asset('assets/css/line-awesome.min.css') }}">
    
    <!-- Main CSS general-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    
    <!-- Styles -->
    @livewireStyles

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    

    <style>
        [x-cloak] {
            display: none;
        }
    </style>

</head>

<body>
    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Header -->
        <livewire:partials.user-header />
        <!-- /Header -->

        <!-- Sidebar -->
        <livewire:partials.user-navbar />
        <!-- /Sidebar -->

        <!-- Page Wrapper -->
        <div class="page-wrapper">

            <!-- Page Content -->
            <div class="content container-fluid">
                {{ $slot }}
            </div>
            <!-- /Page Content -->

        </div>
        <!-- /Page Wrapper -->

    </div>
    <!-- /Main Wrapper -->
    

    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Slimscroll JS -->
    <script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}"></script>

    @stack('dashboard-js')
    @stack('all-assets-js')

    <!-- Custom JS -->
    <script src="{{ asset('assets/js/app.js') }}"></script>

    @livewireScripts
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>
