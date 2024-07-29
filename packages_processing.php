<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = htmlspecialchars($_POST['fullname']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $state = htmlspecialchars($_POST['state']);
    $investment = htmlspecialchars($_POST['investment']);

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
        $mail->Subject = 'New Package Inquiry Submission ! | Quants Venture';

        // Email Body with Inline CSS
        $mail->Body = "

        <div style='font-family: Arial, sans-serif; line-height: 1.6;'>
            <h2 style='color: #333;'>New Package Inquiry Submission</h2>
            <table border='1' style='width: 100%; border-collapse: collapse; margin: 20px 0;'>
                <tr style='background-color: #f2f2f2;'>
                    <th style='padding: 10px; text-align: left;'>Full Name</th>
                    <td style='padding: 10px;'>$fullname</td>
                </tr>
                <tr>
                    <th style='padding: 10px; text-align: left;'>Email</th>
                    <td style='padding: 10px;'><a href='mailto:$email' style='text-decoration: none; color: #007bff;'>$email</a></td>
                </tr>
                <tr style='background-color: #f2f2f2;'>
                    <th style='padding: 10px; text-align: left;'>Phone</th>
                    <td style='padding: 10px;'><a href='tel:+91$phone' style='text-decoration: none; color: #007bff;'>$phone</a></td>
                </tr>
                <tr>
                    <th style='padding: 10px; text-align: left;'>State</th>
                    <td style='padding: 10px;'>$state</td>
                </tr>
                <tr style='background-color: #f2f2f2;'>
                    <th style='padding: 10px; text-align: left;'>Investment</th>
                    <td style='padding: 10px;'>$investment</td>
                </tr>
            </table>
        </div>";

        $mail->send();
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Thank you for Package Inquiry Submission!');
        window.location.href = 'packages.php';
      </script>");
    } catch (Exception $e) {
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('There was a technical problem, please try again later!');
        window.location.href = 'packages.php';
      </script>");
    }
} else {
    echo 'Invalid request method.';
}
?>
