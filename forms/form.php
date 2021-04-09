<?php 

  if(isset($_POST['submit']))
  {
    require '../assets/vendor/smtp/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    //smtp settings
    $mail->isSMTP(); // send as HTML
    $mail->Host = "smtp.gmail.com"; // SMTP servers
    // $mail->SMTPDebug = 4;
    $mail->SMTPAuth = true; // turn on SMTP authentication
    $mail->Username = "akps1405@gmail.com"; // Your mail
    $mail->Password = 'Ankush@88kd'; // Your password mail
    $mail->Port = 587; //specify SMTP Port
   
    $mail->SMTPSecure = 'tls';                               
    $mail->setFrom($_POST['email'],$_POST['name']);
    $mail->addAddress('akps1405@gmail.com');
    $mail->addReplyTo($_POST['email'],$_POST['name']);
    $mail->isHTML(true);
    $mail->Subject='Form Submission:' .$_POST['subject'];
    $mail->Body='<h3>Name :'.$_POST['name'].'<br> Email: '.$_POST['email'].'<br>Message: '.$_POST['message'].'</h3>';
    if(!$mail->send())
    {
      echo "Something went worng. Please try again.";
    }
    else 
    {
         header("Location: ../index.html");
       $msg="Thanks\t" .$_POST['name']. " for contacting us.";
    }
  }

?>