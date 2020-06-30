<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>{{ env('APP_NAME','BestBlog')}}</title>
</head>
<body>
    @include('includes.navbar')
    <p>@yield('title')</p>
    <div class="container">
        @include('includes.messages')<!-- الصفحة الخاصة ب ال validate-->
        @yield('content')
    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
