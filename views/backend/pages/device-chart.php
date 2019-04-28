<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>CloudUi Premium Bootstrap Admin Dashboard Template</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../vendors/iconfonts/simple-line-icon/css/simple-line-icons.css">
  <link rel="stylesheet" href="../vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <?php 
  include "header.php";
   ?>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div id="chart-containter" class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Device By Device</h4>
                  <div class="google-chart-container">
                    <div id="device-chart" class="google-charts"></div>
                  </div>
                </div>
              </div>
            </div>


              <div class="form-group">
                    <div class="input-group">
                      
                      <form id="emailform">
                      <div  class="col-lg-12 grid-margin stretch-card">
                        
                      <input type="text" id="email" class="form-control" placeholder="email@email.com" aria-label="Username">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Email</span>
                      </div>
                      <button type="button" id="submit" class="btn btn-primary" onclick="showSuccessToast()">Send to email</button>
                      </form>
                    </div>
                  </div>
                    </div>
          

            <div class="btn-group">
                      <button type="button" class="btn btn-primary">Save as</button>
                      <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdownMenuSplitButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuSplitButton1" x-placement="top-start" style="position: relative; transform: translate3d(142px, -227px, 0px); top: 0px; left: 0px; will-change: transform;">
                        <form method="POST" id="make_pdf" action="create_pdf.php">
                          <input type="hidden" name="hidden_html" id="hidden_html">

                          <button class="btn btn-link btn-fw">Export as PDF</button>
                          
                        </form>
                        
                        
                        <div class="dropdown-divider"></div>
                        <div id="png">

                        </div>
                      </div>
                    </div>

            
            
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.php -->

        <footer class="footer">
          <div class="w-100 clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018 <a href="http://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="icon-heart text-danger"></i></span>
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
  <script src="../vendors/js/vendor.bundle.base.js"></script>
  <script src="../vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="https://www.gstatic.com/charts/loader.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../js/toastDemo.js"></script>
  <script src="../js/device-chart.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
