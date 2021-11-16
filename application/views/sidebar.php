		        <!-- Page Sidebar Start-->
        <div class="sidebar-wrapper">
          <div>
            <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light" src="<?php echo base_url(); ?>links/assets/images/consta_logo.png" alt="" width="150"><img class="img-fluid for-dark" src="<?php echo base_url(); ?>links/assets/images/consta_logo.png" alt=""></a>
              <div class="back-btn"><i class="fa fa-angle-left"></i></div>
              <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
            </div>
            <!--<div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid" src="<?php echo base_url(); ?>links/assets/images/logo/logo-icon.png" alt=""></a></div>-->
            <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid" src="<?php echo base_url(); ?>links/assets/images/consta_logo.png" alt=""></a></div>
            <nav class="sidebar-main">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                  <li class="back-btn"><a href="index.html"><img class="img-fluid" src="<?php echo base_url(); ?>links/assets/images/logo/logo-icon.png" alt=""></a>
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                  </li>
                  <!--<li class="sidebar-main-title">
                    <div>
                      <h6 class="lan-1">General</h6>
                      <p class="lan-2">Dashboards,widgets & layout.</p>
                    </div>
                  </li>-->
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="index.php"><i data-feather="home"> </i><span>Dashboard</span></a></li>

                  <!--<li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href=""><i data-feather="home"> </i><span>Location Master</span></a></li>
					-->


                  <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i data-feather="layout"></i><span class="">Mark Sheet</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="<?php echo base_url(); ?>Add_Mark_Sheet">Add Mark Sheet</a></li>
                      <li><a href="<?php echo base_url(); ?>getstudents">View Mark Sheet</a></li>
                    </ul>
                  </li>


                  <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="<?php echo base_url(); ?>admin_logout"><i data-feather="log-out"> </i><span>Logout</span></a></li>

                </ul>
              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </nav>
          </div>
        </div>
        <!-- Page Sidebar Ends-->
<style>

.previous,.next
{
	background:#f3f3f3 !important;
	box-shadow:0 0 5px #a8a8a8 !important;
	padding:5px !important;
	margin:4px !important;
	border-radius:2px;
	border:solid #a8a8a8 1px
}
.paginate_button
{
	background:#f3f3f3 !important;
	box-shadow:0 0 5px #a8a8a8 !important;
	padding:5px !important;
	margin:4px !important;
	border-radius:2px;
	border:solid #a8a8a8 1px
}
.paging_simple_numbers .current
{
	background:#000 !important;
	color:#fff;
	box-shadow:0 0 5px #a8a8a8 !important;
	padding:5px !important;
	margin:4px !important;
	border-radius:2px;
	border:solid #a8a8a8 1px
}</style>