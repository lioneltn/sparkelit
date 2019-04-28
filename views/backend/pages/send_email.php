
<?php


//create_pdf.php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include('pdf.php');

if(isset($_POST["hidden_html"]) && $_POST["hidden_html"] != '')
{
  echo $_POST['email'];
 $file_name = '5icha_chart.pdf';
 $html = '<link rel="stylesheet" href="../vendors/iconfonts/simple-line-icon/css/simple-line-icons.css">
  <link rel="stylesheet" href="../vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.addons.css">
  <link rel="stylesheet" href="../css/style.css">
   ';


 $html .= $_POST["hidden_html"];

 $pdf = new Pdf(array('enable_remote' => true));

 $pdf->load_html($html);
 $pdf->render();
 $output = $pdf->output();
 file_put_contents('chart.pdf', $output);

 



// Load Composer's autoloader
require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'amin.haddad@esprit.tn';                     // SMTP username
    $mail->Password   = 'Lionel123';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('amin.haddad@esprit.tn', 'Amin Haddad');
    $mail->addAddress($_POST['email'], 'Joe User');     // Add a recipient
                  // Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    

    // Attachments
    $mail->addAttachment('chart.pdf');         // Add attachments
       // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = $_POST['hidden_html'];
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


 }
 ?>