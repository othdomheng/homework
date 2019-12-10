@include('layouts.app')
<div class="container">
    <form action="{{route('product-statuses.store')}}" method="POST">
        @csrf
            <div class="form-group">
              <label>Product Status Name</label>
              <input type="text" class="form-control" name="name">
            </div>

            <div class="form-group">
                <label>Created By</label>
                <input type="text" class="form-control" name="created_by">
              </div>

            <div class="form-group">
                <label>Update By</label>
                <input type="text" class="form-control" name="updated_by">
            </div>

            <button type="submit" class="btn btn-primary">Add</button>
      </form>
</div> 