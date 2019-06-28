<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('dashboard/dist/img/users.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li id="dashboard">
          <a href="{{ route('home') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview" id="profile">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>Profile</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li id="updateprofile"><a href="{{ route('getProfile') }}"><i class="fa fa-user"></i> Update Profile</a></li>
            <li id="editpass"><a href="{{ route('editpass') }}"><i class="fa fa-key"></i> Change Password</a></li>
            
          </ul>
        </li>
        <li id="people"><a href="{{ route('people') }}"><i class="fa fa-users"></i> All People</a></li>
        <li id="cri"><a href="{{ route('criminals') }}" ><i class="fa fa-balance-scale"></i> Criminals</a></li>
        <li id="fire"><a href="{{ route('fires') }}"><i class="fa fa-fire-extinguisher"></i> Fire Accident</a></li>
        <li id="road"><a href="{{ route('road') }}"><i class="fa fa-road"></i> Road accident</a></li>
        <li class="treeview" id="reports">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Report</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li id="reportPopulation"><a href="{{ route('reports.populations') }}"><i class="fa fa-file"></i> People's report</a></li>
            <li id="reportFires"><a href="{{ route('reports.fires') }}"><i class="fa fa-fire-extinguisher"></i> Fire's report</a></li>
            <li id="reportRoads"><a href="{{ route('reports.roads') }}"><i class="fa fa-road"></i> road's report</a></li>
            <li id="reportCriminals"><a href="{{ route('reports.criminals') }}"><i class="fa fa-balance-scale"></i> Criminals's report</a></li>
          </ul>
        </li>

      </ul>
    
    </section>
    <!-- /.sidebar -->
  </aside>