<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>CloudUi Premium Bootstrap Admin Dashboard Template</title>
  <!-- plugins:css -->
   <link rel="stylesheet" href="../../vendors/iconfonts/simple-line-icon/css/simple-line-icons.css">
   <link rel="stylesheet" href="../../vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
   <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
   <link rel="stylesheet" href="../../vendors/css/vendor.bundle.addons.css">
   <!-- endinject -->
   <!-- plugin css for this page -->
   <link rel="stylesheet" href="../../vendors/summernote/dist/summernote-bs4.css">
   <!-- End plugin css for this page -->
   <!-- inject:css -->
   <link rel="stylesheet" href="../../css/style.css">
   <!-- endinject -->
   <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_horizontal-navbar.html -->
    <nav class="navbar horizontal-layout col-lg-12 col-12 p-0">
      <div class="nav-top flex-grow-1">
        <div class="container d-flex flex-row h-100 align-items-center">
          <div class="text-center navbar-brand-wrapper d-flex align-items-center">
            <a class="navbar-brand brand-logo" href="../../index.html"><img src="../../images/logo.svg" alt="logo"/></a>
            <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../../images/logo-mini.svg" alt="logo"/></a>
          </div>
          <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between flex-grow-1">
            <form class="search-field d-none d-md-flex" action="#">
              <div class="form-group mb-0">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-magnifier"></i></span>
                  </div>
                  <input type="text" class="form-control" placeholder="search here...">
                </div>
              </div>
            </form>
            <ul class="navbar-nav navbar-nav-right mr-0 ml-auto">
              <li class="nav-item dropdown d-none d-lg-flex nav-language">
                <div class="nav-link">
                  <span class="dropdown-toggle btn btn-sm" id="languageDropdown" data-toggle="dropdown">English
                    <i class="flag-icon flag-icon-gb ml-2"></i>
                  </span>
                  <div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">
                    <a class="dropdown-item font-weight-medium">
                      French
                      <i class="flag-icon flag-icon-fr ml-2"></i>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item font-weight-medium">
                      Espanol
                      <i class="flag-icon flag-icon-es ml-2"></i>
                    </a>
                    <div class="dropdown-divider"></div>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item font-weight-medium">
                      Arabic
                      <i class="flag-icon flag-icon-sa ml-2"></i>
                    </a>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                  <i class="icon-envelope mx-0"></i>
                  <span class="count"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                  <div class="dropdown-item">
                    <p class="mb-0 font-weight-normal float-left">You have 7 unread mails
                    </p>
                    <span class="badge badge-info badge-pill float-right">View all</span>
                  </div>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                        <img src="https://via.placeholder.com/36x36" alt="image" class="profile-pic">
                    </div>
                    <div class="preview-item-content flex-grow">
                      <h6 class="preview-subject ellipsis font-weight-medium">David Grey
                        <span class="float-right font-weight-light small-text">1 Minutes ago</span>
                      </h6>
                      <p class="font-weight-light small-text">
                        The meeting is cancelled
                      </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                        <img src="https://via.placeholder.com/36x36" alt="image" class="profile-pic">
                    </div>
                    <div class="preview-item-content flex-grow">
                      <h6 class="preview-subject ellipsis font-weight-medium">Tim Cook
                        <span class="float-right font-weight-light small-text">15 Minutes ago</span>
                      </h6>
                      <p class="font-weight-light small-text">
                        New product launch
                      </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                        <img src="https://via.placeholder.com/36x36" alt="image" class="profile-pic">
                    </div>
                    <div class="preview-item-content flex-grow">
                      <h6 class="preview-subject ellipsis font-weight-medium"> Johnson
                        <span class="float-right font-weight-light small-text">18 Minutes ago</span>
                      </h6>
                      <p class="font-weight-light small-text">
                        Upcoming board meeting
                      </p>
                    </div>
                  </a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <i class="icon-bell"></i>
                  <span class="count"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <a class="dropdown-item py-3">
                    <p class="mb-0 font-weight-medium float-left">You have 4 new notifications
                    </p>
                    <span class="badge badge-pill badge-info float-right">View all</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-success">
                        <i class="icon-exclamation mx-0"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <h6 class="preview-subject font-weight-normal text-dark mb-1">Application Error</h6>
                      <p class="font-weight-light small-text mb-0">
                        Just now
                      </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-warning">
                        <i class="icon-bubble mx-0"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <h6 class="preview-subject font-weight-normal text-dark mb-1">Settings</h6>
                      <p class="font-weight-light small-text mb-0">
                        Private message
                      </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-info">
                        <i class="icon-user-following mx-0"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <h6 class="preview-subject font-weight-normal text-dark mb-1">New user registration</h6>
                      <p class="font-weight-light small-text mb-0">
                        2 days ago
                      </p>
                    </div>
                  </a>
                </div>
              </li>
              <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                  <img src="https://via.placeholder.com/39x39" alt="profile"/>
                  <span class="nav-profile-name">Mittie McLaughlin</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                  <a class="dropdown-item">
                    <i class="icon-settings text-primary mr-2"></i>
                    Settings
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item">
                    <i class="icon-logout text-primary mr-2"></i>
                    Logout
                  </a>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="icon-menu text-dark"></span>
            </button>
          </div>
        </div>
      </div>
      <div class="nav-bottom">
        <div class="container">
          <ul class="nav page-navigation">
            <li class="nav-item">
              <a href="../../index.html" class="nav-link"><i class="link-icon icon-screen-desktop"></i><span class="menu-title">Dashboard</span></a>
            </li>
            <li class="nav-item">
              <a href="../../pages/widgets.html" class="nav-link"><i class="link-icon icon-disc"></i><span class="menu-title">Widgets</span></a>
            </li>
            <li class="nav-item mega-menu">
              <a href="#" class="nav-link"><i class="link-icon icon-film"></i><span class="menu-title">UI Elements</span><i class="menu-arrow"></i></a>
              <div class="submenu">
                <div class="col-group-wrapper row">
                  <div class="col-group col-md-4">
                    <div class="row">
                      <div class="col-12">
                        <p class="category-heading">Basic Elements</p>
                        <div class="submenu-item">
                          <div class="row">
                            <div class="col-md-6">
                              <ul>
                                <li class="nav-item"><a class="nav-link" href="../../pages/ui-features/accordions.html">Accordion</a></li>
                                <li class="nav-item"><a class="nav-link" href="../../pages/ui-features/buttons.html">Buttons</a></li>
                                <li class="nav-item"><a class="nav-link" href="../../pages/ui-features/badges.html">Badges</a></li>
                                <li class="nav-item"><a class="nav-link" href="../../pages/ui-features/breadcrumbs.html">Breadcrumbs</a></li>
                                <li class="nav-item"><a class="nav-link" href="../../pages/ui-features/dropdowns.html">Dropdown</a></li>
                                <li class="nav-item"><a class="nav-link" href="../../pages/ui-features/modals.html">Modals</a></li>
                              </ul>
                            </div>
                            <div class="col-md-6">
                              <ul>
                                <li class="nav-item"><a class="nav-link" href="../../pages/ui-features/progress.html">Progress bar</a></li>
                                <li class="nav-item"><a class="nav-link" href="../../pages/ui-features/pagination.html">Pagination</a></li>
                                <li class="nav-item"><a class="nav-link" href="../../pages/ui-features/tabs.html">Tabs</a></li>
                                <li class="nav-item"><a class="nav-link" href="../../pages/ui-features/typography.html">Typography</a></li>
                                <li class="nav-item"><a class="nav-link" href="../../pages/ui-features/tooltips.html">Tooltip</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-group col-md-4">
                    <div class="row">
                      <div class="col-12">
                        <p class="category-heading">Advanced Elements</p>
                        <div class="submenu-item">
                          <div class="row">
                            <div class="col-md-6">
                              <ul>
                                <li class="nav-item"><a class="nav-link" href="../../pages/ui-features/dragula.html">Dragula</a></li>
                                <li class="nav-item"><a class="nav-link" href="../../pages/ui-features/carousel.html">Carousel</a></li>
                                <li class="nav-item"><a class="nav-link" href="../../pages/ui-features/clipboard.html">Clipboard</a></li>
                                <li class="nav-item"><a class="nav-link" href="../../pages/ui-features/context-menu.html">Context Menu</a></li>
                                <li class="nav-item"><a class="nav-link" href="../../pages/ui-features/loaders.html">Loader</a></li>
                                <li class="nav-item"><a class="nav-link" href="../../pages/ui-features/slider.html">Slider</a></li>
                              </ul>
                            </div>
                            <div class="col-md-6">
                              <ul>
                                <li class="nav-item"><a class="nav-link" href="../../pages/ui-features/popups.html">Popup</a></li>
                                <li class="nav-item"><a class="nav-link" href="../../pages/ui-features/notifications.html">Notification</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-group col-md-4">
                    <p class="category-heading">Icons</p>
                    <ul class="submenu-item">
                      <li class="nav-item"><a class="nav-link" href="../../pages/icons/flag-icons.html">Flag Icons</a></li>
                      <li class="nav-item"><a class="nav-link" href="../../pages/icons/font-awesome.html">Font Awesome</a></li>
                      <li class="nav-item"><a class="nav-link" href="../../pages/icons/simple-line-icon.html">Simple Line Icons</a></li>
                      <li class="nav-item"><a class="nav-link" href="../../pages/icons/themify.html">Themify Icons</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Forms</span><i class="menu-arrow"></i></a>
              <div class="submenu">
                <ul class="submenu-item">
                  <li class="nav-item"><a class="nav-link" href="../../pages/forms/basic_elements.html">Basic Elements</a></li>
                  <li class="nav-item"><a class="nav-link" href="../../pages/forms/advanced_elements.html">Advanced Elements</a></li>
                  <li class="nav-item"><a class="nav-link" href="../../pages/forms/validation.html">Validation</a></li>
                  <li class="nav-item"><a class="nav-link" href="../../pages/forms/wizard.html">Wizard</a></li>
                  <li class="nav-item"><a class="nav-link" href="../../pages/forms/text_editor.html">Text Editor</a></li>
                  <li class="nav-item"><a class="nav-link" href="../../pages/forms/code_editor.html">Code Editor</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item mega-menu">
              <a href="#" class="nav-link"><i class="link-icon icon-pie-chart"></i><span class="menu-title">Data</span><i class="menu-arrow"></i></a>
              <div class="submenu">
                <div class="col-group-wrapper row">
                  <div class="col-group col-md-6">
                    <p class="category-heading">Charts</p>
                    <div class="submenu-item">
                      <div class="row">
                        <div class="col-md-6">
                          <ul>
                            <li class="nav-item"><a class="nav-link" href="../../pages/charts/chartjs.html">Chart Js</a></li>
                            <li class="nav-item"><a class="nav-link" href="../../pages/charts/morris.html">Morris</a></li>
                            <li class="nav-item"><a class="nav-link" href="../../pages/charts/flot-chart.html">Flot</a></li>
                            <li class="nav-item"><a class="nav-link" href="../../pages/charts/google-charts.html">Google Chart</a></li>
                          </ul>
                        </div>
                        <div class="col-md-6">
                          <ul>
                            <li class="nav-item"><a class="nav-link" href="../../pages/charts/sparkline.html">Sparkline</a></li>
                            <li class="nav-item"><a class="nav-link" href="../../pages/charts/c3.html">C3 Chart</a></li>
                            <li class="nav-item"><a class="nav-link" href="../../pages/charts/chartist.html">Chartist</a></li>
                            <li class="nav-item"><a class="nav-link" href="../../pages/charts/justGage.html">JustGage</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-group col-md-3">
                    <p class="category-heading">Table</p>
                    <ul class="submenu-item">
                      <li class="nav-item"><a class="nav-link" href="../../pages/tables/basic-table.html">Basic Table</a></li>
                      <li class="nav-item"><a class="nav-link" href="../../pages/tables/data-table.html">Data Table</a></li>
                      <li class="nav-item"><a class="nav-link" href="../../pages/tables/js-grid.html">Js-grid</a></li>
                      <li class="nav-item"><a class="nav-link" href="../../pages/tables/sortable-table.html">Sortable Table</a></li>
                    </ul>
                  </div>
                  <div class="col-group col-md-3">
                    <p class="category-heading">Maps</p>
                    <ul class="submenu-item">
                      <li class="nav-item"><a class="nav-link" href="../../pages/maps/mapeal.html">Mapeal</a></li>
                      <li class="nav-item"><a class="nav-link" href="../../pages/maps/vector-map.html">Vector Map</a></li>
                      <li class="nav-item"><a class="nav-link" href="../../pages/maps/google-maps.html">Google Map</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item mega-menu">
              <a href="#" class="nav-link"><i class="link-icon icon-wallet"></i><span class="menu-title">Pages</span><i class="menu-arrow"></i></a>
              <div class="submenu">
                <div class="col-group-wrapper row">
                  <div class="col-group col-md-3">
                    <p class="category-heading">User Pages</p>
                    <ul class="submenu-item">
                      <li class="nav-item"><a class="nav-link" href="../../pages/samples/login.html">Login</a></li>
                      <li class="nav-item"><a class="nav-link" href="../../pages/samples/login-2.html">Login 2</a></li>
                      <li class="nav-item"><a class="nav-link" href="../../pages/samples/register.html">Register</a></li>
                      <li class="nav-item"><a class="nav-link" href="../../pages/samples/register-2.html">Register 2</a></li>
                      <li class="nav-item"><a class="nav-link" href="../../pages/samples/lock-screen.html">Lockscreen</a></li>
                    </ul>
                  </div>
                  <div class="col-group col-md-3">
                    <p class="category-heading">Error Pages</p>
                    <ul class="submenu-item">
                      <li class="nav-item"><a class="nav-link" href="../../pages/samples/error-400.html">400</a></li>
                      <li class="nav-item"><a class="nav-link" href="../../pages/samples/error-404.html">404</a></li>
                      <li class="nav-item"><a class="nav-link" href="../../pages/samples/error-500.html">500</a></li>
                      <li class="nav-item"><a class="nav-link" href="../../pages/samples/error-505.html">505</a></li>
                    </ul>
                  </div>
                  <div class="col-group col-md-3">
                    <p class="category-heading">E-commerce</p>
                    <ul class="submenu-item">
                      <li class="nav-item"><a class="nav-link" href="../../pages/samples/invoice.html">Invoice</a></li>
                      <li class="nav-item"><a class="nav-link" href="../../pages/samples/pricing-table.html">Pricing Table</a></li>
                      <li class="nav-item"><a class="nav-link" href="../../pages/samples/orders.html">Orders</a></li>
                    </ul>
                  </div>
                  <div class="col-group col-md-3">
                    <p class="category-heading">General</p>
                    <ul class="submenu-item">
                      <li class="nav-item"><a class="nav-link" href="../../pages/samples/search-results.html">Search Results</a></li>
                      <li class="nav-item"><a class="nav-link" href="../../pages/samples/profile.html">Profile</a></li>
                      <li class="nav-item"><a class="nav-link" href="../../pages/samples/timeline.html">Timeline</a></li>
                      <li class="nav-item"><a class="nav-link" href="../../pages/samples/news-grid.html">News grid</a></li>
                      <li class="nav-item"><a class="nav-link" href="../../pages/samples/portfolio.html">Portfolio</a></li>
                      <li class="nav-item"><a class="nav-link" href="../../pages/samples/faq.html">FAQ</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link"><i class="link-icon icon-calculator"></i><span class="menu-title">Apps</span><i class="menu-arrow"></i></a>
              <div class="submenu">
                <ul class="submenu-item">
                  <li class="nav-item"><a class="nav-link" href="../../pages/apps/email.html">Email</a></li>
                  <li class="nav-item"><a class="nav-link" href="../../pages/apps/calendar.html">Calendar</a></li>
                  <li class="nav-item"><a class="nav-link" href="../../pages/apps/todo.html">Todo List</a></li>
                  <li class="nav-item"><a class="nav-link" href="../../pages/apps/gallery.html">Gallery</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a href="../../pages/documentation/documentation.html" class="nav-link"><i class="link-icon icon-docs"></i><span class="menu-title">Documentation</span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row grid-margin">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">summernote Editor</h4>
                  <div id="summernoteExample">
                    <h4>The standard Lorem Ipsum passage, used since the 1500s</h4>
                    <img src="https://via.placeholder.com/256x256" class="ml-2 mb-2 w-25" alt="sample image">
                    <p class="text-justify">
                      "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                    </p>
                    <p class="text-justify">
                      "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                      veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                      magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row grid-margin">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tinymce Editor</h4>
                  <textarea id='tinyMceExample'>
                    Edit your content here...
                  </textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="row grid-margin">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Quill Editor</h4>
                  <div id="quillExample1" class="quill-container">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Simplemde Editor</h4>
                  <textarea id="simpleMde">
                  </textarea>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
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
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <script src="../../vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="../../vendors/tinymce/tinymce.min.js"></script>
  <script src="../../vendors/tinymce/themes/modern/theme.js"></script>
  <script src="../../vendors/summernote/dist/summernote-bs4.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../js/editorDemo.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
