<?php include ('header.php'); ?>
<body class="homepage trans-header sticky white-datepicker" xmlns="http://www.w3.org/1999/html">
<?php include ('topbar.php'); ?>
<div class="internal-page-title about-page" data-parallax="scroll" data-image-src="images/internal-header.jpg">
    <h1>Testimonials </span></h1>
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
    <?php include ('reviewfilereader.php'); ?><!--
    <div class="inner-content">
        <div style=" text-align:left; color:#000; font-weight:400; font-size:16px;">
            <div class="subtitle" style="color:#000; font-weight:bold;"> 13/11/2015 </div>
            <p>
                Mr. Gabbriel James<br>
                Singapore.<br>
                Good nice and clean place.&nbsp; A big thank you for all.</br>
            </p>
        </div>
    </div>
    <div class="inner-content">
        <div style=" text-align:left; color:#000; font-weight:400; font-size:16px;">
            <div class="subtitle" style="color:#000; font-weight:bold;"> 19/12/2015 </div>
            <p>
                Ms. Bindi Mohan (Tata Consultancy)<br>
                Bangalore.<br>
                It was a wonderful stay.&nbsp; Exactly we wanted to have a place for family  get-together and this was a perfect choice.&nbsp;
                Uncle and Aunty were very warm and nice people. Completely satisfied, good place,  good hospitality.&nbsp; Definitely we will  come again.<br>
            </p>
        </div>
    </div>
    <div class="inner-content">
        <div style=" text-align:left; color:#000; font-weight:400; font-size:16px;">
            <div class="subtitle" style="color:#000; font-weight:bold;"> 28/1/2016 </div>
            <p>
                Mr. Pavel Horak<br>
                Czech Republic<br>
                Very nice, pleasant accommodation. Very  kind and helpful house owner.<br>
            </p>
        </div>
    </div>
    <div class="inner-content">
        <div style=" text-align:left; color:#000; font-weight:400; font-size:16px;">
            <div class="subtitle" style="color:#000; font-weight:bold;"> 28/1/2016 </div>
            <p>
                Ms. Zuzana &nbsp;Cerna<br>
                Czech Republic<br>
                Thank you for your help.&nbsp; Really appreciate your care. Everything is  perfect in the house.</br>
            </p>
        </div>
    </div> -->
    <div class="airbnb-promo">
        <a href="https://www.airbnb.com/rooms/9401802" target="_blank">
            <img src="images/logo/airbnb-logo.png" />Click here
        </a>
        to see our presence and reviews in <b>Airbnb</b>.
    </div>
        <div id="div" class="container">
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