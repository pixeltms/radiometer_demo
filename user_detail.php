<?php 
$Partner_array = 
array(
array('1','Radiometer','admin','admin@radiometer.com','1111111111','Mumbai','Maharashtra','address1','address2','400001'),
array('2','cust1','cust','cust1@test.com','4324324434','Pune','Maharashtra','address1','address2','411001'),
array('3','cust2','cust','cust2@test.com','6546546546','Delhi','Delhi','address1','address2','110001'),
);

$id = $_GET['id'];
if($id == '101') {$id ='0';} ;

$selected_Partner = $Partner_array[$id];

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
    <title>Users</title>

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
                      User Details
                    </h1>
					 <p class="text-muted mb-1">
						User Id #<?php echo $_GET['id'];?>
					  </p>
                  </div>

                </div> <!-- / .row -->

              </div>
            </div>

            <!-- Content -->
			<div class="col-12 col-lg-6">
        <div class="col-12">
          <!-- Card -->
          <div class="card mb-3 mb-lg-5">
            <div class="card-header">
              <h5 class="card-title">Basic info</h5>
            </div>

            <!-- Body -->
            <div class="card-body">
              <form>

                <!-- Form Group -->
                <div class="row form-group">
                  <label for="firstNameLabel" class="col-sm-3 col-form-label input-label">Full name <i class="far fa-question-circle text-body ml-1" data-toggle="tooltip" data-placement="top" title="Displayed on public forums, such as Front."></i></label>

                  <div class="col-sm-9">
                    <div class="input-group">
                      <input type="text" class="form-control" name="firstName" id="firstNameLabel" placeholder="First Name" aria-label="First Name" value=<?php echo $selected_Partner[1];?> >
                      <input type="text" class="form-control" name="lastName" id="lastNameLabel" placeholder="Last Name" aria-label="Last Name" value=<?php echo $selected_Partner[2];?> >
                    </div>
                  </div>
                </div>
                <!-- End Form Group -->

                <!-- Form Group -->
                <div class="row form-group">
                  <label for="emailLabel" class="col-sm-3 col-form-label input-label">Email</label>

                  <div class="col-sm-9">
                    <input type="email" class="form-control" name="email" id="emailLabel" placeholder="clarice@example.com" aria-label="example@example.com"  value=<?php echo $selected_Partner[3];?>>
                  </div>
                </div>
                <!-- End Form Group -->

                <!-- Form Group -->
                <div class="js-add-field row form-group"
                     data-hs-add-field-options='{
                        "template": "#addPhoneFieldTemplate",
                        "container": "#addPhoneFieldContainer",
                        "defaultCreated": 0
                      }'>
                  <label for="phoneLabel" class="col-sm-3 col-form-label input-label">Mobile</label>

                  <div class="col-sm-9">
                    <div class="input-group align-items-center">
                      <input type="text" class="js-masked-input form-control" name="phone" id="phoneLabel" 
                             data-hs-mask-options='{
                               "template": "+(91)0000000000"
                             }' value=<?php echo $selected_Partner[4];?>>
                    </div>
                  </div>
                </div>
                <!-- End Form Group -->

                    <div class="row form-group">
						<label for="user_type" class="col-sm-3 col-form-label input-label">User Type</label>
						<select class="form-control col-sm-9" name="user_type" id="user_type" >
						  <option value="1">Admin</option>
						  <option value="2">Warehouse</option>
						  <option value="3">Customer</option>
						  <option value="4">Sales</option>
						</select>
                    </div>

                <!-- Add Phone Input Field -->
                <div id="addPhoneFieldTemplate" style="display: none;">
                  <div class="input-group input-group-add-field">
                    <input type="text" class="js-masked-input form-control" data-name="additionlPhone" placeholder="+x(xxx)xxx-xx-xx" aria-label="+x(xxx)xxx-xx-xx"
                           data-hs-mask-options='{
                             "template": "+0(000)000-00-00"
                           }'>

                    <a class="js-delete-field input-group-add-field-delete" href="javascript:;">
                      <i class="fas fa-times"></i>
                    </a>
                  </div>
                </div>
                <!-- End Add Phone Input Field -->


              </form>
            </div>
            <!-- End Body -->

            <!-- Footer -->
            <div class="card-footer d-flex justify-content-end">
              <a class="btn btn-white" href="javascript:;">Cancel</a>
              <span class="mx-2"></span>
              <a class="btn btn-primary" href="javascript:;">Save Changes</a>
            </div>
            <!-- End Footer -->
          </div>
          <!-- End Card -->

          <!-- Card -->
          <div id="editAddressCard" class="card mb-3 mb-lg-5">
            <div class="card-header">
              <h5 class="card-title">Address</h5>
            </div>

            <!-- Body -->
            <div class="card-body">
              <form>
                <!-- Form Group -->
                <div class="row form-group">
                  <label for="locationLabel" class="col-sm-3 col-form-label input-label">Location</label>

                  <div class="col-sm-9">

                    <div class="mb-3">
                      <input type="text" class="form-control" name="city" id="cityLabel" placeholder="City" aria-label="City" value=<?php echo $selected_Partner[5];?>>
                    </div>
                    <input type="text" class="form-control" name="state" id="stateLabel" placeholder="State" aria-label="State" value=<?php echo $selected_Partner[6];?>>
                  </div>
                </div>
                <!-- End Form Group -->

                <!-- Form Group -->
                <div class="row form-group">
                  <label for="addressLine1Label" class="col-sm-3 col-form-label input-label">Address line 1</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="addressLine1" id="addressLine1Label" placeholder="Your address" aria-label="Your address" value=<?php echo $selected_Partner[7];?>>
                  </div>
                </div>
                <!-- End Form Group -->

                <!-- Form Group -->
                <div class="js-add-field row form-group"
                     data-hs-add-field-options='{
                        "template": "#addAddressFieldTemplate",
                        "container": "#addAddressFieldContainer",
                        "defaultCreated": 0
                      }'>
                  <label for="addressLine2Label" class="col-sm-3 col-form-label input-label">Address line 2 <span class="input-label-secondary">(Optional)</span></label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="addressLine2" id="addressLine2Label" placeholder="Your address" aria-label="Your address" value=<?php echo $selected_Partner[8];?>>
                  </div>
                </div>
                <!-- End Form Group -->

                <!-- Add Phone Input Field -->
                <div id="addAddressFieldTemplate" style="display: none;">
                  <div class="input-group-add-field">
                    <input type="text" class="form-control" data-name="addressLine" placeholder="Your address" aria-label="Your address">

                    <a class="js-delete-field input-group-add-field-delete" href="javascript:;">
                      <i class="fas fa-times"></i>
                    </a>
                  </div>
                </div>
                <!-- End Add Phone Input Field -->

                <!-- Form Group -->
                <div class="row form-group">
                  <label for="zipCodeLabel" class="col-sm-3 col-form-label input-label">Pin Code <i class="far fa-question-circle text-body ml-1" data-toggle="tooltip" data-placement="top" title="You can find your code in a postal address."></i></label>

                  <div class="col-sm-9">
                    <input type="text" class="js-masked-input form-control" name="zipCode" id="zipCodeLabel" placeholder="Pin code" aria-label="Pin code" value=<?php echo $selected_Partner[9];?>>
                  </div>
                </div>
                <!-- End Form Group -->
              </form>
            </div>
            <!-- End Body -->

            <!-- Footer -->
            <div class="card-footer d-flex justify-content-end">
              <a class="btn btn-white" href="javascript:;">Cancel</a>
              <span class="mx-2"></span>
              <a class="btn btn-primary" href="javascript:;">Save Changes</a>
            </div>
            <!-- End Footer -->
          </div>
          <!-- End Card -->

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

$(document).ready(function() {
var id='<?php echo $id;?>';
if(id == '0'){
	var user_type='1';
}else{
	var user_type='3'
}
$("#user_type").val(user_type).change();
});

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
