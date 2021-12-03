<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="/">Skyline Pro</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">Sky</a>
      </div>
      <ul class="sidebar-menu">
          <li><a class="nav-link" href="/dashboard"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
          @if(Auth::user()->is_admin ==1)
          <li><a class="nav-link" href="/user"><i class="fas fa-user"></i> <span>User</span></a></li>
          <li><a class="nav-link" href="/post"><i class="fas fa-newspaper"></i> <span>Post</span></a></li>
          @endif
          <li><a class="nav-link" href="/credits"><i class="fas fa-pencil-ruler"></i> <span>Credits</span></a></li>
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
          <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
            <i class="fas fa-rocket"></i> Documentation
          </a>
        </div>
    </aside>
  </div>