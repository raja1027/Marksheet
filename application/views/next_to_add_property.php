<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="<?php echo base_url(); ?>links/assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>links/assets/images/favicon.png" type="image/x-icon">
    <title>Cocoma Digital - Work Assignment</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>links/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>links/assets/css/font-awesome.css">
     ico-font
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>links/assets/css/vendors/icofont.css">-->
    <!-- Themify icon
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>links/assets/css/vendors/themify.css">-->
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>links/assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>links/assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>links/assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>links/assets/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>links/assets/css/vendors/chartist.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>links/assets/css/vendors/date-picker.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>links/assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>links/assets/css/style.css">
    <link id="color" rel="stylesheet" href="<?php echo base_url(); ?>links/assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>links/assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>links/datatable/dataTables.bootstrap4.min.css">
	
	
  </head>
  <body onload="">
    <div class="loader-wrapper">
      <div class="loader-index"><span></span></div>
      <svg>
        <defs></defs>
        <filter id="goo">
          <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
          <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo"> </fecolormatrix>
        </filter>
      </svg>
    </div>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-header">
        <div class="header-wrapper row m-0">
          <form class="form-inline search-full col" action="#" method="get">
            <div class="form-group w-100">
              <div class="Typeahead Typeahead--twitterUsers">
                <div class="u-posRelative">
                  <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Cuba .." name="q" title="" autofocus>
                  <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div><i class="close-search" data-feather="x"></i>
                </div>
                <div class="Typeahead-menu"></div>
              </div>
            </div>
          </form>
          <div class="header-logo-wrapper col-auto p-0">
            <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="<?php echo base_url(); ?>links/assets/images/logo/logo.png" alt=""></a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i></div>
          </div>
          <div class="left-header col horizontal-wrapper ps-0">
          </div>
          <div class="nav-right col-8 pull-right right-header p-0">
            <ul class="nav-menus">
              

              <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
              <li class="profile-nav onhover-dropdown p-0 me-0">
                <div class="media profile-media"><img class="b-r-10" src="<?php echo base_url(); ?>links/assets/images/dashboard/profile.jpg" alt="">
                  <div class="media-body"><span>Emay Walter</span>
                    <p class="mb-0 font-roboto">Admin <i class="middle fa fa-angle-down"></i></p>
                  </div>
                </div>
                <ul class="profile-dropdown onhover-show-div">
                  <li><a href="#"><i data-feather="user"></i><span>Account </span></a></li>
                  <li><a href="#"><i data-feather="mail"></i><span>Inbox</span></a></li>
                  <li><a href="#"><i data-feather="file-text"></i><span>Taskboard</span></a></li>
                  <li><a href="#"><i data-feather="settings"></i><span>Settings</span></a></li>
                  <li><a href="#"><i data-feather="log-in"> </i><span>Log in</span></a></li>
                </ul>
              </li>
            </ul>
          </div>

        </div>
      </div>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper">

		<!-- sidebar code -->
		<?php
		include('sidebar.php');
		?>
		<!-- sidebar code -->

        <div class="page-body">
          <div class="container-fluid">        
            <div class="page-title">
              <div class="row">
                <div class="col-6">
                  <h3> Add Residencial Property</h3>
                </div>
                <div class="col-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>"> <i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Property</li>
                    <li class="breadcrumb-item active"> Add Residencial Property </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
		  
		  
			<!-- Container-fluid starts-->
			<div class="container-fluid">
				<div class="row second-chart-list third-news-update">
					<div class="col-lg-12">
					
					
						<div class="card">
							<div class="card-body">
								<!--<form action="Property_Control/update_property" method="post" enctype= "multipart/form-data">-->
								<?php //echo form_open_multipart('Property_Control/update_property'); ?>
								<form id="update_property_with_img" enctype="multipart/form-data" method="post">

								<div class="row">
								<?php
								foreach($property_details as $row):
								?>
									<div class="col-lg-12">
										<h4 align="center">Important Information about Property</h4>
										<br>
									</div>
									
									<div class="col-lg-12">
										<div class="form-group">
											<label>Name of Owner:</label>
											<input type="text" id="ownership" name="ownership" class="form-control" placeholder="Name of Owner" value="<?php echo $row->ownership; ?>" />
											<input type="hidden" id="txt_prop_id" name="txt_prop_id" class="form-control" value="<?php echo $this->session->userdata('current_prop_id'); ?>" />
										</div>
									</div>
									<!--<div class="col-lg-6">
										<div class="form-group">
											<label>City:</label>
											<select class="form-control" id="slt_city" name="slt_city" value="<?php echo $row->city_name; ?>"></select>
										</div>
									</div>-->
									<div class="col-lg-12">
										<br/>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Location:</label>
											<select class="form-control" id="location" name="location" value="<?php echo $row->location; ?>">
												<?php
												foreach($location_details as $row2):
												?>
													<option value="<?php echo $row2->location_id; ?>" <?php echo ($row2->location_name==$row->location)?" selected=' selected'":""?>><?php echo $row2->location_name; ?></option>
												<?php
												endforeach;
												?>
											</select>
										</div>
									</div>
									<div class="col-lg-6">
										<label>Mobile No:</label>
										<input type="text" id="phone" name="phone" class="form-control" placeholder="Mobile No" readonly  value="<?php echo $row->phone; ?>"/>
									</div>
									<div class="col-lg-12">
										<br/>
									</div>
									<div class="col-lg-6">
										<label>Additional Mobile No:</label>
										<input type="text" id="exphone" name="exphone" class="form-control" placeholder="Additional Mobile No" readonly  value="<?php echo $row->exphone; ?>"/>
									</div>
									<div class="col-lg-6">
										<label>Pincode:</label>
										<input type="text" id="pincode" name="pincode" class="form-control" placeholder="Pincode" value="<?php echo $row->pincode; ?>" />
									</div>
									<div class="col-lg-12">
										<br/>
									</div>
									<div class="col-lg-6">
										<label>Property Address:</label>
										<textarea  id="paddress" name="paddress" class="form-control" placeholder="Property Address"  ><?php echo $row->paddress; ?></textarea>
									</div>
									<div class="col-lg-6">
										<label>Rent Cost:</label>
										<input type="text" id="cost" name="cost" class="form-control" placeholder="Rent Cost" value="<?php echo $row->cost; ?>" />
									</div>
									<div class="col-lg-12">
										<br/>
									</div>
									<div class="col-lg-6">
										<label>BHK:</label>
										<select class="form-control" id="bhk" name="bhk" value="<?php echo $row->bhk; ?>">
											<option value="0">-- BHK --</option>
											<option value="1 Room" <?php echo ($row->bhk == "1 Room") ? "selected" : "" ?>>1 Room</option>
											<option value="1 BHK" <?php echo ($row->bhk == "1 BHK") ? "selected" : "" ?>>1 BHK</option>
											<option value="2 BHK" <?php echo ($row->bhk == "2 BHK") ? "selected" : "" ?>>2 BHK</option>
											<option value="3 BHK" <?php echo ($row->bhk == "3 BHK") ? "selected" : "" ?>>3 BHK</option>
											<option value="4 BHK" <?php echo ($row->bhk == "4 BHK") ? "selected" : "" ?>>4 BHK</option>
											<option value="5 BHK" <?php echo ($row->bhk == "5 BHK") ? "selected" : "" ?>>5 BHK</option>
											<option value="6 BHK" <?php echo ($row->bhk == "6 BHK") ? "selected" : "" ?>>6 BHK</option>
											<option value="7 BHK" <?php echo ($row->bhk == "7 BHK") ? "selected" : "" ?>>7 BHK</option>
											<option value="8 BHK" <?php echo ($row->bhk == "8 BHK") ? "selected" : "" ?>>8 BHK</option>
											<option value="9 BHK" <?php echo ($row->bhk == "9 BHK") ? "selected" : "" ?>>9 BHK</option>
											<option value="10 BHK" <?php echo ($row->bhk == "10 BHK") ? "selected" : "" ?>>10 BHK</option>
											<option value="10+ BHK" <?php echo ($row->bhk == "10+ BHK") ? "selected" : "" ?>>10+ BHK</option>
										</select>
									</div>
									<div class="col-lg-6">
										<label>Furnishing:</label>
										<select class="form-control" id="furnishing" name="furnishing" value="<?php echo $row->furnishing; ?>">
											<option value="0" <?php echo ($row->furnishing == "0") ? "selected" : "" ?>>-- Furnishing --</option>
											<option value="Fully Furnished" <?php echo ($row->furnishing == "Fully Furnished") ? "selected" : "" ?>>Fully Furnished</option>
											<option value="Semi Furnished" <?php echo ($row->furnishing == "Semi Furnished") ? "selected" : "" ?>>Semi Furnished</option>
											<option value="Unfurnished" <?php echo ($row->furnishing == "Unfurnished") ? "selected" : "" ?>>Unfurnished</option>
											<option value="NA" <?php echo ($row->furnishing == "Unfurnished") ? "selected" : "" ?>>NA</option>
										</select>
									</div>
									<div class="col-lg-12">
										<br/>
									</div>
									<div class="col-lg-6">
										<label>Floor:</label>
										<select class="form-control" id="floornumbers" name="floornumbers" value="<?php echo $row->floornumbers; ?>">
											<option value="0">-- Floor Number --</option>
											<option value="Basement"<?php echo ($row->floornumbers == "Basement") ? "selected" : "" ?>>Basement</option>
											<option value="Duplex"<?php echo ($row->floornumbers == "Duplex") ? "selected" : "" ?>>Duplex</option>
											<option value="Ground Floor"<?php echo ($row->floornumbers == "Ground Floor") ? "selected" : "" ?>>Ground Floor</option>
											<option value="1st" <?php echo ($row->floornumbers == "1st") ? "selected" : "" ?>>1st</option>
											<option value="2nd" <?php echo ($row->floornumbers == "2nd") ? "selected" : "" ?>>2nd</option>
											<option value="3rd" <?php echo ($row->floornumbers == "3rd") ? "selected" : "" ?>>3rd</option>
											<option value="4th" <?php echo ($row->floornumbers == "4th") ? "selected" : "" ?>>4th</option>
											<option value="5th" <?php echo ($row->floornumbers == "5th") ? "selected" : "" ?>>5th</option>
											<option value="6th" <?php echo ($row->floornumbers == "6th") ? "selected" : "" ?>>6th</option>
											<option value="7th" <?php echo ($row->floornumbers == "7th") ? "selected" : "" ?>>7th</option>
											<option value="8th" <?php echo ($row->floornumbers == "8th") ? "selected" : "" ?>>8th</option>
											<option value="9th" <?php echo ($row->floornumbers == "9th") ? "selected" : "" ?>>9th</option>
											<option value="10th" <?php echo ($row->floornumbers == "10th") ? "selected" : "" ?>>10th</option>
											<option value="10th+" <?php echo ($row->floornumbers == "10th+") ? "selected" : "" ?>>10th+</option>
										</select>
									</div>
									<div class="col-lg-6">
										<label>Food:</label>
										<select class="form-control" id="food" name="food" value="<?php echo $row->food; ?>">
											<option value="0">-- Food --</option>
											<option value="Veg" <?php echo ($row->food == "Veg") ? "selected" : "" ?>>Veg</option>
											<option value="Non-Veg" <?php echo ($row->food == "Non-Veg") ? "selected" : "" ?>>Non-Veg</option>
										</select>
									</div>
									<div class="col-lg-12">
										<br/>
									</div>
									<div class="col-lg-6">
										<label>Owner religion:</label>
										<select name="religion" id="religion" class="form-control" value="<?php echo $row->religion; ?>">
											<option value="0">Select Owner religion</option>
											<option value="Agarwal Hindu General" <?php echo ($row->religion == "Agarwal Hindu General") ? "selected" : "" ?>>Agarwal Hindu General</option>
											<option value="Brahmin" <?php echo ($row->religion == "Brahmin") ? "selected" : "" ?>>Brahmin</option>
											<option value="Cristian" <?php echo ($row->religion == "Cristian") ? "selected" : "" ?>>Cristian</option>
											<option value="Jaat" <?php echo ($row->religion == "Jaat") ? "selected" : "" ?>>Jaat</option>
											<option value="Jain Hindu General" <?php echo ($row->religion == "Jain Hindu General") ? "selected" : "" ?>>Jain Hindu General</option>
											<option value="Hindu General" <?php echo ($row->religion == "Hindu General") ? "selected" : "" ?>>Hindu General</option>
											<option value="Hindu OBC" <?php echo ($row->religion == "Hindu OBC") ? "selected" : "" ?>>Hindu OBC</option>
											<option value="Hindu SC/ST" <?php echo ($row->religion == "Hindu SC/ST") ? "selected" : "" ?>>Hindu SC/ST</option>
											<option value="Maheshwari Hindu General" <?php echo ($row->religion == "Maheshwari Hindu General") ? "selected" : "" ?>>Maheshwari Hindu General</option>
											<option value="Muslim" <?php echo ($row->religion == "Muslim") ? "selected" : "" ?>>Muslim</option>
											<option value="Rajput" <?php echo ($row->religion == "Rajput") ? "selected" : "" ?>>Rajput</option>
											<option value="Sikh" <?php echo ($row->religion == "Sikh") ? "selected" : "" ?>>Sikh</option>
											<option value="Vaishya" <?php echo ($row->religion == "Vaishya") ? "selected" : "" ?>>Vaishya</option>
											<option value="Other" <?php echo ($row->religion == "Other") ? "selected" : "" ?>>Other</option>
										</select>
									</div>
									<div class="col-lg-6">
										<label>Agent:</label>
										<input type="text" id="agent" name="agent" class="form-control" placeholder="Agent" value="<?php echo $row->agent; ?>" />
									</div>
									<div class="col-lg-12">
										<br/>
									</div>
									<div class="col-lg-6">
										<label>Property Category:</label>
										<select name="propertycategory" id="propertycategory" class="form-control" value="<?php echo $row->propertycategory; ?>">
											<option value="">Select Property Category</option>
												<option value="Appartment" <?php echo ($row->propertycategory == "Appartment") ? "selected" : "" ?>>Appartment</option>
												<option value="Colony" <?php echo ($row->propertycategory == "Colony") ? "selected" : "" ?>>Colony</option>
												<option value="Mohalla" <?php echo ($row->propertycategory == "Mohalla") ? "selected" : "" ?>>Mohalla</option>
												<option value="Township" <?php echo ($row->propertycategory == "Township") ? "selected" : "" ?>>Township</option>
												<option value="Others" <?php echo ($row->propertycategory == "Others") ? "selected" : "" ?>>Others</option>
										</select>
									</div>
									<div class="col-lg-6">
										<label>Property Type:</label>
										<select id="propertytype" name="propertytype" class="form-control" value="<?php echo $row->propertytype; ?>">
											<option value="">Select Property Type</option>
											<option value="Flat" <?php echo ($row->propertytype == "Flat") ? "selected" : "" ?>>Flat</option>
											<option value="Portion house" <?php echo ($row->propertytype == "Portion house") ? "selected" : "" ?>>Portion house</option>
											<option value="Independent House" <?php echo ($row->propertytype == "Independent House") ? "selected" : "" ?>>Independent House</option>
											<option value="Villa" <?php echo ($row->propertytype == "Villa") ? "selected" : "" ?>>Villa</option>
											<option value="Others" <?php echo ($row->propertytype == "Others") ? "selected" : "" ?>>Others</option>
										</select>
									</div>
								</div>
								
								<hr/>

								<div class="row">
									<div class="col-lg-12">
										<h4 align="center">More Information</h4>
										<br>
									</div>
									
									<div class="col-lg-6">
										<div class="form-group">
											<label>Property Handle by:</label>
											<input type="text" id="handleby" name="handleby" class="form-control" placeholder="Property Handle by Person"  value="<?php echo $row->handleby; ?>"/>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Occupation:</label>
											<input type="text" id="occupation" name="occupation" class="form-control" placeholder="Occupation"  value="<?php echo $row->occupation; ?>"/>
										</div>
									</div>
									<div class="col-lg-12">
										<br/>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Building Condition:</label>
											<select id="bcondition" name="bcondition" class="form-control" value="<?php echo $row->bcondition; ?>">
												<option value="">Select Building Condition</option>
												<option value="Best" <?php echo ($row->bcondition == "Best") ? "selected" : "" ?>>Best</option>
												<option value="Good" <?php echo ($row->bcondition == "Good") ? "selected" : "" ?>>Good</option>
												<option value="Average" <?php echo ($row->bcondition == "Average") ? "selected" : "" ?>>Average</option>
												<option value="Below Average" <?php echo ($row->bcondition == "Below Average") ? "selected" : "" ?>>Below Average</option>
											</select>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Facing Direction:</label>
											<select id="facing" name="facing" class="form-control" value="<?php echo $row->facing; ?>">
												<option value="">Select Facing</option>
												<option value="East" <?php echo ($row->facing == "East") ? "selected" : "" ?>>East</option>
												<option value="West" <?php echo ($row->facing == "West") ? "selected" : "" ?>>West</option>
												<option value="South" <?php echo ($row->facing == "South") ? "selected" : "" ?>>North</option>
												<option value="South" <?php echo ($row->facing == "South") ? "selected" : "" ?>>South</option>
											</select>
										</div>
									</div>
									<div class="col-lg-12">
										<br/>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Total area size:</label>
											<input type="text" id="areasize" name="areasize" class="form-control" placeholder="Total area size" value="<?php echo $row->areasize; ?>" />
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Security Amount:</label>
											<input type="text" id="security_amt" name="security_amt" class="form-control" placeholder="Enter Security Amount in Rupee" value="<?php echo $row->security_amt; ?>" />
										</div>
									</div>
									<div class="col-lg-12">
										<br/>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Majority perticulars:</label>
											<input type="text" name="majority" id="majority" class="form-control" placeholder="Majority perticulars" value="<?php echo $row->majority; ?>" />
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Owner's Address:</label>
											<br>
											<label class="radio-inline">
												<input type="radio" class="yesno" name="yesno" value="Property Address"> Property Address
											</label>
											<label class="radio-inline">
												<input type="radio" class="yesno" name="yesno" value="Another Address"> Another Address
											</label>
										</div>
									</div>
									<div class="col-lg-12">
										<br/>
									</div>
									<div class="col-lg-12">
										<label>Select Extra Facilities Available:</label>
										<div class="row">
											<div class="col-lg-3">
												<div class="form-group">
													<label class="checkbox-inline">
														<input type="checkbox" class="amenities" name="amenities1" value="Other Tenant"> Other Tenant
													</label>
												</div>
											</div>
											<div class="col-lg-3">
												<div class="form-group">
													<label class="checkbox-inline">
														<input type="checkbox" class="amenities" name="amenities2" value="Garden"> Garden
													</label>
												</div>
											</div>
											<div class="col-lg-3">
												<div class="form-group">
													<label class="checkbox-inline">
														<input type="checkbox" class="amenities" name="amenities3" value="Lift"> Lift
													</label>
												</div>
											</div>
											<div class="col-lg-3">
												<div class="form-group">
													<label class="checkbox-inline">
														<input type="checkbox" class="amenities" name="amenities4" value="Security"> Security
													</label>
												</div>
											</div>
											<div class="col-lg-3">
												<div class="form-group">
													<label class="checkbox-inline">
														<input type="checkbox" class="amenities" name="amenities5" value="Common Enterance"> Common Enterance
													</label>
												</div>
											</div>
											<div class="col-lg-3">
												<div class="form-group">
													<label class="checkbox-inline">
														<input type="checkbox" class="amenities" name="amenities3" value="Indoor CarParking"> Indoor CarParking
													</label>
												</div>
											</div>
											<div class="col-lg-3">
												<div class="form-group">
													<label class="checkbox-inline">
														<input type="checkbox" class="amenities" name="amenities7" value="Water"> Water
													</label>
												</div>
											</div>
											<div class="col-lg-3">
												<div class="form-group">
													<label class="checkbox-inline">
														<input type="checkbox" class="amenities" name="amenities8" value="Electricity"> Electricity
													</label>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-12">
										<br/>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<h4 align="center">Upload Image and Extra Information</h4>
										<br>
									</div>
									
									<div class="col-lg-6">
										<div class="form-group">
											<label>Property Image:</label>
											<input type="file" id="file_property" name="file_property" class="form-control" />
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>More Extra Property information or Remarks:</label>
											<textarea id="aboutproperty" name="aboutproperty" class="form-control" placeholder="More Extra Property information or Remarks" value="<?php echo $row->datevacant; ?>"></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<h4 align="center">Update Date and Availability</h4>
										<br>
									</div>
									
									<div class="col-lg-4">
										<div class="form-group">
											<label>Date from Vacant:</label>
											<input type="date" id="datevacant" name="datevacant" class="form-control"  value="<?php echo $row->datevacant; ?>"/>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label class="checkbox-inline">
												<input type="checkbox" name="chk_mark_alloted" value="1"> Mark Alloted (Select Date below:)
											</label>
											<input type="date" id="dateallot" name="dateallot" class="form-control"  value="<?php echo $row->dateallot; ?>"/>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label>Date of Expected Vacant:</label>
											<input type="date" id="dateexpectvac" name="dateexpectvac" class="form-control"  value="<?php echo $row->dateexpectvac; ?>"/>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<h4 align="center">Extra Details</h4>
										<br>
									</div>
									
									<div id="dynamic_field_div" class="row">
										
									</div>
									
									<div id="struct_dynamic" class="row">
										
									</div>
									
								</div>
									<br/>
									<button class="btn btn-success" type="submit" id="btn_add_property" style="display:block;">Add Property</button>
									<!--<button class="btn btn-success" id="btn_view" style="display:block;">View All Property</button>-->
									
									
									<!--<button class="btn btn-success" id="btn_update_locality" style="display:none;">Update</button>
									<button class="btn btn-success" id="btn_new_locality" style="display:none;">Add New Locality</button>
									-->
								</form>
							<?php

							endforeach;

							?>                  
								
								<hr/>
								
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Container-fluid Ends-->
<style>

