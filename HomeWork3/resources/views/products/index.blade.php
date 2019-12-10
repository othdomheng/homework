@include('layouts.app')
<div class="container">
    <section class="panel">
        <header class="panel-heading">
          <h4>Category List</h4>
        </header>
        <div id="create" class="pull-right" style="padding: 10px;">
        <a href="{{route('products.create')}}" class="btn btn-primary">Create</a>
        </div>
        <table class="table table-striped table-advance table-hover">
          <thead>
            <tr>
              <th>No.</th>
              <th>Product Name</th>
              <th>Code</th>
              <th>Product Type ID</th>
              <th>Product Status ID</th>
              <th>Shape ID</th>
              <th>Zone ID</th>
              <th>Rent Price</th>
              <th>Sale Price</th>
              <th>List Price</th>
              <th>Sold Price</th>
              <th>Created by</th>
              <th>Updated by</th>
              <th>Created at</th>
              <th>Updated at</th>
              <th>Action</th>
            </tr>
            </thead>
            {{-- </tbody> --}}
            {{-- if() --}}
            @foreach($data as $row) 
            <tr>
              <td>{{$row->id}}</td>
              <td>{{$row->name}}</td>
              <td>{{$row->code}}</td>
              <td>{{$row->product_type_id}}</td>
              <td>{{$row->product_status_id}}</td>
              <td>{{$row->shape_id}}</td>
              <td>{{$row->zone_id}}</td>
              <td>{{$row->rent_price}}</td>
              <td>{{$row->sale_price}}</td>
              <td>{{$row->list_price}}</td>
              <td>{{$row->sold_price}}</td>
              <td>{{$row->created_by}}</td>
              <td>{{$row->updated_by}}</td>
              <td>{{$row->created_at}}</td>
              <td>{{$row->updated_at}}</td>
              <td>
                <div class="btn-group">
                <a class="btn btn-primary" href="{{route('products.edit', $row->id)}}">
                    <i class="fa fa-edit"></i></a>
                
                        {{------ delete action------}}
                        <form action="{{route('products.destroy',$row->id)}}" 
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
