<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>Inventory Management</title>
    <link rel="icon" type="image/x-icon" href="{{asset('public/favicon.ico')}}" />
    <link href="{{asset('public/css/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('public/css/animate.min.css')}}" rel="stylesheet" />
    <link href="{{asset('public/css/fontawesome.css')}}" rel="stylesheet" />
    <link href="{{asset('public/css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('public/css/toastify.min.css')}}" rel="stylesheet" />
    <script src="{{asset('public/js/toastify-js.js')}}"></script>
    {{-- <script src="{{asset('public/js/axios.min.js')}}"></script> --}}
    <script src="https://cdn/public/js.cloudflare.com/ajax/libs/axios/1.6.3/axios.min.js"></script>
    <script src="{{asset('public/js/config.js')}}"></script>
</head>

<body>

<div id="loader" class="LoadingOverlay d-none">
<div class="Line-Progress">
    <div class="indeterminate"></div>
</div>
</div>

<div>
    @yield('content')
</div>
<script>

</script>

<script src="{{asset('public/js/bootstrap.bundle.js')}}"></script>

</body>
</html>
