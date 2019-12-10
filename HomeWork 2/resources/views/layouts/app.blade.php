<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('bower_components/Ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/skins/skin-blue.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        {{-- <ul>
            <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Category
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('product-categories.create')}}">Create</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="{{route('product-categories.index')}}">View</a>
            </li>
            <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Product Statuses
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('product-statuses.create')}}">Create</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route('product-statuses.index')}}">View</a>
            </li>
            <li><a href="">Product</a></li>
        </ul> --}}

        @include('menus.navbar')
        @yield('content')
       

    </div>

    <script src="{{ asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('dist/js/adminlte.min.js')}}"></script>
</body>
</html>