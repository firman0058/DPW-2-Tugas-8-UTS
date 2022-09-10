
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a class="brand-link">
        <img src="{{url('public')}}/Assets/img/logo nu png.jpg" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"><b>PCNU Ketapang</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{url('public')}}/Assets/img/on.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            @if(Auth::check())
                {{request()->user()->nama}}
            @endif
          </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{url('beranda')}}" class="nav-link {{request()->is('beranda') ? 'active' : ''}}">
              <i class="nav-icon fas fa-home"></i>
              <p>
                BERANDA
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="{{url('artikel')}}" class="nav-link {{request()->is('artikel') ? 'active' : ''}}">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                BERITA
                <i class="right fas fa-angle"></i>
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="{{url('komen')}}" class="nav-link {{request()->is('komen') ? 'active' : ''}}">
              <i class="nav-icon fas fa-comments"></i>
              <p>
                KOMENTAR
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="{{url('user')}}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                USER
              </p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li> -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
