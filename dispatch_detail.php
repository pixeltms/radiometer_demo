<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Radiometere - Dispatches" />

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
    <title>Dispatch Details</title>

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
                      Dispatch Details
                    </h1>
					 <p class="text-muted mb-1">
						Dispatches #DC-<?php echo $_GET['id'];?>
					  </p>
                  </div>

                </div> <!-- / .row -->

              </div>
            </div>

            <!-- Content -->
			<div class="col-12 col-lg-6">
			<div class="card">
                <div class="card-body">

                  <!-- Form -->
                  <form id="dispatch">
                    <div class="form-group">
						<label for="dc_numbers">Delivery Challan</label>
						<select class="form-control" name="dc_numbers" id="dc_numbers" >
						  <option value="6522">DC-6522</option>
						  <option value="6526">DC-6526</option>
						</select>
                    </div>
                    <div class="form-group">
						<label for="dc_numbers">Courier Partner</label>
						<select class="form-control" name="courier_partner" id="courier_partner" >
						  <option value="1">DTDC Mumbai</option>
						  <option value="2">DHL</option>
						  <option value="3">FedEx</option>
						  <option value="4">Blue Dart</option>
						  <option value="5">First Flight</option>
						</select>
                    </div>
                    <div class="form-group">
						<label for="tracking_id">Tracking Id</label>
						<input type="text" class="form-control" id="tracking_id" value="3432432">
						
                    </div>
                    <div class="form-group">
						<label for="tracking_url">Tracking URL</label>
						<input type="text" class="form-control" id="tracking_url" value="http://dtdc.com/3432432" >
                    </div>					
                    <!-- Button -->
                    <button type="submit" class="btn btn-primary">Save</button>
                  </form>

                </div>
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
<script>


$("#tracking_id, #courier_partner").change(function () {
    var id =  $('#courier_partner').val();
	var tracking_id = $('#tracking_id').val();
	var url = '';
	switch(id){
		case "1": 
			url="https://dtdc/tracking/" + tracking_id;
			break;
		case "2": 
			url="https://dhl/tracking/" + tracking_id;
			break;
		case "3":
			url="https://fedex/tracking/" + tracking_id;		
			break;
		case "4": 
			url="https://bluedart/tracking/" + tracking_id;		
			break;
		case "5": 
			url="https://firstflight/tracking/" + tracking_id;				
			break;			
	}
	$('#tracking_url').val(url);
	
});

$( "#dispatch" ).submit(function( event ) {
  alert( "Record Saved" );
  return false;
});
</script>

  </body>
</html>