.paginations_links
{
	margin:20px;
}
.paginations_links a
{
    margin: 3px;
    padding: 10px;
    border: 1px solid #a8a8a8;
    border-radius: 3px;
	box-shadow:0 0 4px #a8a8a8;
}
.paginations_links strong
{
	background:#000;
	color:#fff;
    margin: 3px;
    padding: 10px;
    border: 1px solid #a8a8a8;
    border-radius: 3px;
	box-shadow:0 0 4px #a8a8a8;
}
</style>
		  
		  
		  
        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12 footer-copyright text-center">
                <p class="mb-0">Copyright 2021 © Rental  </p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="<?php echo base_url(); ?>links/assets/js/jquery-3.5.1.min.js"></script>
    <script src="<?php echo base_url(); ?>links/datatable/jquery.dataTables.min.js"></script>

    <!-- Bootstrap js-->
    <script src="<?php echo base_url(); ?>links/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="<?php echo base_url(); ?>links/assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="<?php echo base_url(); ?>links/assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <script src="<?php echo base_url(); ?>links/assets/js/scrollbar/simplebar.js"></script>
    <script src="<?php echo base_url(); ?>links/assets/js/scrollbar/custom.js"></script>
    <!-- Sidebar jquery-->
    <script src="<?php echo base_url(); ?>links/assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="<?php echo base_url(); ?>links/assets/js/sidebar-menu.js"></script>

    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="<?php echo base_url(); ?>links/assets/js/script.js"></script>
    <!--<script src="<?php echo base_url(); ?>links/assets/js/theme-customizer/customizer.js"></script>
     login js-->
    <!-- Plugin used-->
	
	
