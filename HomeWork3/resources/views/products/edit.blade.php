
        @include('layouts.app')    
        <div class="container-fluid">
                  @if(session('success'))
                    {!! session('success') !!}
                  @endif
            
                <form action="{{route('products.update', $productedit->id)}}" method="POST">
                        {{ csrf_field() }}
                        @method('PATCH')
                        <div class="form-group">
                          <label for="exampleInputEmail1">Product Name</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') ?? $productedit->name }}">
                        {{ $errors->first('name') }}
                        </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1">Code</label>
                        <input type="text" class="form-control" name="code" value="{{ old('code') ?? $productedit->code }}">
                        </div>

                        <div class="form-group col-sm-6">
                          <label>Type Name</label>
                          <select class="form-control @error('product_type_id') is-invalid @enderror" id="" name="product_type_id">
                            <option value="">-- Select Type --</option>
                            @foreach ($product_types as $data)
                                <option value="{{ $data->id }}" {{ (old("product_type_id") == $data->id ? "selected":"") }}>{{ $data->name }}</option>
                            @endforeach
                        </select>
                        </div>
            
                        <div class="form-group col-sm-6">
                          <label>Status Name</label>
                          <select class="form-control @error('product_status_id') is-invalid @enderror"  id="" name="product_status_id">
                            <option value="">-- Select Status --</option>
                            @foreach ($product_statuses as $data)
                                <option value="{{ $data->id }}" {{ (old("property_status_id") == $data->id ? "selected":"") }}>{{ $data->name }}</option>
                            @endforeach
                        </select>
                        </div>
            
                        <div class="form-group col-sm-6">
                          <label>Shape Name</label>
                          <select class="form-control @error('shape_id') is-invalid @enderror" id="" name="shape_id">
                            <option value="">-- Select Shape --</option>
                            @foreach ($shapes as $data)
                                <option value="{{ $data->id }}" {{ (old("shape_id") == $data->id ? "selected":"") }}>{{ $data->name }}</option>
                            @endforeach
                        </select>
                        </div>
            
                        <div class="form-group col-sm-6">
                          <label>Zone Name</label>
                          <select class="form-control @error('zone_id') is-invalid @enderror" id="" name="zone_id">
                            <option value="">-- Select Zone --</option>
                            @foreach ($zones as $data)
                                <option value="{{ $data->id }}" {{ (old("zone_id") == $data->id ? "selected":"") }}>{{ $data->name }}</option>
                            @endforeach
                        </select>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Rent Price</label>
                        <input type="text" class="form-control" name="rent_price" value="{{ old('rent_price') ?? $productedit->rent_price }}">
                        {{ $errors->first('rent_price') }}
                        </div>


                        <div class="form-group">
                          <label for="exampleInputEmail1">Sale Price</label>
                        <input type="text" class="form-control" name="sale_price" value="{{ old('sale_price') ?? $productedit->sale_price }}">
                        </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1">List Price</label>
                        <input type="text" class="form-control" name="list_price" value="{{ old('list_price') ?? $productedit->list_price }}">
                        </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1">Sold Price</label>
                        <input type="text" class="form-control" name="sold_price" value="{{ old('sold_price') ?? $productedit->sold_price }}">
                        </div>



                        <div class="form-group">
                            <label for="exampleInputEmail1">Created_By</label>
                          <input type="text" class="form-control" name="created_by" value="{{ old('created_by') ?? $productedit->created_by }}">
                          {{ $errors->first('created_by') }} 
                        </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1">Updated By</label>
                        <input type="text" class="form-control" name="updated_by" value="{{ old('created_by') ?? $productedit->updated_by}}">
                        {{ $errors->first('updated_by') }}
                      </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                      </form>
            
            </div>
