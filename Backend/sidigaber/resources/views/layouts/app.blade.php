<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>{{ config('app.name', 'Laravel') }}</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- AdminLTE Styles -->
    <link rel="stylesheet" href="{{ asset('adminlte/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/fontawesome-free/css/all.min.css') }}">

    <style>
        /* Background Image for Content Wrapper */
        .content-wrapper {
            min-height: 100vh;
        }

        /* Centered Navbar Title */
        .navbar-brand {
            font-size: 32px;
            letter-spacing: 1px;
            text-transform: uppercase;
            font-weight: bold;
            text-align: center;
            color: #2B37A0;
            flex-grow: 1; /* Allows the title to take available space */
            padding-left: 20px;
        }

        /* Custom Navbar Styles */
        .navbar-nav {
            display: flex;
            justify-content: space-between;
            width: 100%;
        }

        /* Enhance the Logout Button */
        .logout-btn {
            border-radius: 50px;
            padding: 8px 20px;
            background-color: #e3342f;
            color: white;
            border: none;
            transition: background-color 0.3s ease;
        }

        .logout-btn:hover {
            background-color: #c9302c;
        }

        /* Sidebar Styles */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            height: 100vh;
            background-color: #343a40;
            color: white;
            padding-top: 50px;
            transition: all 0.3s ease;
        }

        .sidebar .nav-item {
            padding: 12px;
        }

        .sidebar .nav-link {
            color: #b8c7ce;
            transition: background-color 0.3s;
        }

        .sidebar .nav-link:hover {
            background-color: #495057;
            color: white;
        }

        /* Navbar Adjustments */
        .navbar-nav.ml-auto {
            display: flex;
            justify-content: flex-end;
            margin-left: auto;
        }

        /* Sidebar collapse toggle (for mobile) */
        @media (max-width: 767px) {
            .sidebar {
                position: absolute;
                top: 0;
                left: -250px;
                z-index: 100;
            }

            .sidebar.show {
                left: 0;
            }

            .navbar-toggler {
                display: block;
            }
        }

        /* Content wrapper adjustments for mobile */
        .content-wrapper {
            padding-left: 0;
            margin-left: 0;
        }

        /* Smooth transition effects for sidebar toggle */
        .sidebar-transition {
            transition: transform 0.3s ease-in-out;
        }

    </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">
    <!-- Navbar -->
    <nav class="shadow-sm main-header navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Brand & Title -->
        <a class="navbar-brand d-flex justify-content-center w-100" href="#">
            <span class="navbar-brand">@yield('page-title', 'Dashboard')</span>
        </a>

        <!-- Navbar Items -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="ml-auto navbar-nav">
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="logout-btn">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Sidebar -->
    @include('layouts.sidebar')

    <!-- Content Wrapper -->
    <div class="content-wrapper">
        <section class="content">
            <div class="pt-3 container-fluid">
                @yield('content')
            </div>
        </section>
    </div>
</div>


<!-- Bootstrap Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


<!-- AdminLTE Scripts -->
<script src="{{ asset('adminlte/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('adminlte/js/adminlte.min.js') }}"></script>

<!-- Sidebar Toggle for Mobile -->
<script>
    $(document).ready(function () {
        // Toggle sidebar on mobile
        $(".navbar-toggler").click(function() {
            $(".sidebar").toggleClass("show");
        });
    });
</script>

</body>
</html>
