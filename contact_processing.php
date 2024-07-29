


<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = htmlspecialchars($_POST['fname']);
    $mobile = htmlspecialchars($_POST['mobile']);
    $email = htmlspecialchars($_POST['email']);
    $inquiry = htmlspecialchars($_POST['inquiry']);
    $msg = htmlspecialchars($_POST['msg']);

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'lorem.ipsum.sample.email@gmail.com';
        $mail->Password = 'novtycchbrhfyddx'; // Replace with your actual password or use environment variables
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Recipients
        $mail->setFrom($email, $fname);
        $mail->addAddress('rohanjadhav76951@gmail.com'); // Replace with the admin's email address

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Contact Us | Quants Venture';
       
        $mail->Body    = " <div style='font-family: Arial, sans-serif; line-height: 1.6;'>
           <big style='margin-bottom: 25px; display: block;'>Dear Quants Venture,</big>
            <h4 style='margin-bottom: 20px;'>".$fname." have filled form from contact us</h4>
            <h4>Following are the details:</h4>
            <h2 style='color: #333;'>New Contact Form Submission</h2>
            <table border='1' style='width: 100%; border-collapse: collapse; margin: 20px 0;'>
                <tr style='background-color: #f2f2f2;'>
                    <th style='padding: 10px; text-align: left;'>Full Name</th>
                    <td style='padding: 10px;'>$fname</td>
                </tr>
                <tr>
                    <th style='padding: 10px; text-align: left;'>Mobile</th>
                    <td style='padding: 10px;'><a href='tel:+91$mobile' style='text-decoration: none; color: #007bff;'>$mobile</a></td>
                </tr>
                <tr style='background-color: #f2f2f2;'>
                    <th style='padding: 10px; text-align: left;'>Email</th>
                    <td style='padding: 10px;'><a href='mailto:$email' style='text-decoration: none; color: #007bff;'>$email</a></td>
                </tr>
                <tr>
                    <th style='padding: 10px; text-align: left;'>Inquiry</th>
                    <td style='padding: 10px;'>$inquiry</td>
                </tr>
                <tr style='background-color: #f2f2f2;'>
                    <th style='padding: 10px; text-align: left;'>Message</th>
                    <td style='padding: 10px;'>$msg</td>
                </tr>
            </table>
        </div>";

        $mail->send();
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Thank you for contacting us!');
        window.location.href = 'contact-us.php';
      </script>");
    } catch (Exception $e) {
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('There was a technical problem, please try again later!');
        window.location.href = 'contact-us.php';
      </script>");
    }
} else {
    echo 'Invalid request method.';
}
?>
