<?php

if (isset($_POST["complaint"]))
{
  $fname = $_POST["fname"];
  $mobile = $_POST["mobile"];
  $msg = $_POST["msg"];   

  $to = "rohanjadhav76951@gmail.com";
  $subject = "Complaint Board | Quants Venture";

  $message = "<big style='margin-bottom: 25px; display: block;'>Dear Quants Venture,</big>";
  $message .= "<h4 style='margin-bottom: 20px;'>".$fname." have filled form for complaint</h4>";
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
  <th>Message</th>
  <td>".$msg."</td>
  </tr>
  </table>";

  $header = "From: no-reply@quantsventure.com \r\n";
  $header .= "MIME-Version: 1.0\r\n";
  $header .= "Content-type: text/html\r\n";

  $retval = mail($to,$subject,$message,$header);

  if( $retval == true ) 
  {
    echo ("<script LANGUAGE='JavaScript'>
      window.alert('Thank you for contacting us!');
      window.location.href = 'complaint-board.html';
    </script>");
  }
  else 
  {
    echo ("<script LANGUAGE='JavaScript'>
      window.alert('There was a technical problem, please try again later!');
      window.location.href = 'complaint-board.html';
    </script>");
  }
}

?>