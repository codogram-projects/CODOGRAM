<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  // $receiving_email_address = 'ankush098855@gmail.com';

  // if( file_exists($php_email_form = './assets/vendor/smtp/PHPMailerAutoload.php' )) {
  //   include( $php_email_form );
  // } else {
  //   die( 'Unable to load the "PHP Email Form" Library!');
  // }

  // $contact = new PHP_Email_Form;
  // $contact->ajax = true;
  
  // $contact->to = $receiving_email_address;
  // $contact->from_name = $_POST['name'];
  // $contact->from_email = $_POST['email'];
  // $contact->subject = $_POST['subject'];

  // // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  
  // $contact->smtp = array(
  //   'host' => 'smtp.gmail.com',
  //   'username' => 'ankush098855@gmail.com',
  //   'password' => 'Ankush@88kd',
  //   'port' => '587'
  // );
  

  // $contact->add_message( $_POST['name'], 'From');
  // $contact->add_message( $_POST['email'], 'Email');
  // $contact->add_message( $_POST['message'], 'Message', 10);
  if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject'])){
    $name=$_POST['name']);
    $email=$_POST['email'];
    $mobile$_POST['subject'];
    $comment$_POST['message'];
  
  $html="<table><tr><td>Name</td><td>$name</td></tr><tr><td>Email</td><td>$email</td></tr><tr><td>Mobile</td><td>$mobile</td></tr><tr><td>Comment</td><td>$comment</td></tr></table>";
	
	include('../assets/vendor/smtp/PHPMailerAutoload.php');
	$mail=new PHPMailer(true);
	$mail->isSMTP();
	$mail->Host="smtp.gmail.com";
	$mail->Port=587;
	$mail->SMTPSecure="tls";
	$mail->SMTPAuth=true;
	$mail->SMTPDebug = 4;
	$mail->Username="akps1405@gmail.com";
	$mail->Password="Ankush@88kd";
	$mail->SetFrom("akps1405@gmail.com");
	$mail->addAddress("akps1405@gmail.com");
	$mail->IsHTML(true);
	$mail->Subject="New Contact Us";
	$mail->Body=$html;
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if($mail->send()){
		echo "Mail send";
	}else{
			echo "Error occur";
	}
	echo $msg;

  echo $contact->send();
?>
