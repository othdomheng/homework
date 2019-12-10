
        @include('layouts.app')    
        <div class="container-fluid">
                  @if(session('success'))
                    {!! session('success') !!}
                  @endif
            
                <form action="{{route('zones.update', $zoneedit->id)}}" method="POST">
                        {{ csrf_field() }}
                        @method('PUT')
                        <div class="form-group">
                          <label for="exampleInputEmail1">Product Zone Name</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') ?? $zoneedit->name }}">
                        {{ $errors->first('name') }}
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Created_By</label>
                          <input type="text" class="form-control" name="created_by" value="{{ old('created_by') ?? $zoneedit->created_by }}">
                          {{ $errors->first('created_by') }}
                        </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1">Updated By</label>
                        <input type="text" class="form-control" name="updated_by" value="{{ old('created_by') ?? $zoneedit->updated_by}}">
                        {{ $errors->first('updated_by') }}
                      </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                      </form>
            
            </div>
