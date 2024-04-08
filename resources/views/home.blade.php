<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    {{--  css script  --}}
    @include('imports.frontend.css')

    <title>Document</title>
</head>

<body>

    {{-- navbar --}}
    @include('templates.frontend.nav')
    {{-- end navbar --}}


    {{-- page header --}}
    @include('templates.frontend.page_header')
    {{-- end page header --}}


    {{-- main content --}}
    @include('templates.frontend.main_content')
    {{-- end main content --}}

    {{-- footer  --}}
    @include('templates.frontend.footer')
    {{-- end footer --}}

    {{-- js script --}}
    @include('imports.frontend.js')
</body>

</html>