<script>

fetch_dynamic_fields();

function fetch_dynamic_fields()
{
	$.ajax({
		url:"<?php echo base_url(); ?>Property_Control/fetch_dynamic_fields",
		type: 'POST',
		dataType:'json',
		// contentType: false,
		// processData: false,
		// data:new FormData(this),
		success:function(data)
		{
			if(data.length>0)
			{
				struct_checks="";
				for(d=0;d<data.length;d++)
				{
					var field_key=data[d].field_key;
					var field_id=data[d].id;
					
					struct_checks=struct_checks+'<div class="col-lg-3">'+
													'<div class="form-group">'+
														'<label class="checkbox-inline">'+
															'<input type="checkbox" class="dynamic_field" id="'+field_id+'_'+field_key+'" value="'+field_id+'"> '+field_key+
														'</label></div></div>';
				}
				$("#dynamic_field_div").html(struct_checks);
				
				$(".dynamic_field").on("click",function()
				{
					var check_id=$(this).attr('id');
					var split_aa=check_id.split('_');
					var f_id=split_aa[0];
					var f_val=split_aa[1];
					
					if ($(this).prop("checked"))
					{
						var struct_dynamic='<div class="col-lg-6" id="dfdiv_'+f_id+'">'+
												'<div class="form-group">'+
													'<label>'+f_val+'</label>'+
													'<input type="text" class="dynamic_fieldskey form-control" id="df_'+f_id+'"  placeholder="'+f_val+'">'+
											'</div></div>';
						$("#struct_dynamic").append(struct_dynamic);
					}
					else
					{
						$('#dfdiv_'+f_id).remove();
					}
				});
				
				
				
			}
		}
	});
}


