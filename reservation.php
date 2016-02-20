<?php
require_once('admin/config.php');
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$message=$_POST['message'];

			
//send the email
		
		$to = 'abhilashenair@gmail.com';
		$subject="Reservation Enquiry";
		$from = $email;
		$body ="Name: $name\n".
		"Email : $email\n".
		"Message: $message\n".
		"Contact No: $phone\n";
			$headers = "From: $from \r\n";
		$headers .= "Reply-To: $from \r\n";
		
		mail($to, $subject, $body,$headers);
				
 
?>
<script type="text/javascript">
         <!--
            function Redirect() {
               window.location="index.php";
            }
         //-->
      </script>
