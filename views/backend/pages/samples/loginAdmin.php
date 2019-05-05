<?PHP
include "../../../../entities/comptes/admin.php";
include "../../../../core/comptes/adminC.php";
session_start();

if (isset($_POST['email']) and isset($_POST['password'])  and preg_match ( " /^.+@.+\.[a-zA-Z]{2,}$/ " , $_POST['email'] )) {
    
    $password = "";
    $admin1C = new AdminC();
    $result = $admin1C->recupererAdmin($_POST['email']);
    if($result == FALSE) {
        echo "email incorrect";
    } else {
        foreach ($result as $row) {
            $password = $row['motdepasse'];
            $type = $row['type'];
        }
        /*$type = $admin1C->recupererType($_POST['email']);
        foreach ($type as $row) {
            $type = $row['type'];
        }*/
        if($password != $_POST['password']) {
            echo "<html><header><title>Confirmation</title><meta charset=\"utf-8\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
            <title>CloudUi Premium Bootstrap Admin Dashboard Template</title>
            <!-- plugins:css -->
            <link rel=\"stylesheet\" href=\"../../vendors/iconfonts/simple-line-icon/css/simple-line-icons.css\">
            <link rel=\"stylesheet\" href=\"../../vendors/iconfonts/flag-icon-css/css/flag-icon.min.css\">
            <link rel=\"stylesheet\" href=\"../../vendors/css/vendor.bundle.base.css\">
            <link rel=\"stylesheet\" href=\"../../vendors/css/vendor.bundle.addons.css\">
            <!-- endinject -->
            <!-- plugin css for this page -->
            <!-- End plugin css for this page -->
            <!-- inject:css -->
            <link rel=\"stylesheet\" href=\"../../css/style.css\"></header><body><div class=\"alert alert-success alert-intro\" role=\"alert\">email ou mot de passe incorrect</div></body></html>";
            //echo "email ou mot de passe incorrect ";
            echo "<script>window.location.href='login.php'</script>";
        } else {
            echo "email et mot de passe correct ";
            if($type == 1) {
                $_SESSION['email_admin'] = $_POST['email'];
            echo $_SESSION['email_admin'];
            header('Location: ../../index.php');
            }
            else if($type == 2) {
                $_SESSION['email_admin'] = $_POST['email'];
            echo $_SESSION['email_admin'];
            header('Location: dashboard-artiste.php');
            }
            
            else {
                echo "<html><header><title>Confirmation</title><meta charset=\"utf-8\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
            <title>CloudUi Premium Bootstrap Admin Dashboard Template</title>
            <!-- plugins:css -->
            <link rel=\"stylesheet\" href=\"../../vendors/iconfonts/simple-line-icon/css/simple-line-icons.css\">
            <link rel=\"stylesheet\" href=\"../../vendors/iconfonts/flag-icon-css/css/flag-icon.min.css\">
            <link rel=\"stylesheet\" href=\"../../vendors/css/vendor.bundle.base.css\">
            <link rel=\"stylesheet\" href=\"../../vendors/css/vendor.bundle.addons.css\">
            <!-- endinject -->
            <!-- plugin css for this page -->
            <!-- End plugin css for this page -->
            <!-- inject:css -->
            <link rel=\"stylesheet\" href=\"../../css/style.css\"></header><body><div class=\"alert alert-success alert-intro\" role=\"alert\">email ou mot de passe incorrect</div></body></html>";
            //echo "email ou mot de passe incorrect ";
            echo "<script>window.location.href='login.php'</script>";
            }
            
        }
    }
    
    
} else {
    echo "vérifier les champs";
 }
 
?>