$("#update_property_with_img").submit(function(e)
{
    e.preventDefault();
	// $('#btn_upload_img').attr('disabled','disabled');
	var ownership=$('#ownership').val();
	var slt_city=$('#slt_city option:selected').val();
	var location=$('#location option:selected').val();
	var phone=$('#phone').val();
	var exphone=$('#exphone').val();
	var pincode=$('#pincode').val();
	var paddress=$('#paddress').val();
	var cost=$('#cost').val();
	var bhk=$('#bhk option:selected').val();
	var furnishing=$('#furnishing option:selected').val();
	var floornumbers=$('#floornumbers option:selected').val();
	var food=$('#food option:selected').val();
	var religion=$('#religion option:selected').val();
	var agent=$('#agent').val();
	var propertycategory=$('#propertycategory').val();
	var propertytype=$('#propertytype').val();
	var handleby=$('#handleby').val();
	var occupation=$('#occupation').val();
	var bcondition=$('#bcondition').val();
	var facing=$('#facing').val();
	var areasize=$('#areasize').val();
	var security_amt=$('#security_amt').val();
	var majority=$('#majority').val();
	// var yesno=$('#yesno').val();
	var amenities1=$('#amenities1').val();
	var file_property=$('#file_property').val();
	var aboutproperty=$('#aboutproperty').val();
	var datevacant=$('#datevacant').val();
	var chk_mark_alloted=$('#chk_mark_alloted').val();
	var dateallot=$('#dateallot').val();
	var dateexpectvac=$('#dateexpectvac').val();
	
	var yesno=$(".yesno:checked").val();
	// console.log("yesno: "+yesno);
	
	var checked_aminities="";
	var checked_dynamic_field="";
	var checked_dynamic_key="";

	$('.amenities').each(function(){
		if($(this).prop('checked') == true)
		{
			var amenities_val=$(this).val();
			
			if(checked_aminities=="")
			{
				checked_aminities=amenities_val;
			}
			else
			{
				checked_aminities=checked_aminities+','+amenities_val;
			}
		}
	});	
	// console.log("checked_aminities: "+checked_aminities);
	
	$('.dynamic_field').each(function(){
		if($(this).prop('checked') == true)
		{
			var dynamic_field_id=$(this).attr('id');
			var split_id=dynamic_field_id.split('_');;
			
			var fid=split_id[0];
			// console.log(fid);
			// var fkey=split_id[1];
			
			if(checked_dynamic_key=="")
			{
				checked_dynamic_key=fid;
			}
			else
			{
				checked_dynamic_key=checked_dynamic_key+','+fid;
			}
			
			if(checked_dynamic_field=="")
			{
				checked_dynamic_field=$("#df_"+fid).val();
			}
			else
			{
				checked_dynamic_field=checked_dynamic_field+','+$("#df_"+fid).val();
			}
		}
	});	
	// console.log("checked_dynamic_key: "+checked_dynamic_key);
	// console.log("checked_dynamic_field: "+checked_dynamic_field);
	
	if(yesno==undefined)
	{
		alert('Please choose one of the address type');
	}
	else if(checked_aminities=="")
	{
		alert('Please choose one of the Facility');
	}
	else
	{
		var formData = new FormData(this);
		formData.append('checked_dynamic_key', checked_dynamic_key);
		formData.append('checked_dynamic_field', checked_dynamic_field);
		formData.append('checked_aminities', checked_aminities);

		  $.ajax({
			url:"<?=base_url('Property_Control/update_property')?>",
			type: 'POST',
			dataType:'json',
			contentType: false,
			processData: false,
			data:formData,
			success:function(data)
			{
				if(data.status=='1')
				{
					
					// var image = '<img src="'+data.path+'" height="70" width="100">';
					// $('#update_product_img').modal("hide");
					// $(".span1").html(data.message);
					// $(".success_popup").css("display","block");
					// $(".success_popup").fadeOut(4000); 
					// $('#image_row'+row_id).fadeIn(1000, function() {
					// $('#image_row'+row_id).html(image);
					// });
					
				}
				else
				{
					// $('#btn_upload_img').removeAttr('disabled');
					// $(".span1").html(data.message);
					// $(".success_popup").css("display","block");
					// $(".success_popup").fadeOut(4000); 
				}
			}
		});
	}

	// console.log("ownership "+ownership);
	// console.log("slt_city "+slt_city);
	// console.log("location "+location);
	// console.log("phone "+phone);
	// console.log("exphone "+exphone);
	// console.log("pincode "+pincode);
	// console.log("paddress "+paddress);
	// console.log("cost "+cost);
	// console.log("bhk "+bhk);
	// console.log("furnishing "+furnishing);
	// console.log("floornumbers "+floornumbers);
	// console.log("food "+food);
	// console.log("religion "+religion);
	// console.log("agent "+agent);
	// console.log("propertycategory "+propertycategory);
	// console.log("propertytype "+propertytype);
	// console.log("handleby "+handleby);
	// console.log("occupation "+occupation);
	// console.log("bcondition "+bcondition);
	// console.log("facing "+facing);
	// console.log("areasize "+areasize);
	// console.log("security_amt "+security_amt);
	// console.log("majority "+majority);
	// console.log("yesno "+yesno);
	// console.log("amenities1 "+amenities1);
	// console.log("file_property "+file_property);
	// console.log("aboutproperty "+aboutproperty);
	// console.log("datevacant "+datevacant);
	// console.log("chk_mark_alloted "+chk_mark_alloted);
	// console.log("dateallot "+dateallot);
	// console.log("dateexpectvac "+dateexpectvac);
	
	
	
	
	
	// console.log("bhk "+bhk);
	// console.log("bhk "+bhk);
	// console.log("bhk "+bhk);
	// console.log("bhk "+bhk);
});






