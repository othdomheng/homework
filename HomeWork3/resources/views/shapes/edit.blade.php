
        @include('layouts.app')    
        <div class="container-fluid">
                  @if(session('success'))
                    {!! session('success') !!}
                  @endif
            
                <form action="{{route('shapes.update', $shapeedit->id)}}" method="POST">
                        {{ csrf_field() }}
                        @method('PUT')
                        <div class="form-group">
                          <label for="exampleInputEmail1">Product Status Name</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') ?? $shapeedit->name }}">
                        {{ $errors->first('name') }}
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Created_By</label>
                          <input type="text" class="form-control" name="created_by" value="{{ old('created_by') ?? $shapeedit->created_by }}">
                          {{ $errors->first('name') }}
                        </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1">Updated By</label>
                        <input type="text" class="form-control" name="updated_by" value="{{ old('created_by') ?? $shapeedit->updated_by}}">
                        {{ $errors->first('name') }}
                      </div>
                        <button type="submit" class="btn btn-primary">Add</button>
                      </form>
            
            </div>
