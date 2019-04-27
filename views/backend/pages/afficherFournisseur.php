
<!DOCTYPE html>
<html>
<head>
	<title>Afficher Fournisseur</title>
	  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="../vendors/iconfonts/simple-line-icon/css/simple-line-icons.css">
  <link rel="stylesheet" href="../vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.addons.css">

	<link rel="stylesheet" href="../css/style.css">
	<link rel="shortcut icon" href="../images/logoreduit.png" />
</head>
<body>
 <?php 
  include "header.php";
   ?>
	<div class="card">
                <div class="card-body">
                  <h4 class="card-title">Afficher les fournisseur</h4>
                  
                  <div id="contenu">
                  <?php include "../../afficherfournisseurtableau.php";
                  chdir(__DIR__) ?>
                  </div>
                </div>
  </div>

  <div id="modelsupprimer_bg" class="modelsupprimer_bg" style="background-color: rgba(0,0,0,0.7);height: 100%;width: 100%;position: absolute;top: 0; z-index: 1000;justify-content: center;align-items: center;display: none;">
        <div class="modelsupprimer-content" style="width: 400px;height: 200px;background-color: white;position: relative; border-radius: 5px;text-align: center;">
          <?php
          echo $_POST['reference'];
          ?>
        </div>
  </div>
 				
  </div>
  
<script src="../vendors/js/vendor.bundle.base.js"></script>
  <script src="../vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../js/dropify.js"></script>
  <script src="../js/file-upload.js"></script>
  <script src="../js/typeahead.js"></script>
  <script src="../js/select2.js"></script>
  <script type="text/javascript">
    function deletecookie()
    {
      document.cookie ="type=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
    }

    function trienom()
    {
       var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("contenu").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST","../../triefournisseurnom.php",true);
        xmlhttp.send();
    }


    function triepays()
    {
       var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("contenu").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST","../../triefournisseurpays.php",true);
        xmlhttp.send();
    }


    function trieregion()
    {
       var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("contenu").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST","../../triefournisseurregion.php",true);
        xmlhttp.send();
    }

    function trieville()
    {
       var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("contenu").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST","../../triefournisseurville.php",true);
        xmlhttp.send();
    }

    function trieemail()
    {
       var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("contenu").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST","../../triefournisseuremail.php",true);
        xmlhttp.send();
    }

    function trienumero()
    {
       var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("contenu").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST","../../triefournisseurnumero.php",true);
        xmlhttp.send();
    }

    /*function triefournisseur()
    {
       var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("contenu").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST","../../trieproduitfournisseur.php",true);
        xmlhttp.send();
    }*/

    function recherche(str)
    {
      //var x=document.getElementById("sortable-table-2");
      document.getElementById("rechercheFournisseur").value="";
      if(str=="")
      {
          //x.style.display="block";
          var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("contenu").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST","../../afficherproduittableau.php",true);
        xmlhttp.send();
      }
      else
      {
        //x.style.display="none";
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("contenu").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","../../rechercheproduitparreference.php?recherche="+str,true);
        xmlhttp.send();
      }
    }

    function recherchefournisseur(str)
    {
      //var x=document.getElementById("sortable-table-2");
      document.getElementById("rechercheReference").value="";
      if(str=="")
      {
          //x.style.display="block";
          var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("contenu").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST","../../afficherproduittableau.php",true);
        xmlhttp.send();
      }
      else
      {
        //x.style.display="none";
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("contenu").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","../../rechercheproduitparfournisseur.php?recherche="+str,true);
        xmlhttp.send();
      }
    }

  </script>
</body>
</html>