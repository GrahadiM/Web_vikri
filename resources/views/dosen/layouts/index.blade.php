<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website</title>

    @include('dosen.layouts.css')
    @yield('style')

</head>
<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <!-- Navbar -->
        @include('dosen.layouts.navbar')
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <h1 class="text-center" style="font-size: 36px; font-weight: bold">
                                @yield('subtitle')
                            </h1>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            @yield('content')
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
            Anything you want
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2021 <a href="">Vikri F</a>.</strong> All rights reserved.
        </footer>
        <!-- /.footer -->
    </div>
    <!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

@include('dosen.layouts.js')
@yield('app')

</body>
</html>
