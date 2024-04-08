<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dasboard</title>

    <!-- IMPORT REUIRED FILE CSS -->
    @include('imports.backend.css')

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- preloader -->
        @include('templates.backend.pre')

        <!-- navbar -->
        @include('templates.backend.nav')


        <!-- sidebar -->
        @include('templates.backend.sidebar')


        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            @include('templates.backend.content_header')


            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>Rp. 500.000.000</h3>
                                    <p>Total Donasi Tahun Ini</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-wallet"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>Rp. 500.000.000</h3>
                                    <p>Total Donasi Bulan Ini</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-money-bill"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header  bg-dark">
                                    <h1 class="card-title">
                                        <i class="fa fa-home" style="font-size: 1.5rem;"> Dashboard</i>
                                    </h1>
                                </div>
                                <div class="card-body">
                                    <h3>Selamat Datang !</h3>
                                    <div class="table-responsive">
                                        <table class="table table-borderless ">
                                            <tr>
                                                <th width="10%">Nama</th>
                                                <th width="1%">:</th>
                                            </tr>
                                            <tr>
                                                <th width="10%">Username</th>
                                                <th width="1%">:</th>
                                            </tr>
                                            <tr>
                                                <th width="10%">Hak Akses</th>
                                                <th width="1%">:</th>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- footer -->
        @include('templates.backend.footer')

        <!-- control siidebar -->
        @include('templates.backend.control_sidebar')

    </div>

    <!-- reuired file js  -->
    @include('imports.backend.js')
</body>

</html>
