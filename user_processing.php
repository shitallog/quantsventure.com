<?php

if (isset($_POST["user"]))
{
  $fname = $_POST["fname"];
  $mobile = $_POST["mobile"];
  $email = $_POST["email"];
  
  $target_dir = "assets/docs/";
  $adharcard = $target_dir . basename($_FILES["adharcard"]["name"]);
  $pancard = $target_dir . basename($_FILES["pancard"]["name"]);
  
  $adharcard_view = (!empty($_FILES["adharcard"]["name"])) ? "<a href='stockbazaarexpert.in/".$adharcard."' target='_blank'>View</a>" : "No file.";
  $pancard_view = (!empty($_FILES["pancard"]["name"])) ? "<a href='stockbazaarexpert.in/".$pancard."' target='_blank'>View</a>" : "No file.";

  $to = "sales@stockbazaarexpert.in";
  //$to = "rohanjadhav76951@gmail.com";
  $subject = "User Consent | Quants Venture";

  $message = "<big style='margin-bottom: 25px; display: block;'>Dear Quants Venture,</big>";
  $message .= "<h4 style='margin-bottom: 20px;'>".$fname." have filled form for user consent</h4>";
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
  <th>Adhar Card</th>
  <td>".$adharcard_view."</td>
  </tr>
  <tr>
  <th>Pan Card</th>
  <td>".$pancard_view."</td>
  </tr>
  </table>";

  $header = "From: ".$email." \r\n";
  $header .= "MIME-Version: 1.0\r\n";
  $header .= "Content-type: text/html\r\n";

  if (!empty($_FILES["adharcard"]["name"]) && !empty($_FILES["pancard"]["name"]))
  {
    // Check if file already exists
    if (file_exists($adharcard) && file_exists($pancard))
    {
      echo ("<script LANGUAGE='JavaScript'>
        window.alert('".$_FILES["adharcard"]["name"]." and ".$_FILES["pancard"]["name"]." already exists!');
        window.location.href = 'user-consent.html';
      </script>");
    }
    else
    {
      if (move_uploaded_file($_FILES["adharcard"]["tmp_name"], $adharcard)) {        
      }
      if (move_uploaded_file($_FILES["pancard"]["tmp_name"], $pancard)) {        
      }
      $retval = mail($to,$subject,$message,$header);
    }
  }
  else if (!empty($_FILES["adharcard"]["name"]))
  {
    // Check if file already exists
    if (file_exists($adharcard))
    {
      echo ("<script LANGUAGE='JavaScript'>
        window.alert('".$_FILES["adharcard"]["name"]." already exists!');
        window.location.href = 'user-consent.html';
      </script>");
    }
    else
    {
      if (move_uploaded_file($_FILES["adharcard"]["tmp_name"], $adharcard)) {
        $retval = mail($to,$subject,$message,$header);
      }
    }
  }
  else if (!empty($_FILES["pancard"]["name"]))
  {
    // Check if file already exists
    if (file_exists($pancard))
    {
      echo ("<script LANGUAGE='JavaScript'>
        window.alert('".$_FILES["pancard"]["name"]." already exists!');
        window.location.href = 'user-consent.html';
      </script>");
    }
    else
    {
      if (move_uploaded_file($_FILES["pancard"]["tmp_name"], $pancard)) {
        $retval = mail($to,$subject,$message,$header);
      }
    }
  }
  else
  {
    $retval = mail($to,$subject,$message,$header);
  }

  if( $retval == true ) 
  {
    echo ("<script LANGUAGE='JavaScript'>
      window.alert('Thank you for contacting us!');
      window.location.href = 'user-consent.html';
    </script>");
  }
  else 
  {
    echo ("<script LANGUAGE='JavaScript'>
      window.alert('There was a technical problem, please try again later!');
      window.location.href = 'user-consent.html';
    </script>");
  }
}

?>