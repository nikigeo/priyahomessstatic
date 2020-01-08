<?php include ('header.php'); ?>
<?php 
$_REQUEST["pagename"] = "testimonials";
?>
<body class="homepage trans-header sticky white-datepicker" xmlns="http://www.w3.org/1999/html">
<?php include ('topbar.php'); ?>
<div class="internal-page-title">
    <ol class="breadcrumb"><!-- Internal Page Breadcrumb -->
        <li><a href="index.php">Home</a></li>
        <li class="active">Testimonials</li>
    </ol>
</div>
<!-- End of Internal Page Header -->
<div id="div2" class="container">
    <!-- Heading box -->
    <div class="heading-box">
        <h1>Testimonials</h1>
    </div>
    <?php include ('reviewfilereader.php'); ?>
            <!-- Heading box -->
            <!-- Inner section -->
            <div class="contact-page-container" style="margin-top:100px;" >
                <!-- Contact Info -->
                <!-- Contact Form -->
                <div class="contact-form-container">
                    <div class="how-contact col-md-4">
                        <div class="desc"> Your Suggestions: </div>
                    </div>
                    <div class="contact-form-box col-md-8 " style="margin-bottom:50px;">
                        <form class="contact-form clearfix" method="post" action="sendmailfeedback.php">
                            <div class="col-md-6">
                                <input type="text" name="name2" placeholder="Full Name :">
                                <input type="email" name="email2" placeholder="Email :">
                                <input type="text" name="phone2" placeholder="Phone :">
                            </div>
                            <div class="col-md-6">
                                <textarea name="textarea" placeholder="Your Message : "></textarea>
                            </div>
                            <div class="submit-container">
                                <input name="submit" type="submit" class="btn btn-default" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="welcome" class="container">
            <div class="contact-page-container" style="margin-top:100px;" >
            </div>
        </div>
    </div>
    <?php include ('airbnb-promo.php');?>
    <?php include ('footer.php'); ?>
</body>
</html
