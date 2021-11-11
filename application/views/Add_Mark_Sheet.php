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
    <title>Constacloud - Tecchnical Task</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>links/font-awesome-4.7.0/css/font-awesome.min.css">

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
                  <h3>Mark Sheet</h3>
                </div>
                <div class="col-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>"> <i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Mark Sheet</li>
                    <li class="breadcrumb-item active"> Mark Sheet </li>
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
<!-- The Modal -->
<div class="modal fade" id="myModal">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title">Add Mark Sheet</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
			</div>

			<form id="fupForm" enctype="multipart/form-data">
				<!-- Modal body -->
				<div class="modal-body">
						<div class="form-group">
							<label>Student Name</label>
							<input type="text" id="student_name" name="student_name" class="form-control" placeholder="Student Name" required />
						</div>
						<br/>
						<div class="form-group">
							<label>Class</label>
							<select class="form-control" id="student_class" name="student_class" required>
								<option value="">-- Class --</option>
								<option value="1st">1st</option>
								<option value="2nd">2nd</option>
								<option value="3rd">3rd</option>
								<option value="4th">4th</option>
								<option value="5th">5th</option>
								<option value="6th">6th</option>
								<option value="7th">7th</option>
								<option value="8th">8th</option>
								<option value="9th">9th</option>
								<option value="10th">10th</option>
								<option value="11th">11th</option>
								<option value="12th">12th</option>
							</select>
						</div>
						<br/>
						<div class="form-group">
							<label>Roll Number</label>
							<input type="text" id="roll_no" name="roll_no" class="form-control" placeholder="Roll Number" required />
						</div>
						<br/>
						<div class="form-group">
							<label>Passport Size Photo</label>
							<input type="file" id="passport_size_photo" name="passport_size_photo" class="form-control" placeholder="Passport Size Photo" required />
						</div>
						<br/>
						<div class="form-group">
							<label>Marks Details</label>
							<table class="table table-bordered table-hover table-striped">
								<thead>
									<tr style="background: #cbc2c2;">
										<th>Subject</th>
										<th>Total</th>
										<th>Obtained Mark</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Maths</td>
										<td>100</td>
										<td><input type="number" class="form-control" id="maths_marks" name="maths_marks" placeholder="Enter Obtained Mark" required /></td>
									</tr>
									<tr>
										<td>Physics</td>
										<td>100</td>
										<td><input type="number" class="form-control" id="phy_marks" name="phy_marks" placeholder="Enter Obtained Mark" required /></td>
									</tr>
									<tr>
										<td>Chemistry</td>
										<td>100</td>
										<td><input type="number" class="form-control" id="chem_marks" name="chem_marks" placeholder="Enter Obtained Mark" required /></td>
									</tr>
									<tr>
										<td>Hindi</td>
										<td>100</td>
										<td><input type="number" class="form-control" id="hindi_marks" name="hindi_marks" placeholder="Enter Obtained Mark" required /></td>
									</tr>
									<tr>
										<td>English</td>
										<td>100</td>
										<td><input type="number" class="form-control" id="english_marks" name="english_marks" placeholder="Enter Obtained Mark" required /></td>
									</tr>
								</tbody>
								<tfoot>
									<tr style="background: #f3f3f3;">
										<th>Total</th>
										<th>500</th>
										<th class="total_ontained_marks">-</th>
									</tr>
									<tr style="background: #cbc2c2;">
										<th >Score Percentage</th>
										<th class="total_score_percentage" colspan="2">-</th>
									</tr>
								</tfoot>
							</table>
						</div>
				</div>

			<!-- Modal footer -->
				<div class="modal-footer">
					<button type="submit" class="btn btn-success" id="btn_save">Save</button>
					<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
				</div>
			</form>

		</div>
	</div>
</div>					
						<div class="card">
							<div class="card-body">
							
								<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">Add Marksheet</button>
							
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
                <p class="mb-0">Copyright 2021 © Constacloud  </p>
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

$(document).ready(function(e)
{
    $("#fupForm").on('submit', function(e)
    {
        e.preventDefault();
		
		// alert("alert");
		var total_ontained_marks=$(".total_ontained_marks").html();
		var total_score_percentage=$(".total_score_percentage").html();
		
		var formData = new FormData(this);
		formData.append('total_ontained_marks', total_ontained_marks);
		formData.append('total_score_percentage', total_score_percentage);
		
		  $.ajax({
			url:"<?=base_url('Add_marksheet/save_marksheet')?>",
			type: 'POST',
			dataType:'json',
			contentType: false,
			processData: false,
			data:formData,
			success:function(data)
			{
				
			}
		});

    });
});




$("#maths_marks").on("keyup",function()
{
	calculate_total_and_percent();
});

$("#phy_marks").on("keyup",function()
{
	calculate_total_and_percent();
});

$("#chem_marks").on("keyup",function()
{
	calculate_total_and_percent();
});

$("#hindi_marks").on("keyup",function()
{
	calculate_total_and_percent();
});

$("#english_marks").on("keyup",function()
{
	calculate_total_and_percent();
});



function calculate_total_and_percent()
{
	var maths_marks=$("#maths_marks").val();
	var phy_marks=$("#phy_marks").val();
	var chem_marks=$("#chem_marks").val();
	var hindi_marks=$("#hindi_marks").val();
	var english_marks=$("#english_marks").val();
	
	if(maths_marks<0 || maths_marks=="" || maths_marks==0)
	{
		maths_marks=0;
	}
	
	if(phy_marks<0 || phy_marks=="" || phy_marks==0)
	{
		phy_marks=0;
	}
	
	if(chem_marks<0 || chem_marks=="" || chem_marks==0)
	{
		chem_marks=0;
	}
	
	if(hindi_marks<0 || hindi_marks=="" || hindi_marks==0)
	{
		hindi_marks=0;
	}
	
	if(english_marks<0 || english_marks=="" || english_marks==0)
	{
		english_marks=0;
	}
	
	
	var total_marks=parseInt(maths_marks)+parseInt(phy_marks)+parseInt(chem_marks)+parseInt(hindi_marks)+parseInt(english_marks);
	
	var percentage_val=total_marks/5;
	
	$(".total_ontained_marks").html(total_marks);
	$(".total_score_percentage").html(percentage_val);
	
}


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