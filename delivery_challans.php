<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Radiometere - Delivery Challan" />

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
    <title>Delivery Challans</title>

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
                      Delivery Challans
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
                          DC Number
                        </a>
                      </th>
                      <th>
                        <a href="#" class="text-muted list-sort" data-sort="orders-customer">
                          Customer
                        </a>
                      </th>
                      <th>
                        <a href="#" class="text-muted list-sort" data-sort="orders-date">
                          DC Date
                        </a>
                      </th>

                      <th>
                        <a href="#" class="text-muted list-sort" data-sort="orders-status">
                          Status
                        </a>
                      </th>

                    </tr>
                  </thead>
                  <tbody class="list">
                    <tr>

                      <td class="orders-order">
                        <a href="/dc_detail.php?id=6520">DC-6520</a>
                      </td>
                      <td class="orders-customer">
                        Customer 1
                      </td>
                      <td class="orders-date">

                        <!-- Time -->
                        <time datetime="2021-09-12">09/12/2021</time>

                      </td>

                      <td class="orders-status">

                        <!-- Badge -->
                        <div class="badge badge-soft-success">
                          Delivered
                        </div>

                      </td>


                    </tr>
                    <tr>

                      <td class="orders-order">
                        <a href="/dc_detail.php?id=6521">DC-6521</a>
                      </td>
                      <td class="orders-customer">
                       Customer 1
                      </td>
                      <td class="orders-date">

                        <!-- Time -->
                        <time datetime="2021-12-09">09/12/2021</time>

                      </td>

                      <td class="orders-status">

                        <!-- Badge -->
                        <div class="badge badge-soft-success">
                          Delivered
                        </div>

                      </td>


                    </tr>
                    <tr>

                      <td class="orders-order">
                        <a href="/dc_detail.php?id=6522">DC-6522</a>
                      </td>
                      <td class="orders-customer">
                        Customer 6
                      </td>
                      <td class="orders-date">

                        <!-- Time -->
                        <time datetime="2021-12-31">31/12/2021</time>

                      </td>

                      <td class="orders-sratus">

                        <!-- Badge -->
                        <div class="badge badge-soft-warning">
                          Processing
                        </div>

                      </td>


                    </tr>
                    <tr>

                      <td class="orders-order">
                        <a href="/dc_detail.php?id=6523">DC-6523</a>
                      </td>
                      <td class="orders-customer">
                        Customer 3
                      </td>
                      <td class="orders-date">

                        <!-- Time -->
                        <time datetime="2022-01-02">02/01/2022</time>

                      </td>

                      <td class="orders-status">

                        <!-- Badge -->
                        <div class="badge badge-soft-danger">
                          Cancelled
                        </div>

                      </td>


                    </tr>
                    <tr>

                      <td class="orders-order">
                        <a href="/dc_detail.php?id=6524">DC-6524</a>
                      </td>
                      <td class="orders-customer">
                        Customer 5
                      </td>
                      <td class="orders-date">

                        <!-- Time -->
                        <time datetime="2022-01-13">13/01/2022</time>

                      </td>

                      <td class="orders-status">

                        <!-- Badge -->
                        <div class="badge badge-soft-secondary">
                          Shipped
                        </div>
						<a href="https://trackingcompany.com/8434394890">Track</a>						
                      </td>

                    </tr>
                    <tr>

                      <td class="orders-order">
                        <a href="/dc_detail.php?id=6525">DC-6525</a>
                      </td>
                      <td class="orders-customer">
                        Customer 3
                      </td>
                      <td class="orders-date">

                        <!-- Time -->
                        <time datetime="2022-01-19">19/01/2022</time>

                      </td>

                      <td class="orders-status">

                        <!-- Badge -->
                        <div class="badge badge-soft-secondary">
                          Shipped
                        </div>
						<a href="https://trackingcompany.com/8434394890">Track</a>		
                      </td>


                    </tr>
                    <tr>

                      <td class="orders-order">
                        <a href="/dc_detail.php?id=6526">DC-6526</a>
                      </td>
                      <td class="orders-customer">
                        Customer 4
                      </td>
                      <td class="orders-date">

                        <!-- Time -->
                        <time datetime="2022-01-23">23/01/2022</time>

                      </td>

                      <td class="orders-status">

                        <!-- Badge -->
                        <div class="badge badge-soft-warning">
                          Processing
                        </div>

                      </td>


                    </tr>
                    <tr>

                      <td class="orders-order">
                        <a href="/dc_detail.php?id=6527">DC-6527</a>
                      </td>
                      <td class="orders-customer">
                        Customer 2
                      </td>
                      <td class="orders-date">

                        <!-- Time -->
                        <time datetime="2022-02-05">05/02/2022</time>

                      </td>

                      <td class="orders-sratus">

                        <!-- Badge -->
                        <div class="badge badge-soft-secondary">
                          Shipped
                        </div>
						<a href="https://trackingcompany.com/8434394890">Track</a>		
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
