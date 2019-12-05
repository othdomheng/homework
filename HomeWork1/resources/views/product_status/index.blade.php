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
        
        <section class="panel">
            <header class="panel-heading">
              <h4>Product Status List</h4>
            </header>
            <div id="create" class="pull-right" style="padding: 10px;">
            <a href="{{route('product-statuses.create')}}" class="btn btn-primary">Create</a>
            </div>
            <table class="table table-striped table-advance table-hover">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Product Status Name</th>
                  <th>Created at</th>
                  <th>Updated at</th>
                  <th>Action</th>
                </tr>
                </thead>
                </tbody>
                {{-- if() --}}
                @foreach($status as $row) 
                <tr>
                  <td>{{$row->id}}</td>
                  <td>{{$row->name}}</td>
                  <td>{{$row->created_at}}</td>
                  <td>{{$row->updated_at}}</td>
                  <td>
                    <div class="btn-group">
                    <a class="btn btn-primary" href="{{route('product-statuses.edit', $row->id)}}">
                        <i class="fa fa-edit"></i></a>
                    
                            {{------ delete action------}}
                            <form action="{{route('product-statuses.destroy',$row->id)}}" 
                                id="delete-form-{{$row->id}}" 
                                style="display: none;" method="post">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                </form>
                                <a class="btn btn-warning" 
                                onclick="if(confirm('Are you sure to delete Item ?'))
                                {
                                  event.preventDefault();
                                  document.getElementById('delete-form-{{$row->id}}').submit();
                                }else{
                                  event.preventDefault();
                                }"><i class="fa fa-trash"></i></a>
                    </div>
                  </td>
                </tr>
                @endforeach
              
              </tbody>
            </table>
          </section>
    </div>

    <script src="{{ asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('dist/js/adminlte.min.js')}}"></script>
</body>
</html>