var phone = localStorage.getItem("phone");
var txt_addi_mobile = localStorage.getItem("txt_addi_mobile");

// alert(phone);
// alert(txt_addi_mobile);

if(phone==""|| phone==null)
{
	// $("#phone").val("");
	// $("#exphone").val("");
}
else
{
	$("#phone").val(phone);
	$("#exphone").val(txt_addi_mobile);
}
// if(txt_addi_mobile==""|| txt_addi_mobile==null)
// {
// }
// else
// {
// }



$("#btn_update_locality").on("click",function()
{
	var txt_city=$("#txt_city option:selected").val();
	var txt_locality=$("#txt_locality").val();
	var txt_locality_id=$("#txt_locality_id").val();
	if(txt_city=="0")
	{
		alert("Invalid City Selection!");
		$("#txt_city").focus();
	}
	else if(txt_locality=="")
	{
		alert("Invalid Locality!");
		$("#txt_locality").focus();
	}
	else
	{
		$.ajax({
			type:"POST",
			url:'<?php echo base_url(); ?>update_locality',
			data:{txt_city:txt_city,txt_locality:txt_locality,txt_locality_id:txt_locality_id},
			success:function(msg_data)
			{
				alert(msg_data);
				location.reload();
			}
		});
	}
});

/* get_all_cities();

function get_all_cities()
{
	$.ajax({
		type:"POST",
		url:'<?php echo base_url(); ?>fetch_all_cities',
		dataType:'json',
		success:function(msg_data)
		{
			if(msg_data.length>0)
			{
				var struct_tbl="",s_no=0;
				for(q=0;q<msg_data.length;q++)
				{
					s_no++;
					var city_id=msg_data[q].city_id;
					var city_name=msg_data[q].city_name;
					
					struct_tbl=struct_tbl+'<option value="'+city_id+'">'+city_name+'</option>';
				}
				$("#slt_city").html('<option value="0">-- Select City --</option>'+struct_tbl);
				
			}
		}
	});
	
} */
// fetch_all_locality();

