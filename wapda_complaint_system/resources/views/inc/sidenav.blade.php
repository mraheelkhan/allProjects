<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="https://www.thewrap.com/wp-content/uploads/2015/11/Donald-Trump.jpg" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">{{ Auth::user()->name }}</p>
                  <div>
                    <small class="designation text-muted">Manager</small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
              <button class="btn btn-success btn-block">New Project
                <i class="mdi mdi-plus"></i>
              </button>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('CityList')}}" >
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Cities</span>
              <i class="menu-arrow"></i>
            </a>
         
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('DivisionList')}}">
              <i class="menu-icon mdi mdi-backup-restore"></i>
              <span class="menu-title">Divisions</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('ComplaintList')}}">
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">Complaints</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('SubDivisionList')}}">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Sub Divisions</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/icons/font-awesome.html">
              <i class="menu-icon mdi mdi-sticker"></i>
              <span class="menu-title">Icons</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-restart"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="../../pages/samples/blank-page.html"> Blank Page </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../../pages/samples/login.html"> Login </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../../pages/samples/register.html"> Register </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../../pages/samples/error-404.html"> 404 </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../../pages/samples/error-500.html"> 500 </a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>