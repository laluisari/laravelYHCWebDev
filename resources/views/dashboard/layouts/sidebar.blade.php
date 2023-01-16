<div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                <span data-feather="home" class="align-text-bottom"></span>
                Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('dashboard/users') ? 'active' : '' }}" href="/dashboard/users">
                <span data-feather="users" class="align-text-bottom"></span>
                users 
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('dashboard/project') ? 'active' : '' }}" href="/dashboard/project">
                <span data-feather="users" class="align-text-bottom"></span>
                Project Monitoring
              </a>
            </li>
          
          </ul>
        </div>
      </nav>
      
    </div>
  </div>