<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('storage/logos/2021090809144449287.png') }}" alt="Company Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                <a href="{{ route('company.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-tree"></i>
                  <p>
                    Companies
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('employee.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Employees
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('todo.list') }}" class="nav-link">
                  <i class="nav-icon fas fa-columns"></i>
                  <p>
                    Todos
                  </p>
                </a>
              </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
