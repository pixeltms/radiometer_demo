<?php 
$product_array = 
array(
array('1','SKU3839489','ITEM-1','34.56'),
array('2','SKU67332434','ITEM-2','4893.45'),
array('3','SKU34454335','ITEM-3','234.50'),
array('4','SKU56546','ITEM-4','565.00'),
array('5','SKU723343','ITEM-5','3000.00'),
array('6','SKU232334','ITEM-6','10000.00'));



$selected_product = $product_array[$_GET['id'] - 1];

?>

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
    <title>Product Details</title>

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
                      Product Details
                    </h1>
					 <p class="text-muted mb-1">
						Product ID: <?php echo $_GET['id'];?>
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
                  <form>
                    <div class="form-group">
						<label for="product_id">Product ID</label>
						<input type="text" class="form-control" id="product_id" value=<?php echo $selected_product[0];?> >
                    </div>	
                    <div class="form-group">
						<label for="product_sku">SKU</label>
						<input type="text" class="form-control" id="product_sku"  value=<?php echo $selected_product[1];?>>
                    </div>	
                    <div class="form-group">
						<label for="product_name">Product Name</label>
						<input type="text" class="form-control" id="product_name"  value=<?php echo $selected_product[2];?>>
						
                    </div>
                    <div class="form-group">
						<label for="unit_price">Unit Price (INR)</label>
						<input type="text" class="form-control" id="unit_price"  value=<?php echo $selected_product[3];?>>
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
</script>

  </body>
</html>
