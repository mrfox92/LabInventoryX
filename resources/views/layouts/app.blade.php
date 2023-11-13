<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Vendors Min CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/vendors.min.css') }}">
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
        
        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        
        @livewireStyles
        {{-- PowerGrid Styles --}}
        @powerGridStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>

        {{-- Fontawesome --}}
        <script src="https://kit.fontawesome.com/64d3820c80.js" crossorigin="anonymous"></script>

        {{-- SweetAlert 2 --}}
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        
    </head>

    <body>

        <!-- Start Sidemenu Area -->
        @livewire(\App\Helpers\UserHelper::sidebar())
        <!-- End Sidemenu Area -->

        <!-- Page Content -->
        
        <!-- Start Main Content Wrapper Area -->
        <main class="main-content d-flex flex-column">

            <!-- Top Navbar Area -->
            @livewire(\App\Helpers\UserHelper::navigation())
            <!-- End Top Navbar Area -->

            {{ $slot }}

            <div class="flex-grow-1"></div>

            <!-- Start Footer End -->
            <footer class="footer-area">
                
                <div class="row align-items-center">
                    {{ $footer ?? '' }}
                </div>

                @livewire('footer')

            </footer>
            <!-- End Footer End -->

        </main>
        <!-- End Main Content Wrapper Area -->

        
        @stack('modals')
        
        @livewireScripts
        {{-- PowerGrid Scripts --}}
        @powerGridScripts
        
        @stack('scripts')
        
        <!-- Vendors Min JS -->
        <script src="{{ asset('assets/js/vendors.min.js') }}"></script>

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
        
        <!-- ApexCharts JS -->
        <script src="{{ asset('assets/js/apexcharts/apexcharts.min.js') }}"></script>
        <script src="{{ asset('assets/js/apexcharts/apexcharts-stock-prices.js') }}"></script>
        <script src="{{ asset('assets/js/apexcharts/apexcharts-irregular-data-series.js') }}"></script>
        <script src="{{ asset('assets/js/apexcharts/apex-custom-line-chart.js') }}"></script>
        <script src="{{ asset('assets/js/apexcharts/apex-custom-pie-donut-chart.js') }}"></script>
        <script src="{{ asset('assets/js/apexcharts/apex-custom-area-charts.js') }}"></script>
        <script src="{{ asset('assets/js/apexcharts/apex-custom-column-chart.js') }}"></script>
        <script src="{{ asset('assets/js/apexcharts/apex-custom-bar-charts.js') }}"></script>
        <script src="{{ asset('assets/js/apexcharts/apex-custom-mixed-charts.js') }}"></script>
        <script src="{{ asset('assets/js/apexcharts/apex-custom-radialbar-charts.js') }}"></script>
        <script src="{{ asset('assets/js/apexcharts/apex-custom-radar-chart.js') }}"></script>

        <!-- ChartJS -->
        <script src="{{ asset('assets/js/chartjs/chartjs.min.js') }}"></script>
        <div class="chartjs-colors"> <!-- To use template colors with Javascript -->
            <div class="bg-primary"></div>
            <div class="bg-primary-light"></div>
            <div class="bg-secondary"></div>
            <div class="bg-info"></div>
            <div class="bg-success"></div>
            <div class="bg-success-light"></div>
            <div class="bg-danger"></div>
            <div class="bg-warning"></div>
            <div class="bg-purple"></div>
            <div class="bg-pink"></div>
        </div>
        
        <!-- jvectormap Min JS -->
        <script src="{{ asset('assets/js/jvectormap-1.2.2.min.js') }}"></script>
        <!-- jvectormap World Mil JS -->
        <script src="{{ asset('assets/js/jvectormap-world-mill-en.js') }}"></script>
        <!-- Custom JS -->
        <script src="{{ asset('assets/js/custom.js') }}"></script>
    </body>
</html>