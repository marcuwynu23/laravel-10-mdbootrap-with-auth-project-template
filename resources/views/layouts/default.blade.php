<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('vendor/md5/mdb.min.css') }}">
</head>

<body>
    <div class="container">
        @yield('content')
    </div>
    <script src="{{ asset('vendor/md5/mdb.es.min.js') }}"></script>
    <script src="{{ asset('vendor/md5/mdb.umd.min.js') }}"></script>
</body>

</html>
