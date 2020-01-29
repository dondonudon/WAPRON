<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Blank Page &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/require.css') }}">

    <!-- CSS Libraries -->
    @yield('styles')

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/layout.css') }}">
</head>

<body>
<div id="app">
    <div class="main-wrapper">
        @include('dashboard._partials._navbar')
        @include('dashboard._partials._sidebar')

        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1>Blank Page</h1>
                </div>

                <div class="section-body">
                </div>
            </section>
        </div>
        @include('dashboard._partials._footer')
    </div>
</div>

<!-- General JS Scripts -->
<script src="{{ asset('assets/js/require.js') }}"></script>

<!-- JS Libraies -->
@yield('js-libraries')

<!-- Template JS File -->
<script src="{{ asset('assets/js/layout.js') }}"></script>

<!-- Page Specific JS File -->
@yield('scripts')
</body>
</html>