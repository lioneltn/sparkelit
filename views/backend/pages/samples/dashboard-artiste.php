<?PHP
session_start();
?>
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
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../../css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body>
    <?PHP
    include "../../../../entities/comptes/admin.php";
    include "../../../../core/comptes/adminC.php";

    echo $_SESSION['email_artiste'];
    if (isset($_SESSION['email_artiste'])) {
      $adminC = new AdminC();
      $result = $adminC->recupererAdmin($_SESSION['email_artiste']);
      foreach ($result as $row) {
        $nom = $row['nom'];
        $prenom = $row['prenom'];
        $datenaissance = $row['datenaissance'];
        $sexe = $row['sexe'];
        $password = $row['motdepasse'];
      }
    } else {
      header('Location: login-2.php');
    }
    ?>
    <div class="container-scroller">
        <!-- partial:../../partials/_horizontal-navbar.php -->
        <nav class="navbar horizontal-layout col-lg-12 col-12 p-0">
            <div class="nav-top flex-grow-1">
                <div class="container d-flex flex-row h-100 align-items-center">
                    <div class="text-center navbar-brand-wrapper d-flex align-items-center">
                        <a class="navbar-brand brand-logo" href="../../index.php"><img src="../../images/logo.svg" alt="logo" /></a>
                        <a class="navbar-brand brand-logo-mini" href="../../index.php"><img src="../../images/logo-mini.svg" alt="logo" /></a>
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
                                    <img src="https://via.placeholder.com/39x39" alt="profile" />
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
                    <div class="row profile-page">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="profile-header text-white">
                                        <div class="d-md-flex justify-content-around">
                                            <div class="profile-info d-flex align-items-center">
                                                <img class="rounded-circle img-lg" src="https://via.placeholder.com/92x92" alt="profile image">
                                                <div class="wrapper pl-4">
                                                    <p class="profile-user-name">Richard V.Welsh (UI/UX Designer)</p>
                                                    <div class="wrapper d-flex align-items-center">
                                                        <p class="profile-user-designation">User Experience Specialist</p>
                                                        <select id="example-css" name="rating" autocomplete="off">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="details">
                                                <div class="detail-col">
                                                    <p>Projects</p>
                                                    <p>130</p>
                                                </div>
                                                <div class="detail-col">
                                                    <p>Projects</p>
                                                    <p>130</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile-body">
                                        <ul class="nav tab-switch" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="user-profile-info-tab" data-toggle="pill" href="#user-profile-info" role="tab" aria-controls="user-profile-info" aria-selected="true">Profile</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="user-profile-activity-tab" data-toggle="pill" href="#user-profile-activity" role="tab" aria-controls="user-profile-activity" aria-selected="false">Activity</a>
                                            </li>
                                        </ul>
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="tab-content tab-body" id="profile-log-switch">
                                                    <div class="tab-pane fade show active pr-3" id="user-profile-info" role="tabpanel" aria-labelledby="user-profile-info-tab">
                                                        
                                                        <h3>Account Information</h3>
                                                        <div class="card">
                                                            <div class="card-header">
                                                                Contact Information
                                                                <a href="../forms/formulaire_modifier_artiste.php" class="card-edit">Edit</a>
                                                            </div><!-- End .card-header -->

                                                            <div class="card-body">
                                                                <p>
                                                                    <?PHP echo $nom . "  " . $prenom ?><br>
                                                                    <?PHP echo $_SESSION['email'] ?><br>
                                                                    <a href="../forms/new_password">Change Password</a>
                                                                </p>
                                                            </div><!-- End .card-body -->
                                                        </div><!-- End .card -->
                                                        <div class="card">
                                                            <div class="card-header">
                                                                Autres informations
                                                                <a href="../forms/formulaire_modifier_artiste.php" class="card-edit">Edit</a>
                                                            </div><!-- End .card-header -->

                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <h4 class="">Date de naissance</h4>
                                                                        <address>
                                                                            <?PHP echo $datenaissance ?><br>
                                                                            <a href="../forms/formulaire_modifier_artiste.php">Edit </a>
                                                                        </address>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <h4 class="">Postes</h4>
                                                                        <address>
                                                                            <?PHP echo "postes" ?><br>
                                                                        </address>
                                                                    </div>
                                                                </div>
                                                            </div><!-- End .card-body -->
                                                        </div><!-- End .card -->
                                                    </div>
                                                    <div class="tab-pane fade" id="user-profile-activity" role="tabpanel" aria-labelledby="user-profile-activity-tab">
                                                        <div class="horizontal-timeline">
                                                            ///////////////////////////////////////////////////////////////
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <h5 class="my-4">Who to follow</h5>
                                                <div class="new-accounts">
                                                    <ul class="chats">
                                                        <li class="chat-persons">
                                                            <a href="#">
                                                                <span class="pro-pic"><img src="https://via.placeholder.com/40x40" alt="profile image"></span>
                                                                <div class="user">
                                                                    <p class="u-name">Marina Michel</p>
                                                                    <p class="u-designation">Business Development</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="chat-persons">
                                                            <a href="#">
                                                                <span class="pro-pic"><img src="https://via.placeholder.com/40x40" alt="profile image"></span>
                                                                <div class="user">
                                                                    <p class="u-name">Stella Johnson</p>
                                                                    <p class="u-designation">SEO Expert</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="chat-persons">
                                                            <a href="#">
                                                                <span class="pro-pic"><img src="https://via.placeholder.com/40x40" alt="profile image"></span>
                                                                <div class="user">
                                                                    <p class="u-name">Peter Joo</p>
                                                                    <p class="u-designation">UI/UX designer</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <h5 class="my-4">Pending</h5>
                                                <div class="new-accounts">
                                                    <ul class="chats">
                                                        <li class="chat-persons">
                                                            <a href="#">
                                                                <span class="pro-pic"><img src="https://via.placeholder.com/40x40" alt="profile image"></span>
                                                                <div class="user">
                                                                    <p class="u-name">Marina Michel</p>
                                                                    <p class="u-designation">Business Development</p>
                                                                    <span class="d-flex align-items-center mt-2">
                                                                        <span class="btn btn-xs btn-rounded btn-outline-light mr-2">Buyer</span>
                                                                        <span class="btn btn-xs btn-rounded btn-outline-primary">Lead</span>
                                                                    </span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="chat-persons">
                                                            <a href="#">
                                                                <span class="pro-pic"><img src="https://via.placeholder.com/40x40" alt="profile image"></span>
                                                                <div class="user">
                                                                    <p class="u-name">Stella Johnson</p>
                                                                    <p class="u-designation">SEO Expert</p>
                                                                    <span class="d-flex align-items-center mt-2">
                                                                        <span class="btn btn-xs btn-rounded btn-outline-light mr-2">Buyer</span>
                                                                        <span class="btn btn-xs btn-rounded btn-outline-primary">Lead</span>
                                                                    </span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="chat-persons">
                                                            <a href="#">
                                                                <span class="pro-pic"><img src="https://via.placeholder.com/40x40" alt="profile image"></span>
                                                                <div class="user">
                                                                    <p class="u-name">Peter Joo</p>
                                                                    <p class="u-designation">UI/UX designer</p>
                                                                    <span class="d-flex align-items-center mt-2">
                                                                        <span class="btn btn-xs btn-rounded btn-outline-light mr-2">Buyer</span>
                                                                        <span class="btn btn-xs btn-rounded btn-outline-primary">Lead</span>
                                                                    </span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="../../js/template.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="../../js/form-addons.js"></script>
    <!-- End custom js for this page-->
</body>

</html> 