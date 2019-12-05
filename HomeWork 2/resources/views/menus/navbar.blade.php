<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Product Control</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Product Category
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{route('product-categories.create')}}">Create Product Category</a></li>
            <li><a href="{{route('product-categories.index')}}">View Product Category</a></li>
          </ul>
        </li>

        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Product Status
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="{{route('product-statuses.create')}}">Create Product Status</a></li>
              <li><a href="{{route('product-statuses.index')}}">View Product Status</a></li>
            </ul>
          </li>
        
      </ul>
    </div>
  </nav>
