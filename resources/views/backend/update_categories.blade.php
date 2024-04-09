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
                            <h1 class="m-0">Categories</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ route('categories') }}">Categories</a></li>
                                <li class="breadcrumb-item active">Update Categories</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="card card-dark">
                        <div class="card-header">
                            <h1 class="card-title ">
                                <i class="fas fa-layer-group" style="font-size: 1.5rem;"></i>
                                <strong style="font-size: 1.5rem;"> Update Categories </strong>
                            </h1>
                        </div>
                        <div class="card-body">
                            <a href="{{ url()->previous() }}" class="btn btn-success mb-3">
                                <i class="fas fa-chevron-left"></i> Back
                            </a>
                            <form action="{{ route('categories.update_process', ['id' => $data->_id]) }}"
                                method="post">
                                @csrf
                                <input type="hidden" name="_method" value="PUT">
                                <div class="form-group">
                                    <label for="name_categories">Name Categories</label>
                                    <input type="text" class="form-control" id="name_categories"
                                        name="name_categories" value="{{ $data->name_categories }}" autocomplete="none">
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <button type="submit" class="btn btn-success btn-block">Update</button>
                                    </div>
                                </div>
                            </form>
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
