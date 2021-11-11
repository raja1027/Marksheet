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
                  <h3>Residential Property</h3>
                </div>
                <div class="col-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>"> <i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">View Property</li>
                    <li class="breadcrumb-item active"> Residential Property </li>
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

								
								<div class="row">

									<div class="col-lg-6">
										<?php echo form_open_multipart('ViewResidencialProperty'); ?>
											<div class="form-group">
													
												<input type="text" class="form-control" name="search_all" value="<?php echo $search_all; ?>" placeholder="Search by location" />
											</div>
									</div>
									<div class="col-lg-6">
											<input type="submit" name="submit" value="Search" class="btn btn-primary  btn-success"/>
										</form>
									</div>
								</div>
								
								<table class="table table-bordered table-striped table-hover" id="example11">
									<thead>
										<tr>
											<th>S.No.</th>
											<th>Details</th>
											<th>Cost</th>
											<th>Security Amt</th>
											<th>Location</th>
											<th>Area</th>
											<th>Actions</th>
										</tr>
									</thead>
									<tbody id="tbody_city">
										<!-- locality server pagination 
										<?php //foreach ($locality_list as $locality_lists): ?>
											<tr>
												<td><?//= ($page+1); ?></td>
												<td><?//= $locality_lists->location_name ?></td>
												<td><?//= $locality_lists->location_name ?></td>
												<td><?//= $locality_lists->location_name ?></td>
											</tr>
										<?php //endforeach; ?>
										-->
										
										<?php //foreach ($property_list as $locality_lists): ?>
										<?php
										for ($i = 0; $i < count($property_list); ++$i)
										{
										?>
											<tr>
												<td><?php echo ($page+$i+1); ?></td>

												<td><b>Owner:</b> <?php echo $property_list[$i]->ownership; ?>
												<br/><b>Location:</b> <?php echo $property_list[$i]->location; ?>
												<br/><b>Contact:</b> <?php echo $property_list[$i]->phone; ?>
												<br/><b>Religion:</b> <?php echo $property_list[$i]->religion; ?>
												<br/><b>Address:</b> <?php echo $property_list[$i]->address; ?>
												<br/><b>Occupation:</b> <?php echo $property_list[$i]->occupation; ?>
												<br/><b>Property Type:</b> <?php echo $property_list[$i]->propertytype; ?>
												<br/><b>Property Category:</b> <?php echo $property_list[$i]->propertycategory; ?></td>
												<td><?php echo $property_list[$i]->cost; ?></td>
												<td><?php echo $property_list[$i]->security_amt; ?></td>
												<td><?php echo $property_list[$i]->location; ?></td>
												<td><?php echo $property_list[$i]->areasize; ?></td>

												<td style="font-size:16px;">
													<a onClick="get_property_for_edit('<?php echo $property_list[$i]->phone; ?>','<?php echo $property_list[$i]->exphone; ?>')" class="btn btn-primary btn-sm"><i  class="fa fa-pencil-square-o" aria-hidden="true" ></i> Edit</a> 
													<!--<br/>
													&nbsp;&nbsp; <a id="url" onClick="delete_city(<?php echo $property_list[$i]->id; ?>)" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>-->
												</td>
											</tr>
										<?php
										} 
										?>
										

										<!-- locality server pagination -->
									</tbody>
									<thead>
										<tr>
											<th>S.No.</th>
											<th>Details</th>
											<th>Cost</th>
											<th>Security Amt</th>
											<th>Location</th>
											<th>Area</th>
											<th>Actions</th>
										</tr>
									</thead>
								</table>
								
								<div class="row">
									<div class="col-lg-12 paginations_links">
											<?php echo $links; ?>
									</div>
								</div>
								
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

function get_property_for_edit(contact_no,exphone)
{
	var txt_mobile=contact_no;
	var txt_addi_mobile=exphone;
	
	

	$.ajax({
		type:"POST",
		url:'<?php echo base_url(); ?>fetch_prop_mobile_and_next',
		data:{txt_mobile:txt_mobile,txt_addi_mobile:txt_addi_mobile},
		// dataType:"json",
		success:function(msg_data)
		{
			localStorage.setItem("txt_mobile", txt_mobile);
			localStorage.setItem("txt_addi_mobile", txt_addi_mobile);
			window.location.href='<?php echo base_url(); ?>next_to_add_property';
		}
	});
}



$("#btn_save_locality").on("click",function()
{
	var txt_city=$("#txt_city option:selected").val();
	var txt_locality=$("#txt_locality").val();
	
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
			url:'<?php echo base_url(); ?>save_new_locality',
			data:{txt_city:txt_city,txt_locality:txt_locality},
			success:function(msg_data)
			{
				alert(msg_data);
				location.reload();
			}
		});
	}
});


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

get_all_cities();

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
				$("#txt_city").html('<option value="0">-- Select City --</option>'+struct_tbl);
				
			}
		}
	});
	
}




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