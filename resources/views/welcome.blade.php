<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <meta name="robots" content="index, follow">

    <title>Laravel</title>
    <script src="{{ asset('assets/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/fontawesome-free-6.3.0-web/css/all.min.css') }}">
    <link rel="stylesheet" href="{{asset('demo/demo.css')}}">
    <link rel="stylesheet" href="{{ asset('dist/jquery.flipster.min.css') }}">
<!-- Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="{{ asset('dist/jquery.flipster.min.js') }}"></script>

{{-- // for font-family --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Square+Peg&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="antialiased">
    <div id="app">
    </div>
    @vite('resources/js/app.js')
</body>

</html>
