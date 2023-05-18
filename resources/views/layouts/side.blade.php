  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div  class="brand-link">
      <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">manage your project</span>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">AliabdO</a>
        </div>
      </div>
      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Users
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('dashboard.users.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>all User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('dashboard.users.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>create User</p>
                </a>
              </li>
            </ul>
          </li>
                    <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Tasks
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('dashboard.tasks.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>all Tasks</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('dashboard.tasks.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>create Tasks</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Clients
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('dashboard.clients.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>all Clients</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('dashboard.clients.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>create Clients</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Projects
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('dashboard.projects.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>all Projects</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('dashboard.projects.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>create Projects</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>