function fetch_all_locality()
{
	$.ajax({
		type:"POST",
		url:'<?php echo base_url(); ?>fetch_all_location',
		// data:{slt_city:slt_city},
		dataType:'json',
		success:function(msg_data)
		{
			if(msg_data.length>0)
			{
				var struct_tbl="",s_no=0;
				for(q=0;q<msg_data.length;q++)
				{
					s_no++;
					var location_id=msg_data[q].location_id;
					var location_name=msg_data[q].location_name;
					
					struct_tbl=struct_tbl+'<option value="'+location_name+'">'+location_name+'</option>';
				}
				$("#location").html('<option value="0">-- Select Location --</option>'+struct_tbl);
				
			}
		}
	});

}


$("#slt_city").on("change",function()
{
	var slt_city=$("#slt_city option:selected").val();
	
	$.ajax({
		type:"POST",
		url:'<?php echo base_url(); ?>fetch_all_location',
		data:{slt_city:slt_city},
		dataType:'json',
		success:function(msg_data)
		{
			if(msg_data.length>0)
			{
				var struct_tbl="",s_no=0;
				for(q=0;q<msg_data.length;q++)
				{
					s_no++;
					var location_id=msg_data[q].location_id;
					var location_name=msg_data[q].location_name;
					
					struct_tbl=struct_tbl+'<option value="'+location_name+'">'+location_name+'</option>';
				}
				$("#location").html('<option value="0">-- Select Location --</option>'+struct_tbl);
				
			}
		}
	});

	
});



























