<?php      
/*
session_start();     
if($_SESSION['logged_in']==1) {         
	//session is set         
	header('Location: index.php');     
} else{         //session is not set         
header("Location: login.php");     
}  
*/
 ?>
    <!-- NAVIGATION
    ================================================== -->
    
    
    <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light" id="sidebar">
      <div class="container-fluid">

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Brand -->
        <a class="navbar-brand" href="./index.html">
          <img src="./assets/img/logo.svg" class="navbar-brand-img 
          mx-auto" alt="...">
        </a>

        <!-- User (xs) -->
        <div class="navbar-user d-md-none">

          <!-- Dropdown -->
          <div class="dropdown">

            <!-- Toggle -->
            <a href="#" id="sidebarIcon" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="avatar avatar-sm avatar-online">
                <img src="./assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
              </div>
            </a>

            <!-- Menu -->
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="sidebarIcon">
              <a href="./profile-posts.html" class="dropdown-item">Profile</a>
              <a href="./account-general.html" class="dropdown-item">Settings</a>
              <hr class="dropdown-divider">
              <a href="./sign-in.html" class="dropdown-item">Logout</a>
            </div>

          </div>

        </div>

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidebarCollapse">

          <!-- Form -->
          <form class="mt-4 mb-3 d-md-none">
            <div class="input-group input-group-rounded input-group-merge">
              <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <span class="fe fe-search"></span>
                </div>
              </div>
            </div>
          </form>

          <!-- Navigation -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#sidebarPages" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarPages">
                <i class="fe fe-file"></i> Order Management
              </a>
              <div class="collapse show" id="sidebarPages">
                <ul class="nav nav-sm flex-column">
					<li class="nav-item">
					  <a href="./purchase_orders.php" class="nav-link ">
						Purchase Order
					  </a>
					</li>
					<li class="nav-item">
					  <a href="./sales_orders.php" class="nav-link ">
						Sales Order
					  </a>
					</li>

                  <li class="nav-item">
                    <a href="./delivery_challans.php" class="nav-link ">
                      Delivery Challan
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="./invoices.php" class="nav-link ">
                      Invoices
                    </a>
                  </li>
				  
                  <li class="nav-item">
                    <a href="./dispatch_main.php" class="nav-link ">
                      Dispatches
                    </a>
                  </li>				  
                </ul>
              </div>
            </li>


          </ul>

          <!-- Divider -->
          <hr class="navbar-divider my-3">

          <!-- Heading -->
          <h6 class="navbar-heading">
            CMS
          </h6>

          <!-- Navigation -->
          <ul class="navbar-nav mb-md-4">
			  <li class="nav-item">
				<a href="./products.php" class="nav-link ">
				  Products 
				</a>
			  </li>
			  <li class="nav-item">
				<a href="./warehouses.php" class="nav-link ">
				  Warehouses
				</a>
			  </li>
			  <li class="nav-item">
				<a href="./delivery_partners.php" class="nav-link ">
				  Delivery Partners
				</a>
			  </li>			  
			  <li class="nav-item">
				<a href="./users.php" class="nav-link ">
				  Users
				</a>
			  </li>

          </ul>

          <!-- Push content down -->
          <div class="mt-auto"></div>

          

          
          <!-- User (md) -->
          <div class="navbar-user d-none d-md-flex" id="sidebarUser">

            <!-- Icon -->
            <a href="#sidebarModalActivity" class="navbar-user-link" data-toggle="modal">
              <span class="icon">
                <i class="fe fe-bell"></i>
              </span>
            </a>

            <!-- Dropup -->
            <div class="dropup">

              <!-- Toggle -->
              <a href="#" id="sidebarIconCopy" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-sm avatar-online">
                  <img src="./assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                </div>
              </a>

              <!-- Menu -->
              <div class="dropdown-menu" aria-labelledby="sidebarIconCopy">
                <a href="./profile.php" class="dropdown-item">Profile</a>
                <a href="./logout.php" class="dropdown-item">Logout</a>
              </div>

            </div>

            <!-- Icon -->
            <a href="#sidebarModalSearch" class="navbar-user-link" data-toggle="modal">
              <span class="icon">
                <i class="fe fe-search"></i>
              </span>
            </a>

          </div>
          

        </div> <!-- / .navbar-collapse -->

      </div>
    </nav>