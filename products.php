<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Radiometere - Sales Order" />

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
    <title>Products</title>

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
                      Products
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
                          Product ID
                        </a>
                      </th>
                      <th>
                        <a href="#" class="text-muted list-sort" data-sort="orders-customer">
                          SKU
                        </a>
                      </th>
                      <th>
                        <a href="#" class="text-muted list-sort" data-sort="orders-date">
                          Product Name
                        </a>
                      </th>
                      <th>
                        <a href="#" class="text-muted list-sort" data-sort="orders-total">
                          Price Per Unit (INR)
                        </a>
                      </th>

                    </tr>
                  </thead>
                  <tbody class="list">
                    <tr>

                      <td class="orders-order">
                        <a href="/product_detail.php?id=1">1</a>
                      </td>
                      <td class="orders-customer">
                        SKU3839489
                      </td>

                      <td class="orders-total">
                        ITEM-1
                      </td>
                      <td class="orders-price">

                        <!-- Time -->
                        34.56

                      </td>


                    </tr>
                    <tr>

                      <td class="orders-order">
                        <a href="/product_detail.php?id=2">2</a>
                      </td>
                      <td class="orders-customer">
                        SKU67332434
                      </td>

                      <td class="orders-total">
                        ITEM-2
                      </td>
                      <td class="orders-price">

                        <!-- Time -->
                        4893.45

                      </td>


                    </tr>
                    <tr>

                      <td class="orders-order">
                        <a href="/product_detail.php?id=3">3</a>
                      </td>
                      <td class="orders-customer">
                        SKU34454335
                      </td>

                      <td class="orders-total">
                        ITEM-3
                      </td>
                      <td class="orders-price">

                        <!-- Time -->
                        234.50

                      </td>


                    </tr>
                    <tr>

                      <td class="orders-order">
                        <a href="/product_detail.php?id=4">4</a>
                      </td>
                      <td class="orders-customer">
                        SKU56546
                      </td>

                      <td class="orders-total">
                        ITEM-4
                      </td>
                      <td class="orders-price">

                        <!-- Time -->
                        565.00

                      </td>


                    </tr>

                    <tr>

                      <td class="orders-order">
                        <a href="/product_detail.php?id=5">5</a>
                      </td>
                      <td class="orders-customer">
                        SKU723343
                      </td>

                      <td class="orders-total">
                        ITEM-5
                      </td>
                      <td class="orders-price">

                        <!-- Time -->
                        3000.00

                      </td>


                    </tr>
                    <tr>

                      <td class="orders-order">
                        <a href="/product_detail.php?id=6">6</a>
                      </td>
                      <td class="orders-customer">
                        SKU232334
                      </td>

                      <td class="orders-total">
                        ITEM-6
                      </td>
                      <td class="orders-price">

                        <!-- Time -->
                        10000.00

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
