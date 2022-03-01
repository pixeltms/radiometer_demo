<?php 
session_start();


if(!empty($_SESSION['customer_id'])){
$customer_id = $_SESSION['customer_id'];
}else{
	$customer_id = '101';
}

$cust_1= '';
$cust_2='';
$show_all ='';

if($customer_id == '101'){
	$cust_1 = '';
	$cust_2 ='';
}

if($customer_id == '1'){
	$cust_1 ='';
	$cust_2 ='d-none';
}

if($customer_id == '2'){
	$cust_2 ='';
	$cust_1 ='d-none';
}
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
        <a class="navbar-brand" href="/purchase_orders.php">
          <img src="./assets/img/RadiometerLogoSvg.svg" class="navbar-brand-img 
          mx-auto" alt="...">
        </a>
        <!-- Brand Mobile-->
        <a class="navbar-brand d-block d-sm-none pr-5" href="/purchase_orders.php">
          <img src="./assets/img/RadiometerLogoSvg.svg" width="100%" alt="...">
        </a>
        <!-- User (xs) -->
        <div class="navbar-user d-md-none">

          <!-- Dropdown -->
          <div class="dropdown">

            <!-- Toggle -->
            <a href="#" id="sidebarIcon" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="avatar avatar-sm avatar-online">
                <img src="./assets/img/avatars/profiles/avatar_logo.jpg" class="avatar-img rounded-circle" alt="...">
              </div>
            </a>

            <!-- Menu -->
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="sidebarIcon">
              <a href="/user_detail.php?id=<?php echo $_SESSION['customer_id'];?>" class="dropdown-item">Profile</a>
              <a href="/logout.php" class="dropdown-item">Logout</a>
            </div>

          </div>

        </div>

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidebarCollapse">

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
				  <?php if($customer_id =='101'){?>
                  <li class="nav-item">
                    <a href="./dispatch_main.php" class="nav-link ">
                      Dispatches
                    </a>
                  </li>
				  <?php }?>				  
                </ul>
              </div>
            </li>


          </ul>
		<?php if($customer_id =='101'){?>
          <!-- Divider -->
          <hr class="navbar-divider my-3">
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-4">
			  <li class="nav-item">
				<a href="./dashboard.php" class="nav-link ">
				  Dashboard 
				</a>
			  </li>
		  </ul>
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
		<?php }?>
          <!-- Push content down -->
          <div class="mt-auto"></div>

          

          
          <!-- User (md) -->
          <div class="navbar-user d-none d-md-flex" id="sidebarUser">


            <!-- Dropup -->
            <div class="dropup">

              <!-- Toggle -->
              <a href="#" id="sidebarIconCopy" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-sm avatar-online">
                  <img src="./assets/img/avatars/profiles/avatar_logo.jpg" class="avatar-img rounded-circle" alt="...">
                </div>
				
              </a>
				<?php if(!empty($_SESSION['customer_name'])){echo $_SESSION['customer_name'];}?>
              <!-- Menu -->
              <div class="dropdown-menu" aria-labelledby="sidebarIconCopy">
                <a href="/user_detail.php?id=<?php echo $_SESSION['customer_id'];?>" class="dropdown-item">Profile</a>
                <a href="/logout.php" class="dropdown-item">Logout</a>
              </div>

            </div>


          </div>
          

        </div> <!-- / .navbar-collapse -->

      </div>
    </nav>