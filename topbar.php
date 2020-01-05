<div id="top-header">
    <div class="inner-container container">
        <!-- Contact Info -->
        <ul class="contact-info list-inline">
            <li><i class="fa fa-phone"></i>+91 9961262624</li>
            <li><i class="fa fa-phone"></i>+91 97470 33339</li>
            <li><i class="fa fa-envelope-o"></i>athithihome@gmail.com</li>
        </ul>

        <!-- Language Switcher -->
        <select id="language-switcher">
            <option value="1">English</option>
        </select>
        <!-- End of Language Switcher -->
    </div>
</div>
<!-- End of Top Header -->

<!-- Main Header -->
<header id="main-header">
    <div class="inner-container container">
        <div class="left-sec col-sm-4 col-md-2 clearfix">
            <!-- Top Logo -->
            <div id="top-logo">
                <a href="index.php">
                    <img src="images/logo/logo.png" class="img-responsive">
                </a>
            </div>
        </div>

        <div class="col-md-3"> </div>
        <div class="right-sec col-sm-6 col-md-7 clearfix ">

            <!-- Book Now -->

            <!-- Main Menu -->
            <nav id="main-menu" class="">
                <ul class="list-inline pull-right">
                    <li <?php 
						if ($_REQUEST["pagename"] == null || $_REQUEST["pagename"] == "home"){
							echo "class='active'";
						}
						?> ><a href="index.php">Home</a> </li>
                    <li <?php 
						if ($_REQUEST["pagename"] == "aboutus"){
							echo "class='active'";
						}
						?> ><a href="aboutus.php">About Us</a></li>
                    <li <?php 
						if ($_REQUEST["pagename"] == "facilities"){
							echo "class='active'";
						}
						?> ><a href="facilities.php">Facilities</a></li>
                    <li <?php 
						if ($_REQUEST["pagename"] == "gallery"){
							echo "class='active'";
						}
						?> ><a href="gallerydetails.php">Gallery</a></li>
                    <li <?php 
						if ($_REQUEST["pagename"] == "location"){
							echo "class='active'";
						}
						?> ><a href="locationmap.php">Location Map</a></li>
                    <li <?php 
						if ($_REQUEST["pagename"] == "testimonials"){
							echo "class='active'";
						}
						?> ><a href="testimonials.php">Testimonials</a></li>
                    <li <?php 
						if ($_REQUEST["pagename"] == "contact"){
							echo "class='active'";
						}
						?> ><a href="contact.php">Contact</a></li>
                </ul>
            </nav>

            <!-- Menu Handle -->
            <div id="main-menu-handle" class="hidden-md hidden-lg"><i class="fa fa-bars"></i></div>
        </div>
    </div>
    <div id="mobile-menu-container" class="hidden-md hidden-lg"></div>
</header>
