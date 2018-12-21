<?php include ('header.php'); ?>
<?php 
$_REQUEST["pagename"] = "gallery";
?>
<body class="homepage trans-header sticky white-datepicker">
<?php include ('topbar.php'); ?>
<div class="internal-page-title about-page" data-parallax="scroll" data-image-src="images/internal-header.jpg">
    <h1> <span>Athithi Homes</span> Gallery</h1>
    <ol class="breadcrumb"><!-- Internal Page Breadcrumb -->
        <li><a href="index.php">Home</a></li>
        <li class="active">Gallery</li>
    </ol>
</div>
<!-- End of Internal Page Header -->
<!-- Welcome -->
<div id="welcome" class="container">
    <!-- Inner section -->
    <div class="inner-content">
        <?php include ('gallery.php'); ?>
    </div>
</div>
<?php include ('homestaymessage.php'); ?>
<?php include ('footer.php'); ?>
</body>
</html>
