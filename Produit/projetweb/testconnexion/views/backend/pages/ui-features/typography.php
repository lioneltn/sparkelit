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
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_horizontal-navbar.php -->
    <nav class="navbar horizontal-layout col-lg-12 col-12 p-0">
      <div class="nav-top flex-grow-1">
        <div class="container d-flex flex-row h-100 align-items-center">
          <div class="text-center navbar-brand-wrapper d-flex align-items-center">
            <a class="navbar-brand brand-logo" href="../../index.php"><img src="../../images/logo.svg" alt="logo"/></a>
            <a class="navbar-brand brand-logo-mini" href="../../index.php"><img src="../../images/logo-mini.svg" alt="logo"/></a>
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
              <a href="../../index.php" class="nav-link"><i class="link-icon icon-screen-desktop"></i><span class="menu-title">Dashboard</span></a>
            </li>
            <li class="nav-item">
              <a href="../../pages/widgets.php" class="nav-link"><i class="link-icon icon-disc"></i><span class="menu-title">Widgets</span></a>
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
                                <li class="nav-item"><a class="nav-link" href="../../pages/ui-features/accordions.php">Accordion</a></li>
                                <li class="nav-item"><a class="nav-link" href="../../pages/ui-features/buttons.php">Buttons</a></li>
                                <li class="nav-item"><a class="nav-link" href="../../pages/ui-features/badges.php">Badges</a></li>
                                <li class="nav-item"><a class="nav-link" href="../../pages/ui-features/breadcrumbs.php">Breadcrumbs</a></li>
                                <li class="nav-item"><a class="nav-link" href="../../pages/ui-features/dropdowns.php">Dropdown</a></li>
                                <li class="nav-item"><a class="nav-link" href="../../pages/ui-features/modals.php">Modals</a></li>
                              </ul>
                            </div>
                            <div class="col-md-6">
                              <ul>
                                <li class="nav-item"><a class="nav-link" href="../../pages/ui-features/progress.php">Progress bar</a></li>
                                <li class="nav-item"><a class="nav-link" href="../../pages/ui-features/pagination.php">Pagination</a></li>
                                <li class="nav-item"><a class="nav-link" href="../../pages/ui-features/tabs.php">Tabs</a></li>
                                <li class="nav-item"><a class="nav-link" href="../../pages/ui-features/typography.php">Typography</a></li>
                                <li class="nav-item"><a class="nav-link" href="../../pages/ui-features/tooltips.php">Tooltip</a></li>
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
                                <li class="nav-item"><a class="nav-link" href="../../pages/ui-features/dragula.php">Dragula</a></li>
                                <li class="nav-item"><a class="nav-link" href="../../pages/ui-features/carousel.php">Carousel</a></li>
                                <li class="nav-item"><a class="nav-link" href="../../pages/ui-features/clipboard.php">Clipboard</a></li>
                                <li class="nav-item"><a class="nav-link" href="../../pages/ui-features/context-menu.php">Context Menu</a></li>
                                <li class="nav-item"><a class="nav-link" href="../../pages/ui-features/loaders.php">Loader</a></li>
                                <li class="nav-item"><a class="nav-link" href="../../pages/ui-features/slider.php">Slider</a></li>
                              </ul>
                            </div>
                            <div class="col-md-6">
                              <ul>
                                <li class="nav-item"><a class="nav-link" href="../../pages/ui-features/popups.php">Popup</a></li>
                                <li class="nav-item"><a class="nav-link" href="../../pages/ui-features/notifications.php">Notification</a></li>
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
                      <li class="nav-item"><a class="nav-link" href="../../pages/icons/flag-icons.php">Flag Icons</a></li>
                      <li class="nav-item"><a class="nav-link" href="../../pages/icons/font-awesome.php">Font Awesome</a></li>
                      <li class="nav-item"><a class="nav-link" href="../../pages/icons/simple-line-icon.php">Simple Line Icons</a></li>
                      <li class="nav-item"><a class="nav-link" href="../../pages/icons/themify.php">Themify Icons</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Forms</span><i class="menu-arrow"></i></a>
              <div class="submenu">
                <ul class="submenu-item">
                  <li class="nav-item"><a class="nav-link" href="../../pages/forms/basic_elements.php">Basic Elements</a></li>
                  <li class="nav-item"><a class="nav-link" href="../../pages/forms/advanced_elements.php">Advanced Elements</a></li>
                  <li class="nav-item"><a class="nav-link" href="../../pages/forms/validation.php">Validation</a></li>
                  <li class="nav-item"><a class="nav-link" href="../../pages/forms/wizard.php">Wizard</a></li>
                  <li class="nav-item"><a class="nav-link" href="../../pages/forms/text_editor.php">Text Editor</a></li>
                  <li class="nav-item"><a class="nav-link" href="../../pages/forms/code_editor.php">Code Editor</a></li>
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
                            <li class="nav-item"><a class="nav-link" href="../../pages/charts/chartjs.php">Chart Js</a></li>
                            <li class="nav-item"><a class="nav-link" href="../../pages/charts/morris.php">Morris</a></li>
                            <li class="nav-item"><a class="nav-link" href="../../pages/charts/flot-chart.php">Flot</a></li>
                            <li class="nav-item"><a class="nav-link" href="../../pages/charts/google-charts.php">Google Chart</a></li>
                          </ul>
                        </div>
                        <div class="col-md-6">
                          <ul>
                            <li class="nav-item"><a class="nav-link" href="../../pages/charts/sparkline.php">Sparkline</a></li>
                            <li class="nav-item"><a class="nav-link" href="../../pages/charts/c3.php">C3 Chart</a></li>
                            <li class="nav-item"><a class="nav-link" href="../../pages/charts/chartist.php">Chartist</a></li>
                            <li class="nav-item"><a class="nav-link" href="../../pages/charts/justGage.php">JustGage</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-group col-md-3">
                    <p class="category-heading">Table</p>
                    <ul class="submenu-item">
                      <li class="nav-item"><a class="nav-link" href="../../pages/tables/basic-table.php">Basic Table</a></li>
                      <li class="nav-item"><a class="nav-link" href="../../pages/tables/data-table.php">Data Table</a></li>
                      <li class="nav-item"><a class="nav-link" href="../../pages/tables/js-grid.php">Js-grid</a></li>
                      <li class="nav-item"><a class="nav-link" href="../../pages/tables/sortable-table.php">Sortable Table</a></li>
                    </ul>
                  </div>
                  <div class="col-group col-md-3">
                    <p class="category-heading">Maps</p>
                    <ul class="submenu-item">
                      <li class="nav-item"><a class="nav-link" href="../../pages/maps/mapeal.php">Mapeal</a></li>
                      <li class="nav-item"><a class="nav-link" href="../../pages/maps/vector-map.php">Vector Map</a></li>
                      <li class="nav-item"><a class="nav-link" href="../../pages/maps/google-maps.php">Google Map</a></li>
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
                      <li class="nav-item"><a class="nav-link" href="../../pages/samples/login.php">Login</a></li>
                      <li class="nav-item"><a class="nav-link" href="../../pages/samples/login-2.php">Login 2</a></li>
                      <li class="nav-item"><a class="nav-link" href="../../pages/samples/register.php">Register</a></li>
                      <li class="nav-item"><a class="nav-link" href="../../pages/samples/register-2.php">Register 2</a></li>
                      <li class="nav-item"><a class="nav-link" href="../../pages/samples/lock-screen.php">Lockscreen</a></li>
                    </ul>
                  </div>
                  <div class="col-group col-md-3">
                    <p class="category-heading">Error Pages</p>
                    <ul class="submenu-item">
                      <li class="nav-item"><a class="nav-link" href="../../pages/samples/error-400.php">400</a></li>
                      <li class="nav-item"><a class="nav-link" href="../../pages/samples/error-404.php">404</a></li>
                      <li class="nav-item"><a class="nav-link" href="../../pages/samples/error-500.php">500</a></li>
                      <li class="nav-item"><a class="nav-link" href="../../pages/samples/error-505.php">505</a></li>
                    </ul>
                  </div>
                  <div class="col-group col-md-3">
                    <p class="category-heading">E-commerce</p>
                    <ul class="submenu-item">
                      <li class="nav-item"><a class="nav-link" href="../../pages/samples/invoice.php">Invoice</a></li>
                      <li class="nav-item"><a class="nav-link" href="../../pages/samples/pricing-table.php">Pricing Table</a></li>
                      <li class="nav-item"><a class="nav-link" href="../../pages/samples/orders.php">Orders</a></li>
                    </ul>
                  </div>
                  <div class="col-group col-md-3">
                    <p class="category-heading">General</p>
                    <ul class="submenu-item">
                      <li class="nav-item"><a class="nav-link" href="../../pages/samples/search-results.php">Search Results</a></li>
                      <li class="nav-item"><a class="nav-link" href="../../pages/samples/profile.php">Profile</a></li>
                      <li class="nav-item"><a class="nav-link" href="../../pages/samples/timeline.php">Timeline</a></li>
                      <li class="nav-item"><a class="nav-link" href="../../pages/samples/news-grid.php">News grid</a></li>
                      <li class="nav-item"><a class="nav-link" href="../../pages/samples/portfolio.php">Portfolio</a></li>
                      <li class="nav-item"><a class="nav-link" href="../../pages/samples/faq.php">FAQ</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link"><i class="link-icon icon-calculator"></i><span class="menu-title">Apps</span><i class="menu-arrow"></i></a>
              <div class="submenu">
                <ul class="submenu-item">
                  <li class="nav-item"><a class="nav-link" href="../../pages/apps/email.php">Email</a></li>
                  <li class="nav-item"><a class="nav-link" href="../../pages/apps/calendar.php">Calendar</a></li>
                  <li class="nav-item"><a class="nav-link" href="../../pages/apps/todo.php">Todo List</a></li>
                  <li class="nav-item"><a class="nav-link" href="../../pages/apps/gallery.php">Gallery</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a href="../../pages/documentation/documentation.php" class="nav-link"><i class="link-icon icon-docs"></i><span class="menu-title">Documentation</span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Headings</h4>
                  <p class="card-description">
                    Add tags <code>&lt;h1&gt;</code> to <code>&lt;h6&gt;</code> or class <code>.h1</code> to <code>.h6</code>
                  </p>
                  <div class="template-demo">
                    <h1>h1. Heading</h1>
                    <h2>h2. Heading</h2>
                    <h3>h3. Heading</h3>
                    <h4>h4. Heading</h4>
                    <h5>h5. Heading</h5>
                    <h6>h6. Heading</h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Headings with secondary text</h4>
                  <p class="card-description">
                    Add faded secondary text to headings
                  </p>
                  <div class="template-demo">
                    <h1>
                      h1. Heading
                      <small class="text-muted">
                        Secondary text
                      </small>
                    </h1>
                    <h2>
                      h2. Heading
                      <small class="text-muted">
                        Secondary text
                      </small>
                    </h2>
                    <h3>
                      h3. Heading
                      <small class="text-muted">
                        Secondary text
                      </small>
                    </h3>
                    <h4>
                      h4. Heading
                      <small class="text-muted">
                        Secondary text
                      </small>
                    </h4>
                    <h5>
                      h5. Heading
                      <small class="text-muted">
                        Secondary text
                      </small>
                    </h5>
                    <h6>
                      h6. Heading
                      <small class="text-muted">
                        Secondary text
                      </small>
                    </h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Display headings</h4>
                  <p class="card-description">
                    Add class <code>.display1</code> to <code>.display-4</code>
                  </p>
                  <div class="template-demo">
                    <h1 class="display-1">Display 1</h1>
                    <h1 class="display-2">Display 2</h1>
                    <h1 class="display-3">Display 3</h1>
                    <h1 class="display-4">Display 4</h1>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 d-flex align-items-stretch">
              <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Paragraph</h4>
                      <p class="card-description">
                        Write text in <code>&lt;p&gt;</code> tag
                      </p>
                      <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley not only five centuries,
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Icon size</h4>
                      <p class="card-description">
                        Add class <code>.icon-lg</code>, <code>.icon-md</code>, <code>.icon-sm</code>
                      </p>
                      <div class="row">
                        <div class="col-md-4 d-flex align-items-center">
                          <div class="d-flex flex-row align-items-center">
                            <i class="icon-compass icon-lg text-warning"></i>
                            <p class="mb-0 ml-1">
                              Icon-lg
                            </p>
                          </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-center">
                          <div class="d-flex flex-row align-items-center">
                            <i class="icon-compass icon-md text-success"></i>
                            <p class="mb-0 ml-1">
                              Icon-md
                            </p>
                          </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-center">
                          <div class="d-flex flex-row align-items-center">
                            <i class="icon-compass icon-sm text-danger"></i>
                            <p class="mb-0 ml-1">
                              Icon-sm
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Blockquotes</h4>
                  <p class="card-description">
                    Wrap content inside<code>&lt;blockquote class="blockquote"&gt;</code>
                  </p>
                  <blockquote class="blockquote">
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                  </blockquote>
                </div>
                <div class="card-body">
                  <blockquote class="blockquote blockquote-primary">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                  </blockquote>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Address</h4>
                  <p class="card-description">
                    Use <code>&lt;address&gt;</code> tag
                  </p>
                  <div class="row">
                    <div class="col-md-6">
                      <address>
                        <p class="font-weight-bold">CloudUi inc.</p>
                        <p>
                          695 lsom Ave,
                        </p>
                        <p>
                           Suite 00
                        </p>
                        <p>
                          San Francisco, CA 94107
                        </p>
                      </address>
                    </div>
                    <div class="col-md-6">
                      <address class="text-primary">
                        <p class="font-weight-bold">
                          E-mail
                        </p>
                        <p class="mb-2">
                          johndoe@examplemeail.com
                        </p>
                        <p class="font-weight-bold">
                          Web Address
                        </p>
                        <p>
                          www.cloudui.com
                        </p>
                      </address>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Lead</h4>
                  <p class="card-description">
                    Use class <code>.lead</code>
                  </p>
                  <p class="lead">
                      Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Text colors</h4>
                  <p class="card-description">
                    Use class <code>.text-primary</code>, <code>.text-secondary</code> etc. for text in theme colors
                  </p>
                  <div class="row">
                    <div class="col-md-6">
                      <p class="text-primary">.text-primary</p>
                      <p class="text-success">.text-success</p>
                      <p class="text-danger">.text-danger</p>
                      <p class="text-warning">.text-warning</p>
                      <p class="text-info">.text-info</p>
                    </div>
                    <div class="col-md-6">
                      <p class="text-light bg-dark pl-1">.text-light</p>
                      <p class="text-secondary">.text-secondary</p>
                      <p class="text-dark">.text-dark</p>
                      <p class="text-muted">.text-muted</p>
                      <p class="text-white bg-dark pl-1">.text-white</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Top aligned media</h4>
                  <div class="media">
                    <i class="icon-globe icon-md text-info d-flex align-self-start mr-3"></i>
                    <div class="media-body">
                      <p class="card-text">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Center aligned media</h4>
                  <div class="media">
                    <i class="icon-globe icon-md text-info d-flex align-self-center mr-3"></i>
                    <div class="media-body">
                      <p class="card-text">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Bottom aligned media</h4>
                  <div class="media">
                    <i class="icon-globe icon-md text-info d-flex align-self-end mr-3"></i>
                    <div class="media-body">
                      <p class="card-text">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Highlighted Text</h4>
                  <p class="card-description">
                    Wrap the text in <code>&lt;mark&gt;</code> to highlight text
                  </p>
                  <p>
                    It is a long <mark class="bg-warning text-white">established</mark> fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">List Unordered</h4>
                  <ul>
                    <li>Lorem ipsum dolor sit amet</li>
                    <li>Consectetur adipiscing elit</li>
                    <li>Integer molestie lorem at massa</li>
                    <li>Facilisis in pretium nisl aliquet</li>
                    <li>Nulla volutpat aliquam velit</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Bold text</h4>
                  <p class="card-description">
                    Use class<code>.font-weight-bold</code>
                  </p>
                  <p>
                    It is a long <span class="font-weight-bold">established fact</span> that a reader will be distracted by the readable content
                    of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                    more-or-less normal distribution
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">List Ordered</h4>
                  <ol>
                    <li>Lorem ipsum dolor sit amet</li>
                    <li>Consectetur adipiscing elit</li>
                    <li>Integer molestie lorem at massa</li>
                    <li>Facilisis in pretium nisl aliquet</li>
                    <li>Nulla volutpat aliquam velit></li>
                  </ol>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-primary">Underline</h4>
                  <p class="card-description">
                    Wrap in <code>&lt;u&gt;</code> tag for underline
                  </p>
                  <p>
                    <u>lorem ipsum dolor sit amet, consectetur
                      mod tempor incididunt ut labore et dolore
                      magna aliqua.</u>
                  </p>
                </div>
                <div class="card-body">
                  <h4 class="card-title text-danger">Lowercase</h4>
                  <p class="card-description">
                    Use class <code>.text-lowercase</code>
                  </p>
                  <p class="text-lowercase">
                    lorem ipsum dolor sit amet, consectetur
                      mod tempor incididunt ut labore et dolore
                      magna aliqua.
                  </p>
                </div>
                <div class="card-body">
                  <h4 class="card-title text-warning">Uppercase</h4>
                  <p class="card-description">
                    Use class <code>.text-uppercase</code>
                  </p>
                  <p class="text-uppercase">
                    lorem ipsum dolor sit amet, consectetur
                      mod tempor incididunt ut labore et dolore
                      magna aliqua.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Mute</h4>
                  <p class="card-description">
                    Use class <code>.text-muted</code>
                  </p>
                  <p class="text-muted">
                    lorem ipsum dolor sit amet, consectetur
                      mod tempor incididunt ut labore et dolore
                      magna aliqua.
                  </p>
                </div>
                <div class="card-body">
                  <h4 class="card-title text-success">Strike</h4>
                  <p class="card-description">
                    Wrap content in <code>&lt;del&gt;</code> tag
                  </p>
                  <p>
                    <del>
                      lorem ipsum dolor sit amet, consectetur
                      mod tempor incididunt ut labore et dolore
                      magna aliqua.
                    </del>
                  </p>
                </div>
                <div class="card-body">
                  <h4 class="card-title text-info">Capitalized</h4>
                  <p class="card-description">
                    Use class <code>.text-capitalize</code>
                  </p>
                  <p class="text-capitalize">
                    lorem ipsum dolor sit amet, consectetur
                      mod tempor incididunt ut labore et dolore
                      magna aliqua.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin grid-margin-md-0 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">List with icon</h4>
                  <p class="card-description">Add class <code>.list-ticked</code> to <code>&lt;ul&gt;</code></p>
                  <ul class="list-ticked">
                    <li>Lorem ipsum dolor sit amet</li>
                    <li>Consectetur adipiscing elit</li>
                    <li>Integer molestie lorem at massa</li>
                    <li>Facilisis in pretium nisl aliquet</li>
                    <li>Nulla volutpat aliquam velit></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin grid-margin-md-0 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">List with icon</h4>
                  <p class="card-description">Add class <code>.list-arrow</code> to <code>&lt;ul&gt;</code></p>
                  <ul class="list-arrow">
                    <li>Lorem ipsum dolor sit amet</li>
                    <li>Consectetur adipiscing elit</li>
                    <li>Integer molestie lorem at massa</li>
                    <li>Facilisis in pretium nisl aliquet</li>
                    <li>Nulla volutpat aliquam velit></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin grid-margin-md-0 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">List with icon</h4>
                  <p class="card-description">Add class <code>.list-star</code> to <code>&lt;ul&gt;</code></p>
                  <ul class="list-star">
                    <li>Lorem ipsum dolor sit amet</li>
                    <li>Consectetur adipiscing elit</li>
                    <li>Integer molestie lorem at massa</li>
                    <li>Facilisis in pretium nisl aliquet</li>
                    <li>Nulla volutpat aliquam velit></li>
                  </ul>
                </div>
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
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <script src="../../vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../../js/template.js"></script>
  <!-- endinject -->
</body>

</html>
