<?php
session_start();  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">

    <title>Poste</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Bootstrap eCommerce Template">
    <meta name="author" content="SW-THEMES">
        
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/icons/favicon.ico">
    
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">


    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.min.css">
    <style type="text/css">
        .rating{
            direction: rtl;
        }
      .rating  i{
        font-size: 40px;
        color: #303030;
        transition: 0.3s all;
        cursor: pointer;
      }  
       .rating i:hover 
       {
        color:#f1c40f;

       
       }
        .b1:hover~ i
        { 

            color:#f1c40f;
        }
          .b2:hover~ i
        { 

            color:#f1c40f;
        }
          .b3:hover~ i
        { 

            color:#f1c40f;
        }
          .b4:hover~ i
        { 

            color:#f1c40f;
        }
          .b5:hover~ i
        { 

            color:#f1c40f;
        }
    </style>
</head>
<body>
<?PHP
    include "../../entities/comptes/client.php";
    include "../../core/comptes/clientC.php";

    if (isset($_SESSION['email'])) {
        $clientC = new ClientC();
        $result = $clientC->recupererClient($_SESSION['email']);
        foreach ($result as $row) {
            $nom = $row['nom'];
            $prenom = $row['prenom'];
            $datenaissance = $row['datenaissance'];
            $sexe = $row['sexe'];
            $password = $row['motdepasse'];
            $tel = $row['tel'];
            $code = $row['codePostal'];
            $addlivr = $row['adresse'];
        }
    }
    ?>
    <div class="page-wrapper">
        <?php include "header2.php"; ?>
            
        <main class="main">
            <br>

            <div class="container">
                <div class="row">
                    <!--<div class="col-lg-9">-->
                        <?php include "../afficherpostfront.php";?>
                        
                     

                       
                    <!--</div>--><!-- End .col-lg-9 -->

                   
                </div><!-- End .row -->
            </div><!-- End .container -->

            <div class="mb-6"></div><!-- margin -->
        </main><!-- End .main -->

               <?php include "footer2.php"; ?>
        <div id="modelsupprimer_bg" class="modelsupprimer_bg" style="background-color: rgba(0,0,0,0.7);min-height: 100%;min-width: 100%;position: fixed; bottom: 0; right: 0; z-index: 1000;justify-content: center;display: flex; align-items: center;">
        <div class="modelsupprimer-content" style="width: 1000px;background-color: white;position: relative; border-radius: 5px;text-align: center;align-items: center;">
          <div id="closemodelsupprimer" style="font-size: 30px; transform: rotate(45deg);position: absolute;right: 14px; top: 0;cursor: pointer;" onclick="document.location.href='blog.php'">+</div>
          <br><br><br>
          
          <?php 
          chdir(__DIR__);
          include '../affichercommantaireduposte.php'; 
          chdir(__DIR__); 
           ?>
          
        </div>
    </div><!-- End .page-wrapper -->

   

    <a id="scroll-top" href="#top" title="Top" role="button"><i>UP</i></a>

   
  </div>

    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/plugins.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.min.js"></script>
    <script type="text/javascript">
        
        function note1(id)
        {
            var id_post=id.substring(id.indexOf("_")+1,id.length);
            document.getElementById('noteposte_'+id_post).value=1;
            document.getElementById('noteposte_'+id_post).onchange();

           
        }
        function note2(id)
        {
            var id_post=id.substring(id.indexOf("_")+1,id.length);
            document.getElementById('noteposte_'+id_post).value=2;
            document.getElementById('noteposte_'+id_post).onchange();
           
        }
        function note3(id)
        {
            var id_post=id.substring(id.indexOf("_")+1,id.length);
            document.getElementById('noteposte_'+id_post).value=3;
            document.getElementById('noteposte_'+id_post).onchange();
            
        }
        function note4(id)
        {
            var id_post=id.substring(id.indexOf("_")+1,id.length);
            document.getElementById('noteposte_'+id_post).value=4;
            document.getElementById('noteposte_'+id_post).onchange();
          
        }
        function note5(id)
        {
            var id_post=id.substring(id.indexOf("_")+1,id.length);
            document.getElementById('noteposte_'+id_post).value=5;
            document.getElementById('noteposte_'+id_post).onchange();
            
        }


        function notechange(id)
        {
             var id_post=id.substring(id.indexOf("_")+1,id.length);
            var x=document.getElementById(id);
            var b1=document.getElementById("b1_"+id_post);
            var b2=document.getElementById("b2_"+id_post);
            var b3=document.getElementById("b3_"+id_post);
            var b4=document.getElementById("b4_"+id_post);
            var b5=document.getElementById("b5_"+id_post);
           if (x.value==1)
            {
                b5.style.color='#f1c40f';
                b4.style.color='#303030';
                b3.style.color='#303030';
                b2.style.color='#303030';
                b1.style.color='#303030';
            }
            if (x.value=="2")
            {
                b5.style.color='#f1c40f';
                b4.style.color='#f1c40f';
                b3.style.color='#303030';
                b2.style.color='#303030';
                b1.style.color='#303030';
            }
            if (x.value=="3")
            {
                b5.style.color='#f1c40f';
                b4.style.color='#f1c40f';
                b3.style.color='#f1c40f';
                b2.style.color='#303030';
                b1.style.color='#303030';
            }
            if (x.value=="4")
            {
                b5.style.color='#f1c40f';
                b4.style.color='#f1c40f';
                b3.style.color='#f1c40f';
                b2.style.color='#f1c40f';
                b1.style.color='#303030';
            }
            if (x.value=="5")
            {
                b5.style.color='#f1c40f';
                b4.style.color='#f1c40f';
                b3.style.color='#f1c40f';
                b2.style.color='#f1c40f';
                b1.style.color='#f1c40f';
            }



        }
    </script>
   

</body>
</html>