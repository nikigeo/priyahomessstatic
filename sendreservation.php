<?php
$name=$_POST['start'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$message=$_POST['end'];

			
//send the email
		
		$to = 'athithihome@gmail.com';
		$subject="Website Reservation Enquiry";
		$from = $email;
		$body ="Date From: $name\n".
		"Date to : $message\n".
		"Email : $email\n".
		"Contact No: $phone\n";
			$headers = "From: $from \r\n";
		$headers .= "Reply-To: $from \r\n";
		
		mail($to, $subject, $body,$headers);
		
		header("Location: index.php");
die();	
				
 
?>
<script type="text/javascript">
         <!--
            function Redirect() {
               window.location="index.php";
            }
         //-->
      </script>
