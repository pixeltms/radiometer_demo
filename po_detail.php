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
    <title>Purchase Order detail - PO-<?php echo $_GET['id'];?></title>

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
                      Purchase Order detail
                    </h1>
					 <p class="text-muted mb-1">
						Purchase Order #PO-<?php echo $_GET['id'];?>
					  </p>
                  </div>

                </div> <!-- / .row -->

              </div>
            </div>

            <!-- Content -->
            <div class="card card-body p-5">

              <div class="row">
                <div class="col-12 col-md-6">

                  <!-- Heading -->
                  <h6 class="text-uppercase text-muted">
                    Customer Name
                  </h6>

                  <!-- Text -->
                  <p class="text-muted mb-4">
                    <strong class="text-body">Customer 1</strong> <br>
                    Customer Address Line 1 <br>
                    Customer Address Line 2<br>
                    City, State, PIN-400001
                  </p>

                  <!-- Heading -->
                  <h6 class="text-uppercase text-muted">
                    Purchase Order Number
                  </h6>

                  <!-- Text -->
                  <p class="mb-4">
                    #PO-<?php echo $_GET['id'];?>
                  </p>

                </div>
                <div class="col-12 col-md-6 text-md-right">

                  <!-- Heading -->
                  <h6 class="text-uppercase text-muted">
                    PO date
                  </h6>

                  <!-- Text -->
                  <p class="mb-4">
                    <time datetime="2018-04-23">09/12/2021</time>
                  </p>

                </div>
              </div> <!-- / .row -->
              <div class="row">
                <div class="col-12">

                  <!-- Table -->
                  <div class="table-responsive">
                    <table class="table my-4">
                      <thead>
                        <tr>
                          <th class="px-0 bg-transparent border-top-0">
                            <span class="h6">Item Name</span>
                          </th>
                          <th class="px-0 bg-transparent border-top-0 ">
                            <span class="h6">Qty</span>
                          </th>
                          <th class="px-0 bg-transparent border-top-0">
                            <span class="h6">price</span>
                          </th>						  
                          <th class="px-0 bg-transparent border-top-0 text-right">
                            <span class="h6">Cost</span>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="px-0">
                            Item - 3
                          </td>
                          <td class="px-0">
                            1
                          </td>
                          <td class="px-0">
                            125.45
                          </td>						  
                          <td class="px-0 text-right">
                            125.45
                          </td>
                        </tr>
                        <tr>
                          <td class="px-0">
                           Item - 2
                          </td>
                          <td class="px-0">
                            15
                          </td>
                          <td class="px-0">
                            308.19
                          </td>						  
                          <td class="px-0 text-right">
                            4622.85
                          </td>
                        </tr>
                        <tr>
                          <td class="px-0 border-top border-top-2">
                            <strong>Total amount </strong>
                          </td>
                          <td colspan="3" class="px-0 text-right border-top border-top-2">
                            <span class="h3">
                              INR 4748.3
                            </span>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                  <hr class="my-5">

                  <!-- Title -->
                  <h6 class="text-uppercase">
                    Notes
                  </h6>

                  <!-- Text -->
                  <p class="text-muted mb-0">
                    Special Instructions for the Purchase Order
                  </p>

                </div>
              </div> <!-- / .row -->
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
