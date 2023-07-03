<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
    <div class="container my-3">
      <a class="navbar-brand text-light" href="{{url('/')}}">Bookstore</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav me-auto mx-auto">
          <li class="nav-item">
            <a class="nav-link active text-light" href="#">Categories
              <span class="visually-hidden">(current)</span>
            </a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" >Products</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{url('create')}}">Create</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">View all products</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Edit</a>
              <div class="dropdown-divider"></div>

            </div>
          </li>


          <li class="nav-item">
            <a class="nav-link text-light" href="#">Brand</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="{{url('cart')}}">Cart
                @if (session('items'))
                    {{count(session('items'))}}
                @endif
            </a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" >User</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Register</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Log In</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Log Out</a>
              <div class="dropdown-divider"></div>

            </div>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-sm-2" type="search" placeholder="Search">
          <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>



