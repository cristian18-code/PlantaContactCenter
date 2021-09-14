<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'Inicio') | Planta</title>

    <link rel="icon" type="image/png" href="{{asset('public/media/img/planta.png')}}"/>
    <!-- Custom fonts for this template-->
    {!! Html::style('public/sb-admin-2/vendor/fontawesome-free/css/all.min.css') !!}
    {!! Html::script('public/sb-admin-2/vendor/jquery/jquery.min.js') !!}
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    {{-- {!! Html::style('public/sb-admin-2/css/sb-admin-2.min.css') !!} --}}
    <!-- Custom styles for this template-->
    {!! Html::style('public/css/app.css') !!}
    @yield('styles')
</head>
<body id="page-top">
    <div id="app">
        <!-- Page Wrapper -->
        <div id="wrapper">
            <!-- Sidebar -->
            @include('layouts._menu')
            <!-- End of Sidebar -->
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content">
                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-dark bg-primary topbar mb-4 static-top shadow">
                        @include('layouts._nav')
                    </nav>  
                    <!-- End of Topbar -->
                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                        @include('partials.status-session')                   
                        @yield('content')
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span class="text-gray-800">Copyright &copy; MedContactCenter {{date('Y')}}</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
    </div>    
    {!! Html::script('public/js/app.js') !!}
    {!! Html::script('public/sb-admin-2/js/sb-admin-2.js') !!}
    @yield('scripts')
</body>
</html>