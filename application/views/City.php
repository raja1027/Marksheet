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
                  <h3>City</h3>
                </div>
                <div class="col-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>"> <i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Location Master</li>
                    <li class="breadcrumb-item active"> City </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
		  
		  
			<!-- Container-fluid starts-->
			<div class="container-fluid">
				<div class="row second-chart-list third-news-update">
					<div class="col-lg-12">
					
						<!--<ul class="nav nav-tabs">
							<li class="active"><a href="#">Home</a></li>
							<li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu 1
								<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="#">Submenu 1-1</a></li>
									<li><a href="#">Submenu 1-2</a></li>
									<li><a href="#">Submenu 1-3</a></li>
								</ul>
							</li>
							<li><a href="#">Menu 2</a></li>
							<li><a href="#">Menu 3</a></li>
						</ul>-->
					
					
						<div class="card">
							<div class="card-body">
								<!--<form>-->
									<div class="form-group">
										<label>Enter City</label>
										<input type="text" id="txt_city" class="form-control" placeholder="Enter City" />
										<input type="hidden" id="txt_city_id" class="form-control" placeholder="City Id" />
									</div>
									<br/>
									<button class="btn btn-success" id="btn_save_city">Save</button>
									<button class="btn btn-success" id="btn_update_city" style="display:none;">Update</button>
									<button class="btn btn-success" id="btn_new_city" style="display:none;">Add New City</button>
									
								<!--</form>-->
								
								<hr/>
								
								<table class="table table-bordered table-striped table-hover" id="example">
									<thead>
										<tr>
											<th>S.No.</th>
											<th>City</th>
											<th>Actions</th>
										</tr>
									</thead>
									<tbody id="tbody_city">
									</tbody>
									<thead>
										<tr>
											<th>S.No.</th>
											<th>City</th>
											<th>Actions</th>
										</tr>
									</thead>
								</table>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Container-fluid Ends-->

		  
		  
		  
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


$("#btn_save_city").on("click",function()
{
	var txt_city=$("#txt_city").val();
	if(txt_city=="")
	{
		alert("Invalid City!");
		$("#txt_city").focus();
	}
	else
	{
		$.ajax({
			type:"POST",
			url:'<?php echo base_url(); ?>save_new_city',
			data:{txt_city:txt_city},
			success:function(msg_data)
			{
				alert(msg_data);
				get_all_cities();
			}
		});
	}
});


$("#btn_update_city").on("click",function()
{
	var txt_city=$("#txt_city").val();
	var txt_city_id=$("#txt_city_id").val();
	
	if(txt_city=="")
	{
		alert("Invalid City!");
		$("#txt_city").focus();
	}
	else
	{
		$.ajax({
			type:"POST",
			url:'<?php echo base_url(); ?>btn_update_city',
			data:{txt_city:txt_city,txt_city_id:txt_city_id},
			success:function(msg_data)
			{
				alert(msg_data);
				get_all_cities();
				add_new();
			}
		});
	}
	
});


get_all_cities();

function get_all_cities()
{
	if($.fn.DataTable.isDataTable('#example'))
	{
		$('#example').dataTable().fnClearTable();
		$('#example').dataTable().fnDestroy();
	}
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
					
					struct_tbl=struct_tbl+'<tr>'+
												'<td>'+s_no+'</td>'+
												'<td>'+city_name+'</td>'+
												'<td>'+
													'<button class="btn btn-primary btn-sm btnedit" id="btnedit_'+city_id+'">Edit</button> '+
													' <button class="btn btn-primary btn-sm btndelete" id="btndelete_'+city_id+'">Delete</button>'+
												'</td>'+
										  '</tr>';
				}
				$("#tbody_city").html(struct_tbl);
				
				$(".btnedit").on("click",function()
				{
					var edit_id=$(this).attr('id');
					var splited_id=edit_id.split('_');
					
					var got_edit_id=splited_id[1];
					get_city_for_edit(got_edit_id);
				});
				
				$(".btndelete").on("click",function()
				{
					var edit_id=$(this).attr('id');
					var splited_id=edit_id.split('_');
					
					var got_del_id=splited_id[1];
					delete_city(got_del_id);
				});
				
				$('#example').DataTable();
				
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
			url:'<?php echo base_url(); ?>delete_city',
			success:function(msg_data)
			{
				alert(msg_data);
				get_all_cities();
				add_new();
			}
		});
	}
	else
	{
	}
}

function get_city_for_edit(got_edit_id)
{
	$.ajax({
		type:"POST",
		data:{got_edit_id:got_edit_id},
		url:'<?php echo base_url(); ?>get_city_for_edit',
		dataType:'json',
		success:function(msg_data)
		{
			if(msg_data.length>0)
			{
				for(q=0;q<msg_data.length;q++)
				{
					var city_id=msg_data[q].city_id;
					var city_name=msg_data[q].city_name;
					
					$("#txt_city").val(city_name);
					$("#txt_city_id").val(city_id);
				}
				
				$("#btn_new_city").css("display","inline-block");				
				$("#btn_update_city").css("display","inline-block");				
				$("#btn_save_city").css("display","none");				
				
			}
		}
	});
	
}

$("#btn_new_city").on("click",function()
{
	add_new();
});

function add_new()
{
	$("#txt_city").val('');				
	$("#txt_city_id").val('');				
	$("#btn_new_city").css("display","none");				
	$("#btn_update_city").css("display","none");				
	$("#btn_save_city").css("display","inline-block");				
}

</script>

	
	
	
	
  </body>

</html>