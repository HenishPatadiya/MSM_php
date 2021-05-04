<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-dark-secondary elevation-4">
    <!-- Brand Logo -->
    <span class="brand-link">
      <img src="dist/img/mobilestore.png" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light" style="font-family: Aharoni;">Mobile Store</span>
    </span>
 <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">Welcome, <?php echo $_SESSION['UN']; ?></a>
        </div>
      </div>
<!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="DASHBOARD" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
            <!-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul> -->
          </li>
         
          <li class="nav-header">Documents</li>
          <li class="nav-item">
            <a href="Employees_List" class="nav-link">
              <i class="nav-icon fas fa-list-ol"></i>
              <p>Employees List</p>
            </a>
          </li>
          <?php if(isset($_SESSION['Access'])){ ?>
            <li class="nav-item">
              <a href="Add_Employee" class="nav-link">
                <i class="nav-icon far fa-address-card"></i>
                <p>Add Employees</p>
              </a>
            </li>
          <?php } ?>
          <li class="nav-item">
            <a href="All_Products" class="nav-link">
              <i class="nav-icon far fa-list-alt"></i>
              <p>All Products List</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="Add_Product" class="nav-link">
              <i class="nav-icon fas fa-cart-plus"></i>
              <p>Add New Product</p>
            </a>
          </li>
          <li class="nav-header">Action</li>
           <!-- <li class="nav-item">
            <a class="nav-link" href="GenerateBill.php">
              <i class="nav-icon fas fa-file-invoice"></i>
              <p>Generate Bill</p>
            </a>
          </li> -->
          <?php if(isset($_SESSION['Access'])){ ?>
          <li class="nav-item">
            <a class="nav-link" href="Add_User">
              <i class="nav-icon fas fa-user-plus"></i>
              <p>Add User</p>
            </a>
          </li>
          <?php } ?>
          <li class="nav-item">
            <a class="nav-link" href="con_Logout.php" onclick="return confirm('Are you sure want to Logout ?');">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>