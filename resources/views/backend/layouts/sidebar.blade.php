<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link {{ Request::segment(1) === 'admin' ? 'bg-primary text-light' : '' }}" href="{{route('dashboard')}}">
          <i class="bi bi-grid text-light"></i>
          <span>Dashboard</span>
        </a>
      </li>


        <li class="nav-item">
          <a class="nav-link {{ Request::segment(2) === 'blog' ? 'bg-primary text-light' : '' }}" href="{{ route('admin.blog') }}">
            <i class="bi bi-grid text-light"></i>
            <span>Blog</span>
          </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ Request::segment(2) === 'product' ? 'bg-primary text-light' : '' }}" href="{{ route('admin.product') }}">
              <i class="bi bi-grid text-light"></i>
              <span>Products</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ Request::segment(2) === 'distributor' ? 'bg-primary text-light' : '' }}" href="{{ route('admin.distributor') }}">
              <i class="bi bi-grid text-light"></i>
              <span>distributors</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ Request::segment(2) === 'testimony' ? 'bg-primary text-light' : '' }}" href="{{ route('admin.testimony') }}">
              <i class="bi bi-grid text-light"></i>
              <span>Testimonials</span>
            </a>
          </li>


        </ul>

  </aside><!-- End Sidebar-->


