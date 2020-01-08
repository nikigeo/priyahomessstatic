<?php include ('header.php'); ?>
<?php 
$_REQUEST["pagename"] = "contact";
?>
<body class="homepage trans-header sticky white-datepicker">
<?php include ('topbar.php'); ?>
<div class="internal-page-title">
    <ol class="breadcrumb"><!-- Internal Page Breadcrumb -->
        <li><a href="index.php">Home</a></li>
        <li class="active">Contact Us</li>
    </ol>
</div>
<!-- End of Internal Page Header -->

<!-- Contact Page Container -->
<div class="contact-page-container container" style=" margin-top:20px;">

    <!-- Contact Info -->


    <div class="widget col-xs-6 col-md-4 get-in-touch" style="padding:20px;  color:#000;">
        <h4>Koothattukulam, Kera</h4>
        <div class="widget-content">
            <ul>
                <li  style="color:#000; font-weight:600;"><i class="fa fa-map-marker "></i> Priya Homes, Near Sreedhareeyam Hospital, Koothattukulam, Kerala</li>

                <li style="color:#000; font-weight:600;"><i class="fa fa-phone"></i> +91 99612 62624, +91 97470 33339</li>
                <li style="color:#000; font-weight:600;"><i class="fa fa-envelope-o"></i> homespriya@gmail.com</li>
            </ul>
<!-- <ul class="list-inline social-icons">
                <li><a href="#"><i class="fa fa-facebook "></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            </ul>
-->
        </div>
    </div>
    <!-- Contact Form -->
    <div class="contact-form-container">


        <div class="contact-form-box col-md-8">
            <h3> Send an Enquiry </h3>
            <hr>
            <form class="contact-form clearfix" method="post" id="askform" action="sendmail.php">
                <div class="col-md-6">
                    <input type="text" name="name" id="name" placeholder="Full Name :">
                    <input type="email" name="email" id="email" placeholder="Email :">
                    <input type="text" name="phone" id="phone" placeholder="Phone :">
                </div>
                <div class="col-md-6">
                    <textarea name="message" id="message" placeholder="Your Message : "></textarea>
                </div>
                <div class="submit-container">
                    <input type="submit" value="Submit" id="submitbtn" class="btn btn-default">
                </div>
                <span id="sndcrr1"  class="sendclass"></span>
            </form>
        </div>
    </div>

</div>
<!-- End of Contact Page Container -->

<script>
// JavaScript Document
$(document).ready(function (){

				$("#askform").validate({
				rules: {
						message:'required',
						phone:'required',
						name:'required',
						email:'required'						 },
					messages: {
						 message:'&nbsp;Please Enter Message',
						 name:'&nbsp;Please Enter Your Name',
						 phone:'&nbsp;Please Enter Your Phone Number',
						 email:'&nbsp;Please enter Your Email',

							}

				});


			$('#submitbtn').click(function(e){
					if($("#askform").valid()){
					  $('#sndcrr').html("<img src='img/ajax-loaders/ajax-loader-1.gif' title='img/ajax-loaders/ajax-loader-1.gif' >");
					   $("#askqform").ajaxForm({
							target: '#sndcrr',
							 beforeSubmit:function(){
							$("#sndcrr").show();
						 },
						success:function(){
							 $("#name").val('');
							 $("#sndcrr").show();
							 $('#sndcrr').html('<span class="alert alert-success allignalert" >Enquiry Sent Successfully.</span>');
							 $("#sndcrr").delay(5000).fadeOut('slow');
							$('#askform')[0].reset();

						},
						error:function(){
						$("#sndcrr").show();
						} }).submit();
						e.preventDefault();
					}

				});



});
</script>
<?php include ('homestaymessage.php'); ?>
<?php include ('footer.php'); ?>
</body>
</html>
