<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc." />

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
    <title>Dashkit</title>

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
                      Orders
                    </h1>

                  </div>

                </div> <!-- / .row -->
                <div class="row align-items-center">
                  <div class="col">

                    <!-- Nav -->
                    <ul class="nav nav-tabs nav-overflow header-tabs">
                      <li class="nav-item">
                        <a href="#!" class="nav-link active">
                          All <span class="badge badge-pill badge-soft-secondary">823</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#!" class="nav-link">
                          Pending <span class="badge badge-pill badge-soft-secondary">24</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#!" class="nav-link">
                          Processing <span class="badge badge-pill badge-soft-secondary">3</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#!" class="nav-link">
                          Refunded <span class="badge badge-pill badge-soft-secondary">71</span>
                        </a>
                      </li>
                    </ul>

                  </div>
                </div>
              </div>
            </div>

            <!-- Card -->
            <div class="card" data-list='{"valueNames": ["orders-order", "orders-product", "orders-date", "orders-total", "orders-status", "orders-method"]}'>
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

                        <!-- Checkbox -->
                        <div class="custom-control custom-checkbox table-checkbox">
                          <input type="checkbox" class="list-checkbox-all custom-control-input" name="ordersSelect" id="ordersSelectAll">
                          <label class="custom-control-label" for="ordersSelectAll">&nbsp;</label>
                        </div>

                      </th>
                      <th>
                        <a href="#" class="text-muted list-sort" data-sort="orders-order">
                          Order
                        </a>
                      </th>
                      <th>
                        <a href="#" class="text-muted list-sort" data-sort="orders-product">
                          Product
                        </a>
                      </th>
                      <th>
                        <a href="#" class="text-muted list-sort" data-sort="orders-date">
                          Date
                        </a>
                      </th>
                      <th>
                        <a href="#" class="text-muted list-sort" data-sort="orders-total">
                          Total
                        </a>
                      </th>
                      <th>
                        <a href="#" class="text-muted list-sort" data-sort="orders-status">
                          Status
                        </a>
                      </th>
                      <th colspan="2">
                        <a href="#" class="text-muted list-sort" data-sort="orders-method">
                          Payment method
                        </a>
                      </th>
                    </tr>
                  </thead>
                  <tbody class="list">
                    <tr>
                      <td>

                        <!-- Checkbox -->
                        <div class="custom-control custom-checkbox table-checkbox">
                          <input type="checkbox" class="list-checkbox custom-control-input" name="ordersSelect" id="ordersSelectOne">
                          <label class="custom-control-label" for="ordersSelectOne">&nbsp;</label>
                        </div>

                      </td>
                      <td class="orders-order">
                        #6520
                      </td>
                      <td class="orders-product">
                        5' x 3' Wall Poster
                      </td>
                      <td class="orders-date">

                        <!-- Time -->
                        <time datetime="2018-07-30">07/30/18</time>

                      </td>
                      <td class="orders-total">
                        $55.25
                      </td>
                      <td class="orders-status">

                        <!-- Badge -->
                        <div class="badge badge-soft-success">
                          Shipped
                        </div>

                      </td>
                      <td class="orders-method">
                        Mastercard
                      </td>
                      <td class="text-right">

                        <!-- Dropdown -->
                        <div class="dropdown">
                          <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fe fe-more-vertical"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right">
                            <a href="#!" class="dropdown-item">
                              Action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Another action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Something else here
                            </a>
                          </div>
                        </div>

                      </td>
                    </tr>
                    <tr>
                      <td>

                        <!-- Checkbox -->
                        <div class="custom-control custom-checkbox table-checkbox">
                          <input type="checkbox" class="list-checkbox custom-control-input" name="ordersSelect" id="ordersSelectOne">
                          <label class="custom-control-label" for="ordersSelectOne">&nbsp;</label>
                        </div>

                      </td>
                      <td class="orders-order">
                        #6521
                      </td>
                      <td class="orders-product">
                        XL Logo Tee
                      </td>
                      <td class="orders-date">

                        <!-- Time -->
                        <time datetime="2018-07-30">07/30/18</time>

                      </td>
                      <td class="orders-total">
                        $14.99
                      </td>
                      <td class="orders-status">

                        <!-- Badge -->
                        <div class="badge badge-soft-success">
                          Shipped
                        </div>

                      </td>
                      <td class="orders-method">
                        Paypal
                      </td>
                      <td class="text-right">

                        <!-- Dropdown -->
                        <div class="dropdown">
                          <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fe fe-more-vertical"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right">
                            <a href="#!" class="dropdown-item">
                              Action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Another action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Something else here
                            </a>
                          </div>
                        </div>

                      </td>
                    </tr>
                    <tr>
                      <td>

                        <!-- Checkbox -->
                        <div class="custom-control custom-checkbox table-checkbox">
                          <input type="checkbox" class="list-checkbox custom-control-input" name="ordersSelect" id="ordersSelectOne">
                          <label class="custom-control-label" for="ordersSelectOne">&nbsp;</label>
                        </div>

                      </td>
                      <td class="orders-order">
                        #6522
                      </td>
                      <td class="orders-product">
                        Flexfit Hat
                      </td>
                      <td class="orders-date">

                        <!-- Time -->
                        <time datetime="2018-07-28">07/28/18</time>

                      </td>
                      <td class="orders-total">
                        $25.50
                      </td>
                      <td class="orders-sratus">

                        <!-- Badge -->
                        <div class="badge badge-soft-warning">
                          Processing
                        </div>

                      </td>
                      <td class="orders-method">
                        Visa
                      </td>
                      <td class="text-right">

                        <!-- Dropdown -->
                        <div class="dropdown">
                          <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fe fe-more-vertical"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right">
                            <a href="#!" class="dropdown-item">
                              Action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Another action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Something else here
                            </a>
                          </div>
                        </div>

                      </td>
                    </tr>
                    <tr>
                      <td>

                        <!-- Checkbox -->
                        <div class="custom-control custom-checkbox table-checkbox">
                          <input type="checkbox" class="list-checkbox custom-control-input" name="ordersSelect" id="ordersSelectOne">
                          <label class="custom-control-label" for="ordersSelectOne">&nbsp;</label>
                        </div>

                      </td>
                      <td class="orders-order">
                        #6523
                      </td>
                      <td class="orders-product">
                        Reversible Hoodie
                      </td>
                      <td class="orders-date">

                        <!-- Time -->
                        <time datetime="2018-07-27">07/27/18</time>

                      </td>
                      <td class="orders-total">
                        $64.99
                      </td>
                      <td class="orders-status">

                        <!-- Badge -->
                        <div class="badge badge-soft-danger">
                          Cancelled
                        </div>

                      </td>
                      <td class="orders-method">
                        Amex
                      </td>
                      <td class="text-right">

                        <!-- Dropdown -->
                        <div class="dropdown">
                          <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fe fe-more-vertical"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right">
                            <a href="#!" class="dropdown-item">
                              Action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Another action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Something else here
                            </a>
                          </div>
                        </div>

                      </td>
                    </tr>
                    <tr>
                      <td>

                        <!-- Checkbox -->
                        <div class="custom-control custom-checkbox table-checkbox">
                          <input type="checkbox" class="list-checkbox custom-control-input" name="ordersSelect" id="ordersSelectOne">
                          <label class="custom-control-label" for="ordersSelectOne">&nbsp;</label>
                        </div>

                      </td>
                      <td class="orders-order">
                        #6524
                      </td>
                      <td class="orders-product">
                        Geometric Print Shorts
                      </td>
                      <td class="orders-date">

                        <!-- Time -->
                        <time datetime="2018-07-25">07/25/18</time>

                      </td>
                      <td class="orders-total">
                        $31.99
                      </td>
                      <td class="orders-status">

                        <!-- Badge -->
                        <div class="badge badge-soft-success">
                          Shipped
                        </div>

                      </td>
                      <td class="orders-method">
                        Paypal
                      </td>
                      <td class="text-right">

                        <!-- Dropdown -->
                        <div class="dropdown">
                          <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fe fe-more-vertical"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right">
                            <a href="#!" class="dropdown-item">
                              Action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Another action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Something else here
                            </a>
                          </div>
                        </div>

                      </td>
                    </tr>
                    <tr>
                      <td>

                        <!-- Checkbox -->
                        <div class="custom-control custom-checkbox table-checkbox">
                          <input type="checkbox" class="list-checkbox custom-control-input" name="ordersSelect" id="ordersSelectOne">
                          <label class="custom-control-label" for="ordersSelectOne">&nbsp;</label>
                        </div>

                      </td>
                      <td class="orders-order">
                        #6525
                      </td>
                      <td class="orders-product">
                        Super Mug
                      </td>
                      <td class="orders-date">

                        <!-- Time -->
                        <time datetime="2018-07-22">07/22/18</time>

                      </td>
                      <td class="orders-total">
                        $9.99
                      </td>
                      <td class="orders-status">

                        <!-- Badge -->
                        <div class="badge badge-soft-success">
                          Shipped
                        </div>

                      </td>
                      <td class="orders-method">
                        Mastercard
                      </td>
                      <td class="text-right">

                        <!-- Dropdown -->
                        <div class="dropdown">
                          <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fe fe-more-vertical"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right">
                            <a href="#!" class="dropdown-item">
                              Action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Another action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Something else here
                            </a>
                          </div>
                        </div>

                      </td>
                    </tr>
                    <tr>
                      <td>

                        <!-- Checkbox -->
                        <div class="custom-control custom-checkbox table-checkbox">
                          <input type="checkbox" class="list-checkbox custom-control-input" name="ordersSelect" id="ordersSelectOne">
                          <label class="custom-control-label" for="ordersSelectOne">&nbsp;</label>
                        </div>

                      </td>
                      <td class="orders-order">
                        #6526
                      </td>
                      <td class="orders-product">
                        MD Pocket Tee
                      </td>
                      <td class="orders-date">

                        <!-- Time -->
                        <time datetime="2018-07-22">07/22/18</time>

                      </td>
                      <td class="orders-total">
                        $19.99
                      </td>
                      <td class="orders-status">

                        <!-- Badge -->
                        <div class="badge badge-soft-warning">
                          Processing
                        </div>

                      </td>
                      <td class="orders-method">
                        Amex
                      </td>
                      <td class="text-right">

                        <!-- Dropdown -->
                        <div class="dropdown">
                          <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fe fe-more-vertical"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right">
                            <a href="#!" class="dropdown-item">
                              Action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Another action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Something else here
                            </a>
                          </div>
                        </div>

                      </td>
                    </tr>
                    <tr>
                      <td>

                        <!-- Checkbox -->
                        <div class="custom-control custom-checkbox table-checkbox">
                          <input type="checkbox" class="list-checkbox custom-control-input" name="ordersSelect" id="ordersSelectOne">
                          <label class="custom-control-label" for="ordersSelectOne">&nbsp;</label>
                        </div>

                      </td>
                      <td class="orders-order">
                        #6527
                      </td>
                      <td class="orders-product">
                        Custom Coffee Blend
                      </td>
                      <td class="orders-date">

                        <!-- Time -->
                        <time datetime="2018-07-21">07/21/18</time>

                      </td>
                      <td class="orders-total">
                        $11.99
                      </td>
                      <td class="orders-sratus">

                        <!-- Badge -->
                        <div class="badge badge-soft-success">
                          Shipped
                        </div>

                      </td>
                      <td class="orders-method">
                        Visa
                      </td>
                      <td class="text-right">

                        <!-- Dropdown -->
                        <div class="dropdown">
                          <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fe fe-more-vertical"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right">
                            <a href="#!" class="dropdown-item">
                              Action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Another action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Something else here
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
