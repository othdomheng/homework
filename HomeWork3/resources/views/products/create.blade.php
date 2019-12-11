@include('layouts.app')
<div class="container">
    <header class="panel-heading">
        <h1 class="text-center"><i class='fa fa-female'></i> Add Product</h1>
        </header>
    <form action="{{route('products.store')}}" method="POST">
        @csrf
            <div class="form-group col-sm-6">
              <label>Product Name</label>
              <input type="text" class="form-control" name="name">
              {{ $errors->first('name') }}
            </div>

            <div class="form-group col-sm-6">
                <label>Code</label>
                <input type="text" class="form-control" name="code">
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

            <div class="form-group col-sm-6">
              <label>Rent Price</label>
              <input type="text" class="form-control" name="rent_price">
              {{ $errors->first('rent_price') }}
            </div>

            <div class="form-group col-sm-6">
              <label>Sale Price</label>
              <input type="text" class="form-control" name="sale_price">
              {{ $errors->first('sale_price') }}
            </div>

            <div class="form-group col-sm-6">
              <label>List Price</label>
              <input type="text" class="form-control" name="list_price">
              {{ $errors->first('list_price') }}
            </div>

            
            <div class="form-group col-sm-6">
              <label>Sold Price</label>
              <input type="text" class="form-control" name="sold_price">
              {{ $errors->first('sold_price') }}
            </div>

            <div class="form-group col-sm-6">
                <label>Created By</label>
                <input type="text" class="form-control" name="created_by">
              </div>

            <div class="form-group col-sm-6">
                <label>Update By</label>
                <input type="text" class="form-control" name="updated_by">
            </div>

            <button type="submit" class="btn btn-primary">Add</button>
      </form>
</div> 