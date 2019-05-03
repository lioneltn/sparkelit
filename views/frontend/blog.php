<?php
session_start();
chdir(__DIR__);
if(!isset($_SESSION['email']))
{
    $_SESSION['email']=NULL;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">

    <title>Blog</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Bootstrap eCommerce Template">
    <meta name="author" content="SW-THEMES">
        
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../meta/Logoreduit.png">
    
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">


    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.min.css">
    <style type="text/css">

    .lienActive
        {
            background-color: #29363c;
            color:#fff;
            font-size: 15px;
            padding-left:5px;
            padding-right:5px;
            margin-left: 7px;
            margin-right: 7px;
            text-decoration: none;
           
        }
        .lien
        {
            padding-left:5px;
            padding-right:5px;
            font-size: 15px;
            margin-left: 7px;
            margin-right: 7px;
            text-decoration: none;
           
        }
        .lien:hover , .lienActive:hover
        {
             text-decoration: none;
             background-color: #29363c;
            color:#fff;

        }
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
        /*else
        {
            header('location:')
        }*/
    }
    ?>
    <div class="page-wrapper">
       <?php include "header2.php"; ?>
            
        <main class="main">
            <br>
    

            <div class="container">
                <select class="form-control" onchange="triepost(this.value)">
                    <option value="Par default" selected="selected">Par default</option>
                    <option value="Popularite">Popularite Decroissante</option>
                    <option value="Date">Date Decroissante</option>
                    <option value="PopulariteC">Popularite Croissante</option>
                    <option value="DateC">Date Croissante</option>
                </select>
                <input  class="form-control" placeholder="titre" type="text" name="recherchetitre" id="recherchetitre" onkeyup="recherchetitre(this.value)">

                <?php
                        if (isset ($_GET['page']))
                        {
                            $_COOKIE['page']=$_GET['page'];
                        }
                        else
                        {
                            $_COOKIE['page']=1;
                        }
                        //echo $_COOKIE['page'];
                ?>

                <div class="row" id="contenu">
                    <!--<div class="col-lg-9">-->
                        <?php 
                        include "../afficherpostfront.php";
                        chdir(__DIR__);
                        ?>

                        
                     

                       
                    <!--</div>--><!-- End .col-lg-9 -->

                   
                </div><!-- End .row -->

                <?php 
                chdir(__DIR__);
                //echo "afficherpostfront.php?page=".$_GET['page'];
                $nbpost1=$poste1C->totalpost();
                    $nbpost=$nbpost1['total'];
                   $lien=ceil($nbpost/10);
                   $debut1=$debut+1;
                   $debut2=$debut+10;
                   if($nbpost<$debut2)
                   {
                    $debut2=$nbpost;
                   }
                   
                   ?>

                   <nav class="toolbox toolbox-pagination">
                    <div class="toolbox-item toolbox-show">
                        <label><?php echo "Affichage de " . $debut1 ."-".$debut2 ." de ". $nbpost ." resultats"?></label>
                    </div><!-- End .toolbox-item -->

                    <ul class="pagination">
                    <?php
                        for($i=1;$i<=$lien;$i++)
                        {
                            if($_COOKIE['page']==$i)
                            {
                                echo "<li><a class='lienActive' style='background-color=black;color=white' href=blog.php?page=".$i.">".$i."</a></li>";
                            }
                            else
                            {
                                echo "<li><a class='lien' href=blog.php?page=".$i.">".$i."</a></li>";
                            }
                            
                        }
                     ?>
                    </ul>
                </nav>
            </div><!-- End .container -->

            <div class="mb-6"></div><!-- margin -->
        </main><!-- End .main -->

        <?php include "footer2.php"; ?>
    </div><!-- End .page-wrapper -->

    

    <a id="scroll-top" href="#top" title="Top" role="button"><i>UP</i></a>

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

        function triepost(str)
        {
            document.getElementById("recherchetitre").value="";
            if(str=="Par default")
            {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange=function(){
                    if(this.readyState == 4 && this.status == 200){
                        document.getElementById("contenu").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("POST","../afficherpostfrontdefaut.php",true);
                xmlhttp.send();
            }
            if(str=="Date")
            {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange=function(){
                    if(this.readyState == 4 && this.status == 200){
                        document.getElementById("contenu").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("POST","../afficherpostfrontTrieDateDesc.php",true);
                xmlhttp.send();
            }
            if(str=="Popularite")
            {
                var xmlhttp = new XMLHttpRequest();

                xmlhttp.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                        document.getElementById("contenu").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("POST","../afficherpostfrontTrieNoteDesc.php",true);
                xmlhttp.send();
            }

            if(str=="DateC")
            {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange=function(){
                    if(this.readyState == 4 && this.status == 200){
                        document.getElementById("contenu").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("POST","../afficherpostfrontTrieDateASC.php",true);
                xmlhttp.send();
            }
            if(str=="PopulariteC")
            {
                var xmlhttp = new XMLHttpRequest();

                xmlhttp.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                        document.getElementById("contenu").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("POST","../afficherpostfrontTrieNoteASC.php",true);
                xmlhttp.send();
            }
        }

        function recherchetitre(str)
        {
            //var page=
            var test="page="+<?php echo $_COOKIE['page'];?>;
            //alert(test);
           // document.cookie="page="+;
            
            if(str=="")
            {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange=function(){
                    if(this.readyState == 4 && this.status == 200){
                        document.getElementById("contenu").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("POST","../afficherpostfrontdefaut.php?"+test,true);
                xmlhttp.send();
            }
            else
            {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange=function(){
                    if(this.readyState == 4 && this.status == 200){
                        document.getElementById("contenu").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET","../recherchepostepartitrefront.php?recherche="+str,true);
                xmlhttp.send();
            }
        }
    </script>
   

</body>
</html>