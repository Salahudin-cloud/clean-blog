<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clean Blog</title>

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
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Posts</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                                <li class="breadcrumb-item active">Posts</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header  bg-dark">
                                    <h1 class="card-title">
                                        <i class="fas fa-layer-group" style="font-size: 1.5rem;"> Posts</i>
                                    </h1>
                                </div>
                                <div class="card-body">
                                    <a href="{{ route('posts_new') }}" class="btn btn-success">
                                        <i class="fas fa-plus"></i> New Posts
                                    </a>
                                    <table class="table table-bordered table-hover mt-2">
                                        <thead>
                                            <tr>
                                                <th style="width: 1%;">NO</th>
                                                <th>Title Post</th>
                                                <th>Slug Post</th>
                                                <th>Category Post</th>
                                                <th>Image Post</th>
                                                <th>Status Post</th>
                                                <th style="width: 10%;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1.</td>
                                                <td>Man must explore, and this is exploration at its greatest</td>
                                                <td>man-must-explore-and-this-is-exploration-at-its-greatest</td>
                                                <td>Information</td>
                                                <td>
                                                    <img width="50%"
                                                        src="{{ asset('assets/backend/dist/img/avatar.png') }}"
                                                        class="img-responsive" alt="">
                                                </td>
                                                <td>Publish</td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Action buttons">
                                                        <a href="" class="btn btn-sm btn-success">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                        <a href="" class="btn btn-sm btn-warning"><i
                                                                class="nav-icon fas fa-edit"></i></a>
                                                        <form action="" method="POST">
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <button class="btn btn-sm btn-danger" type="submit">
                                                                <i class="nav-icon fas fa-trash-alt"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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
