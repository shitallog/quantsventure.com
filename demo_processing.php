
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = htmlspecialchars($_POST['fname']);
    $mobile = htmlspecialchars($_POST['mobile']);
    $email = htmlspecialchars($_POST['email']);
    $state = htmlspecialchars($_POST['state']);
    $msg = htmlspecialchars($_POST['msg']);

    $mail = new PHPMailer(true);

    try {
         // Server settings
         $mail->isSMTP();
         $mail->Host = 'smtp.gmail.com';
         $mail->SMTPAuth = true;
         $mail->Username = 'lorem.ipsum.sample.email@gmail.com'; // Your Gmail address
         $mail->Password = 'novtycchbrhfyddx'; // Your Gmail password
         $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
         $mail->Port = 587;
 
         // Recipients
         $mail->setFrom($email, $fullname);
         $mail->addAddress('rohanjadhav76951@gmail.com'); // Replace with the admin's email address

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Contact Us | Quants Venture';
        $mail->Body = "
            <big style='margin-bottom: 25px; display: block;'>Dear Quants Venture,</big>
            <h1 style='margin-bottom: 20px;'>".$fname." have filled form from contact us</h1>

            <table border='1' style='width:100%' cellpadding='10'>
                <tr><th>Full Name</th><td>$fname</td></tr>
                <tr><th>Mobile</th><td><a href='tel:+91$mobile'>$mobile</a></td></tr>
                <tr><th>Email</th><td><a href='mailto:$email'>$email</a></td></tr>
                <tr><th>State</th><td>$state</td></tr>
                <tr><th>Message</th><td>$msg</td></tr>
            </table>
        ";

        $mail->send();
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Thank you for contacting us!');
        window.location.href = 'index.php';
      </script>");
    } catch (Exception $e) {
      echo ("<script LANGUAGE='JavaScript'>
      window.alert('There was a technical problem, please try again later!');
      window.location.href = 'index.php';
    </script>");
    }
} else {
    echo "Invalid request method";
}
?>

























<?php

if (isset($_POST["demo"]))
{
  $fname = $_POST["fname"];
  $mobile = $_POST["mobile"];
  $email = $_POST["email"];
  $state = $_POST["state"];
//   $segment = $_POST["segment"];
//   $investment = $_POST["investment"];
  $msg = $_POST["msg"];   

  $to = "rohanjadhav76951@gmail.com";
  $subject = "Contact Us | Quants Venture";

  $message = "<big style='margin-bottom: 25px; display: block;'>Dear Quants Venture,</big>";
  $message .= "<h4 style='margin-bottom: 20px;'>".$fname." have filled form for contact us</h4>";
  $message .= "<h4>Following are the details:</h4>";
  $message .= "<br>";
  $message .= "<table border='1' style='width:100%' cellpadding='10'>
  <tr>
  <th>Full Name</th>
  <td>".$fname."</td>
  </tr>
  <tr>
  <th>Mobile</th>
  <td><a href='tel:+91".$mobile."'>".$mobile."</a></td>
  </tr>
  <tr>
  <th>Email</th>
  <td><a href='mailto:".$email."'>".$email."</a></td>
  </tr>
  <tr>
  <th>State</th>
  <td>".$state."</td>
  </tr>
  <tr>
  <th>Message</th>
  <td>".$msg."</td>
  </tr>
  </table>";

  $header = "From: ".$email." \r\n";
  $header .= "MIME-Version: 1.0\r\n";
  $header .= "Content-type: text/html\r\n";

  $retval = mail($to,$subject,$message,$header);

  if( $retval == true ) 
  {
    echo ("<script LANGUAGE='JavaScript'>
      window.alert('Thank you for contacting us!');
      window.location.href = 'index.html';
    </script>");
  }
  else 
  {
    echo ("<script LANGUAGE='JavaScript'>
      window.alert('There was a technical problem, please try again later!');
      window.location.href = 'index.html';
    </script>");
  }
}

?>