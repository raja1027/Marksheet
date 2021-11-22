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
    <title>Constacloud - Technical Task, Login</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>links/assets/css/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>links/assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>links/assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>links/assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>links/assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>links/assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>links/assets/css/style.css">
    <link id="color" rel="stylesheet" href="<?php echo base_url(); ?>links/assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>links/assets/css/responsive.css">
</head>
<body>
    <!-- login page start-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-7 order-1"><img class="bg-img-cover bg-center" src="<?php echo base_url(); ?>links/assets/images/login/1.jpg" alt="looginpage"></div>
        <div class="col-xl-5 p-0">
          <div class="login-card">
            <div>
              <div><a class="logo text-start" href="index.html"><img class="img-fluid for-light" src="<?php echo base_url(); ?>links/assets/images/consta_logo.png" alt="looginpage" style="width:250px;"><img class="img-fluid for-dark" src="<?php echo base_url(); ?>links/assets/images/consta_logo.png" alt="looginpage"></a></div>
              <div class="login-main"> 
                <!--<form class="theme-form">-->
                  <h4>Sign in to account</h4>
                  <p>Enter your userid & password to login</p>
                  <div class="form-group">
                    <label class="col-form-label">Userid</label>
                    <input class="form-control" type="text" required="" id="Userid" placeholder="Userid">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Password</label>
                    <div class="form-input position-relative">
                      <input class="form-control" type="password" name="password" id="password" required="" placeholder="Password">
                      <!--<div class="show-hide"><span class="show">                         </span></div>-->
                    </div>
                  </div>
				  <span style="color:red; display:none;" id="err_msg">Invalid UserId or Password</span>
                  <div class="form-group mb-0">
                    <div class="text-end mt-3">
                      <button class="btn btn-primary btn-block w-100" id="btn_login" type="submit">Sign in</button>
                    </div>
                  </div>
                  
                <!--</form>-->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- latest jquery-->
      <script src="<?php echo base_url(); ?>links/assets/js/jquery-3.5.1.min.js"></script>
      <!-- Bootstrap js-->
      <script src="<?php echo base_url(); ?>links/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
      <!-- feather icon js-->
      <script src="<?php echo base_url(); ?>links/assets/js/icons/feather-icon/feather.min.js"></script>
      <script src="<?php echo base_url(); ?>links/assets/js/icons/feather-icon/feather-icon.js"></script>
      <!-- scrollbar js-->
      <!-- Sidebar jquery-->
      <script src="<?php echo base_url(); ?>links/assets/js/config.js"></script>
      <!-- Plugins JS start-->
      <!-- Plugins JS Ends-->
      <!-- Theme js-->
      <script src="<?php echo base_url(); ?>links/assets/js/script.js"></script>
      <!-- login js-->
      <!-- Plugin used-->



<script>

$("#btn_login").on("click",function()
{
	var Userid=$("#Userid").val();
	var password=$("#password").val();
	if(Userid=="")
	{
		alert("Invalid User Id!");
		$("#Userid").focus();
	}
	else if(password=="")
	{
		alert("Invalid Password!");
		$("#password").focus();
	}
	else
	{
		$.ajax({
			type:"POST",
			url:'<?php echo base_url(); ?>check_login',
			data:{Userid:Userid,password:password},
			success:function(msg_data)
			{
				msg_data=msg_data.replace(/\n/g, "");
				console.log(msg_data);
				if(msg_data==1)
				{
					window.location.href='<?php echo base_url(); ?>admin_home';
					
				}
				else
				{
					$("#err_msg").css("display","block");
				}
				// alert(msg_data);
				// get_all_cities();
			}
		});
	}
});

</script>


    </div>
  </body>

</html>