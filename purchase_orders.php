<?php 
session_start();


if(!empty($_SESSION['customer_id'])){
$customer_id = $_SESSION['customer_id'];
}else{
	$customer_id = '101';
}
//echo $customer_id;
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

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Radiometere - Purchase Order" />

    <!-- Libs CSS -->
    <link rel="stylesheet" href="./assets/fonts/feather/feather.css" />
    <link rel="stylesheet" href="./assets/libs/flatpickr/dist/flatpickr.min.css" />
    <link rel="stylesheet" href="./assets/libs/quill/dist/quill.core.css" />
    <link rel="stylesheet" href="./assets/libs/highlightjs/styles/vs2015.css" />

    <!-- Map -->
    <link href="https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css" rel="stylesheet" />

    <!-- Theme CSS -->
    
    <link rel="stylesheet" href="./assets/css/theme.min.css">
      
    <!-- Title -->
    <title>Purchase Orders</title>

  </head>
  <body>    
    
	<?php include('navigation.php') ?>
	
    <!-- MAIN CONTENT
    ================================================== -->
    <div class="main-content">

      

      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-12">

            <!-- Header -->
            <div class="header">
              <div class="header-body">
                <div class="row align-items-center">
                  <div class="col">

                    <!-- Pretitle -->
                    <h6 class="header-pretitle">
                      Overview
                    </h6>

                    <!-- Title -->
                    <h1 class="header-title">
                      Purchase Orders
                    </h1>

                  </div>

                </div> <!-- / .row -->

              </div>
            </div>

            <!-- Card -->
            <div class="card" data-list='{"valueNames": ["orders-order", "orders-customer", "orders-date", "orders-total", "orders-status", "orders-method"]}'>
              <div class="card-header">

                <!-- Search -->
                <form>
                  <div class="input-group input-group-flush">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fe fe-search"></i>
                      </span>
                    </div>
                    <input class="form-control list-search" type="search" placeholder="Search">
                  </div>
                </form>

              </div>
              <div class="table-responsive">
                <table class="table table-sm table-nowrap card-table">
                  <thead>
                    <tr>

                      <th>
                        <a href="#" class="text-muted list-sort" data-sort="orders-order">
                          Order Number
                        </a>
                      </th>
                      <th>
                        <a href="#" class="text-muted list-sort" data-sort="orders-customer">
                          Customer
                        </a>
                      </th>
                      <th>
                        <a href="#" class="text-muted list-sort" data-sort="orders-date">
                          Order Date
                        </a>
                      </th>
                      <th>
                        <a href="#" class="text-muted list-sort" data-sort="orders-total">
                          Order Total (INR)
                        </a>
                      </th>
                      <th>
                        <a href="#" class="text-muted list-sort" data-sort="orders-status">
                          Status
                        </a>
                      </th>
                      <th>
                        
                         Actions
                        
                      </th>
                    </tr>
                  </thead>
                  <tbody class="list">
                    <tr class="<?php echo  $cust_1;?> ">

                      <td class="orders-order">
                        <a href="/po_detail.php?id=6520">PO-72</a>
                      </td>
                      <td class="orders-customer">
                        Customer 1
                      </td>
                      <td class="orders-date">

                        <!-- Time -->
                        <time datetime="2021-09-12">09/12/2021</time>

                      </td>
                      <td class="orders-total">
                        Rs. 4748.3
                      </td>
                      <td class="orders-status">

                        <!-- Badge -->
                        <div class="badge badge-soft-success">
                          Delivered
                        </div>

                      </td>

                      <td>

                        <!-- Dropdown -->
                        <div class="dropdown">
                          <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fe fe-more-vertical"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right">
                            <a href="#!" class="dropdown-item">
                              Download PO
                            </a>
                            <a href="#!" class="dropdown-item">
                              Send PO PDF to Customer
                            </a>
                          </div>
                        </div>

                      </td>
                    </tr>
                    <tr class="<?php echo $cust_1;?> ">

                      <td class="orders-order">
                        <a href="/po_detail.php?id=6521">PO-73</a>
                      </td>
                      <td class="orders-customer">
                       Customer 1
                      </td>
                      <td class="orders-date">

                        <!-- Time -->
                        <time datetime="2021-12-09">09/12/2021</time>

                      </td>
                      <td class="orders-total">
                        Rs. 37281.23
                      </td>
                      <td class="orders-status">

                        <!-- Badge -->
                        <div class="badge badge-soft-secondary">
                          Shipped
                        </div>

                      </td>

                      <td>

                        <!-- Dropdown -->
                        <div class="dropdown">
                          <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fe fe-more-vertical"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right">
                            <a href="#!" class="dropdown-item">
                              Download PO
                            </a>
                            <a href="#!" class="dropdown-item">
                              Send PO PDF to Customer
                            </a>
                          </div>
                        </div>

                      </td>
                    </tr>
                    <tr class="<?php echo $show_all . $cust_1.$cust_2;?> ">

                      <td class="orders-order">
                        <a href="/po_detail.php?id=6522">PO-74</a>
                      </td>
                      <td class="orders-customer">
                        Customer 6
                      </td>
                      <td class="orders-date">

                        <!-- Time -->
                        <time datetime="2021-12-31">31/12/2021</time>

                      </td>
                      <td class="orders-total">
                        Rs 3225.50
                      </td>
                      <td class="orders-sratus">

                        <!-- Badge -->
                        <div class="badge badge-soft-warning">
                          <a href="/so_detail.php?id=6522">SO Created</a>
                        </div>

                      </td>

                      <td>

                        <!-- Dropdown -->
                        <div class="dropdown">
                          <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fe fe-more-vertical"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right">
                            <a href="#!" class="dropdown-item">
                              Download PO
                            </a>
                            <a href="#!" class="dropdown-item">
                              Send PO PDF to Customer
                            </a>
                          </div>
                        </div>

                      </td>
                    </tr>
                    <tr class="<?php echo $cust_2;?> ">

                      <td class="orders-order">
                        <a href="/po_detail.php?id=6523">PO-75</a>
                      </td>
                      <td class="orders-customer">
                        Customer 2
                      </td>
                      <td class="orders-date">

                        <!-- Time -->
                        <time datetime="2022-01-02">02/01/2022</time>

                      </td>
                      <td class="orders-total">
                        Rs. 28281.99
                      </td>
                      <td class="orders-status">

                        <!-- Badge -->
                        <div class="badge badge-soft-info">
                          DC created
                        </div>

                      </td>

                      <td>

                        <!-- Dropdown -->
                        <div class="dropdown">
                          <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fe fe-more-vertical"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right">
                            <a href="#!" class="dropdown-item">
                              Download PO
                            </a>
                            <a href="#!" class="dropdown-item">
                              Send PO PDF to Customer
                            </a>
                          </div>
                        </div>

                      </td>
                    </tr>
                    <tr class="<?php echo $show_all . $cust_1.$cust_2;?> ">

                      <td class="orders-order">
                        <a href="/po_detail.php?id=6524">PO-76</a>
                      </td>
                      <td class="orders-customer">
                        Customer 5
                      </td>
                      <td class="orders-date">

                        <!-- Time -->
                        <time datetime="2022-01-13">13/01/2022</time>

                      </td>
                      <td class="orders-total">
                        Rs 43431.99
                      </td>
                      <td class="orders-status">

                        <!-- Badge -->
                        <div class="badge badge-soft-success">
                          Delivered
                        </div>

                      </td>

                      <td>

                        <!-- Dropdown -->
                        <div class="dropdown">
                          <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fe fe-more-vertical"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right">
                            <a href="#!" class="dropdown-item">
                              Download PO
                            </a>
                            <a href="#!" class="dropdown-item">
                              Send PO PDF to Customer
                            </a>
                          </div>
                        </div>

                      </td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>

          </div>
        </div> <!-- / .row -->
      </div>

    </div> <!-- / .main-content -->

    <!-- JAVASCRIPT
    ================================================== -->
    <!-- Libs JS -->
    <script src="./assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/libs/@shopify/draggable/lib/es5/draggable.bundle.legacy.js"></script>
    <script src="./assets/libs/autosize/dist/autosize.min.js"></script>
    <script src="./assets/libs/chart.js/dist/Chart.min.js"></script>
    <script src="./assets/libs/dropzone/dist/min/dropzone.min.js"></script>
    <script src="./assets/libs/flatpickr/dist/flatpickr.min.js"></script>
    <script src="./assets/libs/highlightjs/highlight.pack.min.js"></script>
    <script src="./assets/libs/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
    <script src="./assets/libs/list.js/dist/list.min.js"></script>
    <script src="./assets/libs/quill/dist/quill.min.js"></script>
    <script src="./assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="./assets/libs/chart.js/Chart.extension.js"></script>

    <!-- Map -->
    <script src='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>

    <!-- Theme JS -->
    <script src="./assets/js/theme.min.js"></script>
    <script src="./assets/js/dashkit.min.js"></script>


  </body>
</html>
