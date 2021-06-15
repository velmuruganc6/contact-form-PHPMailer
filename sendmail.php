<?php 
  if(isset($_POST['submit']))
  {
    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    //smtp settings
    $mail->isSMTP(); // send as HTML
    $mail->Host = "smtp.gmail.com"; // SMTP servers
    $mail->SMTPAuth = true; // turn on SMTP authentication
    $mail->Username = "vel@addingsmiles.com"; // Your mail
    $mail->Password = 'Velu@4159'; // Your password mail
    $mail->Port = 587; //specify SMTP Port
    $mail->SMTPSecure = 'tls';                               
    $mail->setFrom($_POST['email'],$_POST['name']);
    $mail->addAddress('vel@addingsmiles.com');
    $mail->addReplyTo($_POST['email'],$_POST['name']);
    $mail->isHTML(true);
    $mail->Subject='Form Submission:' .$_POST['subject'];
    $mail->Body="<table>
                  <tr>
                    <th colspan='2'>Form Submission</th>
                  </tr>
                  <tr>
                    <td>Name :</td>
                    <td>" . $_POST['name'] . "</td>
                  </tr>
                  <tr>
                    <td>E-mail : </td>
                    <td>" . $_POST['email'] . "</td>
                  </tr>	
                  <tr>
                    <td>Message : </td>
                    <td>" . $_POST['message'] . "</td>
                  </tr>
                <table>";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    if(!$mail->send())
    {
      // $error = "Something went worng. Please try again.";
      echo '<script type="text/javascript">';
      echo 'alert("Something went worng. Please try again.");';
      echo 'window.location.href = "index.php";';
      echo '</script>';
    }
    else 
    {
      // $result="Thanks\t" .$_POST['name']. " for contacting us.";
      echo '<script type="text/javascript">';
      echo 'alert("Thanks for contacting us.");';
      echo 'window.location.href = "index.php";';
      echo '</script>';
    }
  }
?>