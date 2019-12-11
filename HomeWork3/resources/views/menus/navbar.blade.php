<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Product Control</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Product Type
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li><a href="{{route('product-type.create')}}">Create Product Type</a></li>
            <li><a href="{{route('product-type.index')}}">View Product Type</a></li>
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

          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Shape
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="{{route('shapes.create')}}">Create Shape</a></li>
              <li><a href="{{route('shapes.index')}}">View Shape</a></li>
            </ul>
          </li>

          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Zone
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="{{route('zones.create')}}">Create Zone</a></li>
              <li><a href="{{route('zones.index')}}">View Zone</a></li>
            </ul>
          </li>

          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Product
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
            <li><a href="{{route('products.create')}}">Create Product</a></li>
            <li><a href="{{route('products.index')}}">View Product</a></li>
            </ul>
          </li>




          <li class="dropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
    
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
          </li>

      </ul>
    </div>
  </nav>
