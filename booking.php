<?php include ('header.php'); ?>
<?php 
$_REQUEST["pagename"] = "booking";
?>
<body class="homepage trans-header sticky white-datepicker">
<?php include ('topbar.php'); ?>
<div class="internal-page-title">
    <ol class="breadcrumb">
        <li><a href="index.php">Home</a></li>
        <li class="active">Booking</li>
    </ol>
</div>
<div id="welcome" class="container">
    <!-- Inner section -->
    <div class="inner-content">	
		<br />
		<div class="payment">
			<a href="https://www.instamojo.com/@priyahomes/" class="payment-btn">
				Pay Now With instamojo<img src="images/instamojo.png" "alt="pay online">
			</a><br/>
			<a href="https://www.payumoney.com/customer/users/paymentOptions/#/E08FC403FFFB7E1F8EF90EC7BA23EE78/priyahomes/187823" class="payment-btn">
				Pay Now With PayU<img src="images/payu.png" "alt="pay online">
			</a>
		</div>
    </div>
</div>

<?php include ('homestaymessage.php'); ?>
<?php include ('footer.php'); ?>
</body>