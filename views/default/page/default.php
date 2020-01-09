<?php
/**
 * Elgg pageshell
 * The standard HTML page shell that everything else fits into
 *
 * @package Elgg
 * @subpackage Core
 *
 * @uses $vars['head']        Parameters for the <head> element
 * @uses $vars['body_attrs']  Attributes of the <body> tag
 * @uses $vars['body']        The main content of the page
 * @uses $vars['sysmessages'] A 2d array of various message registers, passed from system_messages()
 */

// render content before head so that JavaScript and CSS can be loaded. See #4032

$messages = elgg_view('page/elements/messages', array('object' => $vars['sysmessages']));

$header = elgg_view('page/elements/header', $vars);
$navbar = elgg_view('page/elements/navbar', $vars);
$content = elgg_view('page/elements/body', $vars);
$footer = elgg_view('page/elements/footer', $vars);
$site_url = elgg_get_site_url();
$site = elgg_get_site_entity();
$site_name = $site->name;
 
$user = elgg_get_logged_in_user_entity();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo $site_url?>mod/purple-theme/vendors/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?php echo $site_url?>mod/purple-theme/vendors/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo $site_url?>mod/purple-theme/vendors/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?php echo $site_url?>mod/purple-theme/vendors/assets/images/favicon.png" />
    <?php echo elgg_view('page/elements/head', $vars['head']);?>
  </head>
  <body >
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <?php echo elgg_view('page/elements/purple_navbar_menu');?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <?php echo elgg_view('page/elements/purple_sidebar_menu');?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
             
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-home"></i>
                </span> <?php echo $site_name; ?> </h3>
              
            </div>
              
              <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    
                     
                    
                    <div class="d-flex mt-5 align-items-top">
                      
                      <div class="mb-0 flex-grow">
                        
                        <p class="mb-0 font-weight-light"><?php echo $content ?></p>
                      </div>
                       
                    </div>
                  </div>
                </div>
              </div>
            </div>
             
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2017 <a href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights reserved.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    
    <!-- plugins:js -->
    <script src="<?php echo $site_url?>mod/purple-theme/vendors/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?php echo $site_url?>mod/purple-theme/vendors/assets/vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo $site_url?>mod/purple-theme/vendors/assets/js/off-canvas.js"></script>
    <script src="<?php echo $site_url?>mod/purple-theme/vendors/assets/js/hoverable-collapse.js"></script>
    <script src="<?php echo $site_url?>mod/purple-theme/vendors/assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="<?php echo $site_url?>mod/purple-theme/vendors/assets/js/dashboard.js"></script>
    <script src="<?php echo $site_url?>mod/purple-theme/vendors/assets/js/todolist.js"></script>
    <!-- End custom js for this page -->
    <?php echo elgg_view('page/elements/foot');?>
  </body>
</html>