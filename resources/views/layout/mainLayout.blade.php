<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <title>Anatel Ventures PVT LTD</title>
    <script src="js/jquery.js" ></script>
    @yield('meta-tag')

</head>
<body>

@include('layout.header')
@yield('content')

@include('layout.footer')
<script src="js/slick.min.js"></script>
<script src="{{url('js/bootstrap-js/bootstrap.min.js')}}"></script>

<script src="{{url('js/custom.js')}}">

</script>
</body>
</html>