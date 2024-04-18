<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
                            <div class="mt-2">
                                <a href="{{ route('posts') }}">
                                    <button class="btn btn-sm btn-success">
                                        <i class="fas fa-arrow-left"></i> Back
                                    </button>
                                </a>
                            </div>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ route('posts') }}">Post</a></li>
                                <li class="breadcrumb-item active">New Post</li>
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
                            <!-- title  -->
                            <h1 class="card-title ">
                                <i class="fas fa-newspaper" style="font-size: 1.5rem;"></i>
                                <strong style="font-size: 1.5rem;">New Post</strong>
                            </h1>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('posts_new_process') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="article_title">Post Title</label>
                                            <input type="text" class="form-control" id="post_title" name="post_title"
                                                placeholder="Input Title">
                                        </div>
                                        <div class="form-group">
                                            <label for="post_content">Post Content</label>
                                            <div id="_content" name="_content"></div>
                                            <input type="hidden" id="post_content" name="post_content">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="post_cover">Post Cover</label>
                                            <input type="file" class="form-control-file" id="post_cover"
                                                name="post_cover">
                                        </div>
                                        <div class="d-flex justify-content-end flex-column">
                                            <button class="btn btn-primary mb-2" type="submit" name="post_status"
                                                value="draft">Draft</button>
                                            <button class="btn btn-success" type="submit" name="post_status"
                                                value="publish">Publish</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
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


    <script>
        $(document).ready(function() {
            $('#_content').summernote({
                height: 300,
                toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough']],
                    ['color', ['forecolor', 'backcolor']],
                    ['para', ['ul', 'ol']],
                    ['insert', ['link']],
                    ['view', ['fullscreen', 'codeview']]
                ],
                callbacks: {
                    onChange: function(contents) {
                        // Update nilai input tersembunyi dengan isi editor Summernote
                        $('#post_content').val(contents);
                    }
                }
            });
        });
    </script>
</body>

</html>
