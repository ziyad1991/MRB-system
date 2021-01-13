<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">MRB System</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['name']; ?></a>
                          <p><a href="./logout.php" class="d-block">logout</a></p>

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



<?php if($_SESSION['role'] == 'admin'){

echo   "<li class='nav-item menu-open'>
            <a href='./index.php' class='nav-link active'>
              <i class='nav-icon fas fa-tachometer-alt'></i>
              <p>
                Dashboard
                <i class='right fas fa-angle-left'></i>
              </p>
            </a>
          </li>
           




  <li class='nav-item'>
                <a href='rooms.php' class='nav-link'>
                  <i class='fas fa-door-open nav-icon'></i>
                  <p>Rooms</p>
                </a>
              </li>

 <li class='nav-item'>
                <a href='booking.php' class='nav-link'>
                  <i class='far fa-clock nav-icon'></i>
                  <p>Booking</p>
                </a>
              </li>
 <li class='nav-item'>
                <a href='users.php' class='nav-link'>
                  <i class='fas fa-users nav-icon'></i>
                  <p>Users</p>
                </a>
              </li>";



}else {



echo "<li class='nav-item'>
                <a href='clientbooking.php' class='nav-link'>
                  <i class='far fa-clock nav-icon'></i>
                  <p>Booking</p>
                </a>
              </li>";



}

?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>