function delete_city(got_del_id)
{
	var r = confirm("Do you Really want to delete this record?");
	if (r == true)
	{
		$.ajax({
			type:"POST",
			data:{got_del_id:got_del_id},
			url:'<?php echo base_url(); ?>delete_locality',
			success:function(msg_data)
			{
				alert(msg_data);
				location.reload();
			}
		});
	}
	else
	{
	}
}

function get_locality_for_edit(got_edit_id)
{
	$.ajax({
		type:"POST",
		data:{got_edit_id:got_edit_id},
		url:'<?php echo base_url(); ?>get_locality_for_edit',
		dataType:'json',
		success:function(msg_data)
		{
			if(msg_data.length>0)
			{
				for(q=0;q<msg_data.length;q++)
				{
					var city_id=msg_data[q].city_id;
					var location_id=msg_data[q].location_id;
					var location_name=msg_data[q].location_name;
					
					$("#txt_locality").val(location_name);
					$("#txt_city").val(city_id);
					$("#txt_locality_id").val(location_id);
				}
				
				$("#btn_new_locality").css("display","inline-block");				
				$("#btn_update_locality").css("display","inline-block");				
				$("#btn_save_locality").css("display","none");				
				
			}
		}
	});
	
}

$("#btn_new_locality").on("click",function()
{
	add_new();
});

function add_new()
{
	$("#txt_city").val('');				
	$("#txt_locality").val('');				
	$("#txt_locality_id").val('');				
	$("#btn_new_locality").css("display","none");				
	$("#btn_update_locality").css("display","none");				
	$("#btn_save_locality").css("display","inline-block");				
	get_all_cities();
}


$(document).ready(function()
{
	var pageURL = $(location).attr("href");

	$("#page_url").val(pageURL);
});

</script>

	
	
	
	
  </body>

</html>