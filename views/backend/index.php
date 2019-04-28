<?PHP
session_start();
chdir(__DIR__);
include "../../core/statsC.php";


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>5icha</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/iconfonts/simple-line-icon/css/simple-line-icons.css">
  <link rel="stylesheet" href="vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/logoreduit.png" />
</head>

<body>
  <?PHP
  chdir(__DIR__);
  include "../../entities/comptes/admin.php";
  include "../../core/comptes/adminC.php";




  


  if (isset($_SESSION['email_admin'])) {
    $adminC = new AdminC();
    $result = $adminC->recupererAdmin($_SESSION['email_admin']);
    foreach ($result as $row) {
      $nom = $row['nom'];
      $prenom = $row['prenom'];
      $datenaissance = $row['datenaissance'];
      $sexe = $row['sexe'];
      $password = $row['motdepasse'];
      $type = $row['type'];
      if($type == 2) {
        header('Location: pages/samples/login.php');
      }
    }
  } else {
    header('Location: pages/samples/login.php');
  }
  ?>


  <?php 
  $statsC = new statsC();
  $total_visits  = $statsC->get_total_visits();

 
  $total_clients = $statsC->get_total_clients();
  $total_commands = $statsC->get_total_commands();
  $total_price = $statsC->get_total_price();
  $recent_orders = $statsC->get_recent_orders();
  $today = date("d");
  $todo = $statsC->get_todo();




   ?>
  <div class="container-scroller">
    <!-- partial:../../partials/_horizontal-navbar.php -->
    <nav class="navbar horizontal-layout col-lg-12 col-12 p-0">
            <div class="nav-top flex-grow-1">
                <div class="container d-flex flex-row h-100 align-items-center">
                    <div class="text-center navbar-brand-wrapper d-flex align-items-center">
                        <a class="navbar-brand brand-logo" href="index.php"><img src="images/Logoreduit.png" alt="logo" /></a>
                        <a class="navbar-brand brand-logo-mini" href="index.php"><img src="images/logo-mini.svg" alt="logo" /></a>
                    </div>
                    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between flex-grow-1">
                        <!--<form class="search-field d-none d-md-flex" action="#">
                            <div class="form-group mb-0">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="icon-magnifier"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="search here...">
                                </div>
                            </div>
                        </form>-->
                        <ul class="navbar-nav navbar-nav-right mr-0 ml-auto">
                            <li class="nav-item nav-profile dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                                    <img src="https://via.placeholder.com/39x39" alt="profile" />
                                    <span class="nav-profile-name">
                                        <?PHP echo $nom . "  " . $prenom ?></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                                    <a class="dropdown-item" href = "pages/samples/profile.php">
                                        <i class="icon-settings text-primary mr-2"></i>
                                        Profil
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="pages/samples/login.php">
                                        <i class="icon-logout text-primary mr-2"></i>
                                        Se déconnecter
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
                            <a href="index.php" class="nav-link"><i class="link-icon icon-screen-desktop"></i><span class="menu-title">Tableau de bord</span></a>
                        </li>

                        <li class="nav-item">
                            <a href="pages/Ajouterproduit.php" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Produits</span><i class="menu-arrow"></i></a>
                            <div class="submenu">
                                <ul class="submenu-item">
                                    <li class="nav-item"><a class="nav-link" href="pages/Ajouterproduit.php"> Ajouter produit</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/afficherProduits.php">Afficher produits</a></li>
                                </ul>
                            </div>
                        </li>




                        <li class="nav-item">
                            <a href="pages/ajoutercategorie.php" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Categorie</span><i class="menu-arrow"></i></a>
                            <div class="submenu">
                                <ul class="submenu-item">
                                    <li class="nav-item"><a class="nav-link" href="pages/ajoutercategorie.php"> Ajouter Categorie</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/afficherCategorie.php">Afficher Categorie</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a href="pages/forms/formulaire_ajouter_poste.php" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Post</span><i class="menu-arrow"></i></a>
                            <div class="submenu">
                                <ul class="submenu-item">
                                    <li class="nav-item"><a class="nav-link" href="pages/forms/formulaire_ajouter_poste.php"> Ajouter post</a></li>

                                    <li class="nav-item"><a class="nav-link" href="pages/forms/afficherpostadmin.php">Afficher posts</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/forms/statpost.php">Statistiques posts</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a href="pages/ajouterfournisseur.php" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Fournisseur</span><i class="menu-arrow"></i></a>
                            <div class="submenu">
                                <ul class="submenu-item">
                                    <li class="nav-item"><a class="nav-link" href="pages/ajouterfournisseur.php"> Ajouter fournisseur</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/afficherFournisseur">Afficher fournisseurs</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="pages/ajouterfournisseur.php" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Commandes</span><i class="menu-arrow"></i></a>
                            <div class="submenu">
                                <ul class="submenu-item">
                                    <li class="nav-item"><a class="nav-link" href="pages/samples/orders.php"> commandes</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/samples/statistiques.php">statistiques des ventes</a></li>
                                </ul>
                            </div>
                        </li>
