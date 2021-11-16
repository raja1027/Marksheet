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

<style>
body
{
	font-size: 10px !important;
}
</style>

    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->

      <!-- Page Body Start-->
      <div class="page-body-wrapper">

		<!-- sidebar code -->
		<?php
		//include('sidebar.php');
		?>
		<!-- sidebar code -->

        <div class="page-body1">
          <div class="container-fluid">        
            <div class="page-title">
              <div class="row">
                <div class="col-12">
                  <h3 align="center">Students Marksheet</h3>
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
	
									<div class="col-lg-3">
										<?php echo form_open_multipart('students_list'); ?>
										<div class="form-group">
											<label>Search Student</label>
											<input type="text" class="form-control" name="search_all" value="<?php echo $search_all; ?>" placeholder="Search by Student Name" />
										</div>
									</div>
									<div class="col-lg-3">
										<div class="form-group">
											<label>Short By</label>
											<select class="form-control" name="short_field" value="<?php echo $short_by; ?>">
												<option value="stud_name">Student Name</option>
												<option value="roll_no">Roll No</option>
												<option value="maths_marks">Maths Marks</option>
												<option value="phy_marks">Physics Marks</option>
												<option value="chem_marks">Chemistry</option>
												<option value="hindi_marks">Hindi Marks</option>
												<option value="english_marks">English Marks</option>
											</select>
										</div>
									</div>
									<div class="col-lg-3">
										<div class="form-group">
											<label>Short ASC/DESC</label>
											<select class="form-control" name="short_by" value="<?php echo $short_by; ?>">
												<option value="ASC">Ascending order</option>
												<option value="DESC">Descending order</option>
											</select>
										</div>
									</div>
									<div class="col-lg-2">
										<br/>
										<input type="submit" name="submit" value="Search" class="btn btn-primary  btn-success" style="margin-top:8px;" />
										</form>
									</div>
									<div class="col-lg-12">
										<br/>
										<br/>
									</div>
								</div>
								
								<table class="table table-bordered table-striped table-hover" id="example11">
									<thead>
										<tr>
											<th>S.No.</th>
											<th>Student Name</th>
											<th>Class</th>
											<th>Roll No.</th>
											<th>Photo</th>
											<th>Maths</th>
											<th>Physics</th>
											<th>Chemestry</th>
											<th>Hindi</th>
											<th>English</th>
											<!--<th>Total Marks</th>
											<th>Total Obtained</th>
											<th>Percentage</th>-->
										</tr>
									</thead>
									<tbody id="tbody_city">
										<?php
										for ($i = 0; $i < count($student_list); ++$i)
										{
										?>
											<tr>
												<td><?php echo ($page+$i+1); ?></td>

												<td><?php echo $student_list[$i]->stud_name; ?></td>
												<td><?php echo $student_list[$i]->class; ?></td>
												<td><?php echo $student_list[$i]->roll_no; ?></td>
												<td><img src="<?php echo base_url(); ?>passport_images/<?php echo $student_list[$i]->passport_size_image; ?>" width="100" height="100" /></td>
												<td><?php echo $student_list[$i]->maths_marks; ?></td>
												<td><?php echo $student_list[$i]->phy_marks; ?></td>
												<td><?php echo $student_list[$i]->chem_marks; ?></td>
												<td><?php echo $student_list[$i]->hindi_marks; ?></td>
												<td><?php echo $student_list[$i]->english_marks; ?></td>
												<!--<td>500</td>
												<td><?php //echo $student_list[$i]->total_ontained_marks; ?></td>
												<td><?php //echo $student_list[$i]->total_score_percentage; ?></td>-->

											</tr>
										<?php
										} 
										?>
										

										<!-- locality server pagination -->
									</tbody>
									<thead>
										<tr>
											<th>S.No.</th>
											<th>Student Name</th>
											<th>Class</th>
											<th>Roll No.</th>
											<th>Photo</th>
											<th>Maths</th>
											<th>Physics</th>
											<th>Chemestry</th>
											<th>Hindi</th>
											<th>English</th>
											<!--<th>Total Marks</th>
											<th>Total Obtained</th>
											<th>Percentage</th>-->
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
        <!-- footer start
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12 footer-copyright text-center">
                <p class="mb-0">Copyright 2021 © Rental  </p>
              </div>
            </div>
          </div>
        </footer>-->
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
</script>

	
	
	
	
  </body>

</html>