@include('layouts.app')
<div class="container">
    <section class="panel">
        <header class="panel-heading">
          <h4>Category List</h4>
        </header>
        <div id="create" class="pull-right" style="padding: 10px;">
        <a href="{{route('product-statuses.create')}}" class="btn btn-primary">Create</a>
        </div>
        <table class="table table-striped table-advance table-hover">
          <thead>
            <tr>
              <th>No.</th>
              <th>Product Status Name</th>
              <th>Created by</th>
              <th>Updated by</th>
              <th>Created at</th>
              <th>Updated at</th>
              <th>Action</th>
            </tr>
            </thead>
            </tbody>
            {{-- if() --}}
            @foreach($productstatus as $row) 
            <tr>
              <td>{{$row->id}}</td>
              <td>{{$row->name}}</td>
              <td>{{$row->created_by}}</td>
              <td>{{$row->updated_by}}</td>
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