<li class="nav-item">
              <a href="pages/ajouterOffre.php" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Offre</span><i class="menu-arrow"></i></a>
              <div class="submenu">
                <ul class="submenu-item">
                  <li class="nav-item"><a class="nav-link" href="pages/ajouterOffre.php"> Ajouter offre</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/afficherOffres.php">Afficher offre</a></li>
                  <!--<li class="nav-item"><a class="nav-link" href="pages/forms/text_editor.php">Text Editor</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/forms/code_editor.php">Code Editor</a></li>-->
                </ul>
              </div>
            </li> 
             
            <li class="nav-item">
              <a href="pages/ajouterMetadonnee.php" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Metadonnee</span><i class="menu-arrow"></i></a>
              <div class="submenu">
                <ul class="submenu-item">
                  <li class="nav-item"><a class="nav-link" href="pages/ajouterMetadonnee.php"> Ajouter metadonnee</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/afficherMetadonnee.php">Afficher metadonnee</a></li>
                  <!--<li class="nav-item"><a class="nav-link" href="pages/forms/text_editor.php">Text Editor</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/forms/code_editor.php">Code Editor</a></li>-->
                </ul>
              </div>
            </li>



                    </ul>
                </div>
            </div>
        </nav>

    <!-- partial -->
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card card-statistics">
                <div class="card-body p-0">
                  <div class="row">
                    
                    <div class="col-md-6 col-lg-3">
                      <div class="d-flex justify-content-between border-right card-statistics-item">
                        <div>
                          <h1><?php echo $total_clients ?></h1>
                          <p class="text-muted mb-0">Clients</p>
                        </div>
                        <i class="icon-people text-primary icon-lg"></i>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                      <div class="d-flex justify-content-between border-right card-statistics-item">
                        <div>
                          <h1><?php echo $total_visits ?></h1>
                          <p class="text-muted mb-0">Visites uniques</p>
                        </div>
                        <i class="icon-pin text-primary icon-lg"></i>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                      <div class="d-flex justify-content-between card-statistics-item">
                        <div>
                          <h1><?php echo $total_commands ?></h1>
                          <p class="text-muted mb-0">Commandes</p>
                        </div>
                        <i class="icon-refresh text-primary icon-lg"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">RAPPORT DE GAIN</h4>
                  <div class="w-75 mx-auto">
                    <canvas id="earning-report" width="100" height="100"></canvas>
                  </div>
                  <div class="py-4 d-flex justify-content-center align-items-end">
                    <h1 class="text-center text-md-left mb-0"><?php echo $total_price ?> Dt</h1>
                    <p class="text-muted mb-0 ml-2">Total</p>
                  </div>
                  <div id="earning-report-legend" class="earning-report-legend"></div>                  
                </div>
              </div>
            </div>
            <div class="col-md-9 grid-margin stretch-card">
              <div class="card">
                <div class="row h-100">
                  <div class="col-md-5 border-right">
                    <div class="card-body">
                      <h4 class="card-title">Performance</h4>
                      <table class="table table-borderless">
                        <tbody>
                          <tr>
                            <td>
                              
                              <h6>Commandes</h6>

                              <div id="commandes">
                              <p class="text-muted mb-0"></p>
                              </div>
                            </td>
                            <td>
                              <div id="nCommandes">
                              <h3 class="text-primary">
                                
                              </h3>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <h6>Visites ce mois</h6>
                              <div id="VisiteM">
                              <p class="text-muted mb-0"></p>
                              </div>
                            </td>
                            <td> 
                              <div id="nVisites"></div>
                              <h3 class="text-danger">
                               
                              </h3>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <h6>Visites cette semaine</h6>
                              <div id="VisiteS"></div>
                              <p class="text-muted mb-0"></p>
                              </div>
                            </td>
                            <td>
                              <div id="nVisiteS"></div>
                              <h3 class="text-success">
                                  
                              </h3>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <h6>Pending</h6>
                              <p class="text-muted mb-0">Pending Tasks</p>
                            </td>
                            <td>
                              <h3 class="text-warning">
                                  +5152
                              </h3>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <h6>Revenue</h6>
                              <p class="text-muted mb-0">5% increase</p>
                            </td>
                            <td>
                              <h3 class="text-primary">
                                  +89997
                              </h3>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="col-md-7">
                    <div class="card-body d-flex flex-column h-100">
                      <div class="d-flex flex-row">
                        <h4 class="card-title">Carte régionale des visiteurs!</h4>
                      </div>
                      <p>Allez dans statistiques pour plus de détails!</p>
                      <div id="chart-activity" class="mt-auto" ></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-7 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Commandes récentes</h4>
                  <table class="table">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Facture</th>
                        <th>Montant</th>
                        <th>Date</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      <?php 

                        foreach ($recent_orders as $row ) {
                          ?>
                          <tr>
                        <td>
                          <div class="disc bg-secondary"></div>
                        </td>
                        <td>
                          <h4 class="text-primary font-weight-normal"><?php echo $row['idCommande']; ?></h4>
                          <p class="text-muted mb-0"><?php echo $row['etat'] ;?></p>
                        </td>
                        <td>
                          <?php echo $row['totalPaiement']; ?>
                        </td>
                        <td>
                          <p><?php echo $row['date'] ;?></p>
                          <p class="text-muted mb-0"><?php 
                            $day = date("d", strtotime($row['date']));
                            
                            $days_ago = $today-$day;
                            
                            echo "Il y a ";  echo $days_ago; echo " jours"; 

                           ?></p>
                        </td>
                      </tr>
                      <?php  
                        }
                      ?>

                                         </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-md-5 grid-margin stretch-card">
              <div class="card">
                <div class="card-body d-flex flex-column justify-content-between">
                  <div>
                    <h4 class="card-title">Revenue</h4>
                    <h1>20009</h1>
                    <p class="text-muted">5.6% change today</p>
                  </div>
                  <canvas id="sales-chart" class="mt-auto"></canvas> 
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Activities</h4>
                  <div class="d-flex border-bottom pb-3">
                    <img src="https://via.placeholder.com/40x40" class="img-sm mr-4 rounded-circle" alt="profile"/>
                    <div>
                      <h6>Emily Kennedy</h6>
                      <p class="text-muted mb-0">Uploaded new invoices for RedBus and Paytm</p>
                    </div>
                  </div>
                  <div class="d-flex border-bottom py-3">
                    <img src="https://via.placeholder.com/40x40" class="img-sm mr-4 rounded-circle" alt="profile"/>
                    <div>
                      <h6>Nicholas Armstrong</h6>
                      <p class="text-muted mb-0">Created new work flow for the current project</p>
                    </div>
                  </div>
                  <div class="d-flex border-bottom py-3">
                    <img src="https://via.placeholder.com/40x40" class="img-sm mr-4 rounded-circle" alt="profile"/>
                    <div>
                      <h6>Stella Saunders</h6>
                      <p class="text-muted mb-0">Submitted the project schedule to the manager</p>
                    </div>
                  </div>
                  <div class="d-flex pt-3">
                    <img src="https://via.placeholder.com/40x40" class="img-sm mr-4 rounded-circle" alt="profile"/>
                    <div>
                      <h6>Noah Bailey</h6>
                      <p class="text-muted mb-0">Scheduled a meeting with the new client for next thursday</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Calendar</h4>
                  <div id="inline-datepicker-example" class="datepicker"></div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card bg-primary text-white card-update">
                <div class="card-body">
                  <h4 class="card-title text-white">Updates</h4>
                  <div class="d-flex border-light-white pb-4 update-item">
                    <img src="https://via.placeholder.com/40x40" alt="profile" class="img-sm rounded-circle img-bordered mr-4"/>
                    <div>
                      <h6 class="text-white font-weight-medium d-flex">Aaron Tucker
                        <span class="small ml-auto">8:30 AM</span>
                      </h6>
                      <p>New product is launched with high quality and awesome support. The product will be available for public within 4 days</p>
                      <div class="image-layers">
                        <div class="profile-image-text bg-danger rounded-circle image-layer-item">S</div>
                        <img class="rounded-circle image-layer-item" src="https://via.placeholder.com/20x20" alt="profile"/>
                        <img class="rounded-circle image-layer-item" src="https://via.placeholder.com/20x20" alt="profile"/>
                        <img class="rounded-circle image-layer-item" src="https://via.placeholder.com/20x20" alt="profile"/>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex pt-4 update-item">
                    <img src="https://via.placeholder.com/40x40" alt="profile" class="img-sm rounded-circle img-bordered mr-4"/>
                    <div>
                      <h6 class="text-white font-weight-medium d-flex">Joseph Delgado
                        <span class="small ml-auto">8:45 AM</span>
                      </h6>
                      <p>The test report is handed over to the production manager. The final decision will be based on the report. It will be announced in the meeting</p>
                      <div class="image-layers">
                        <div class="profile-image-text bg-warning rounded-circle image-layer-item">M</div>
                        <img class="rounded-circle image-layer-item" src="https://via.placeholder.com/20x20" alt="profile"/>
                        <img class="rounded-circle image-layer-item" src="https://via.placeholder.com/20x20" alt="profile"/>
                        <img class="rounded-circle image-layer-item" src="https://via.placeholder.com/20x20" alt="profile"/>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-7 grid-margin grid-margin-md-0 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Todo list</h4>
                  <div class="add-items d-flex">
                    <input type="text" class="form-control todo-list-input"  placeholder="What do you need to do today?">
                    <button class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                  </div>
                  <div class="list-wrapper">
                    <ul class="d-flex flex-column-reverse todo-list">
                      <?php 

                      foreach ($todo as $row) {
                        
                      
                       ?>


                      <li>
                        <div class="form-check">
                          <label class="form-check-label">

                          <input type="hidden" class="id" id="id-todo" value=" <?php echo $row['id']; ?> ">

                            <input class="checkbox" type="checkbox" <?php 
                            if($row['done']==1) {echo "checked";} ?>>
                            <?php echo $row['activity']; ?>
                          </label>
                        </div>
                        <i class="remove icon-close"></i>
                      </li>

                      <?php 
                    }
                       ?>
                      
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-5 grid-margin grid-margin-md-0 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Projects</h4>
                  <table class="table">
                    <tbody>
                      <tr>
                        <td class="py-1">
                          <img src="https://via.placeholder.com/40x40" alt="profile" class="img-sm rounded-circle"/>
                        </td>
                        <td>
                          South Shyanne
                        </td>
                        <td>
                          <label class="badge badge-warning">Medium</label>
                        </td>
                      </tr>
                      <tr>
                        <td class="py-1">
                          <img src="https://via.placeholder.com/40x40" alt="profile" class="img-sm rounded-circle"/>
                        </td>
                        <td>
                          New Trystan
                        </td>
                        <td>
                          <label class="badge badge-danger">High</label>
                        </td>
                      </tr>
                      <tr>
                        <td class="py-1">
                          <img src="https://via.placeholder.com/40x40" alt="profile" class="img-sm rounded-circle"/>
                        </td>
                        <td>
                          East Helga
                        </td>
                        <td>
                          <label class="badge badge-success">Low</label>
                        </td>
                      </tr>
                      <tr>
                        <td class="py-1">
                          <img src="https://via.placeholder.com/40x40" alt="profile" class="img-sm rounded-circle"/>
                        </td>
                        <td>
                          Omerbury
                        </td>
                        <td>
                          <label class="badge badge-warning">Medium</label>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
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
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
    <script src="https://www.gstatic.com/charts/loader.js"></script>

  <script src="js/dashboard-region.js"></script>
  <script src="js/todolist.js"></script>
  <script src="js/commands.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
