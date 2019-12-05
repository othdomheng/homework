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
        @include('menus.navbar')
      @if(session('success'))
        {!! session('success') !!}
      @endif

    <form action="{{route('product-categories.store')}}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="exampleInputEmail1">Category Name</label>
              <input type="text" class="form-control" name="name">
              {{ $errors->first('name') }}
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
          </form>
    </div>

    <script src="{{ asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('dist/js/adminlte.min.js')}}"></script>
</body>
</html>