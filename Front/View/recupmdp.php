<?php
use  PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;
 
 require 'PHPMailer/src/Exception.php';
 require 'PHPMailer/src/PHPMailer.php';
 require 'PHPMailer/src/SMTP.php';
session_start();


if(isset($_POST['submit']))
{
	$conn= mysqli_connect("localhost", "root", "") or die(mysqli_error()); // Connect to database server(localhost) with username and password.
		mysqli_select_db($conn,"projetweb") or die(mysqli_error()); // Select registrations database.
		
	$Email = $_POST['Email'];
		
		
	$search = mysqli_query($conn,"SELECT * from client where Email='$email'") or die(mysqli_error($conn)); 
$match  = mysqli_num_rows($search);


if($match > 0){
	while($row=mysqli_fetch_array($search))
{
	$first_name = $row['Nom'];
	$last_name = $row['Prenom'];
}
$MDP = rand(999, 99999);
$password_hash = md5($MDP);
$output='<p>Please use the following password to connect to your account.</p>';
$output.='<p>-------------------------------------------------------------</p>';
$output.='<p>Email :'.$Email.'</p>';		
$output.='<p>New password :'.$MDP.'</p>';		
$output.='<p>-------------------------------------------------------------</p>';
$output.='<p>Please change the password as soon as you connect to your account,
If you did not request this forgotten password email, no action 
is needed, your password will not be reset. However, you may want to log into 
your account and change your security password as someone may have guessed it.</p>';   	
$output.='<p>Thanks</p>';
mysqli_query($conn,"UPDATE client set password='$password_hash' where Email='$Email'") or die(mysqli_error($conn));
                  $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
                  try {
                      //Server settings
                      $mail->SMTPDebug = 2;                                 // Enable verbose debug output
                      $mail->isSMTP();                                      // Set mailer to use SMTP
                      $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                      $mail->SMTPAuth = true;                               // Enable SMTP authentication
                      $mail->Username = 'animali@gmail.com';                 // SMTP username
                      $mail->Password = 'animali123';                           // SMTP password
                      $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                      $mail->Port = 465;                                    // TCP port to connect to
                  
                      //Recipients
                      $mail->setFrom('animali@gmail.com', 'animali123');
                      $mail->addAddress($Email, $Nom." ".$Prenom);     // Add a recipient
                      
                      
                      //Content
                      $mail->isHTML(true);                                  // Set email format to HTML
                      $mail->Subject = 'Animali Password Recovery';
                      $mail->Body=$output;
                      $mail->send();
                  } catch (Exception $e) {
                      echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
                  }
	
}
}