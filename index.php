<?php include ('header.php'); ?>
<?php 
$_REQUEST["pagename"] = "home";
?>
<body class="homepage trans-header sticky white-datepicker">
<?php include_once("analyticstracking.php") ?>
<?php include ('topbar.php'); ?>
<?php include ('slider.php'); ?>
<div class="col-md-12" style="display: none">
    <marquee direction="left" style="color:#fc2a08; font-weight:bold; margin-top:40px; font-size:18px;"> <h3>Home Stay at Kadavanthra,Vyttila and Kochi - Affordable 3 BHK apartment -Centrally Located area at Ernakulam city</h3>
    </marquee>
</div>
<!-- <?php include ('eglobe-solution.php'); ?> -->
<!-- Welcome -->
<div id="welcome" class="container">    
    <!-- Heading box -->
    <div class="heading-box">
        <h1>Welcome to <span>Priya Homes Koothattukulam, Kerala</span></h1><!-- Title -->
        <div class="subtitle" style="color:#000; font-weight:bold;">
            YOUR HOME AWAY FROM HOME
        </div><!-- Subtitle -->
        <a href="images/gallery/homestay_certificate_2018-2021.jpg">
            <img src="images/gallery/thumbnails/homestay_certificate_2018-2021.jpg" />
        </a>
        <div>(A Government Certified Homestay)</div>
    </div>
    <!-- Inner section -->
    <div class="inner-content">
        <div style=" text-align:left; color:#000; font-weight:400; font-size:16px;">
            Priya Homes is committed to help you, for a spacious, homely, safe environment with fresh air, and clean water for a Homestay at Ernakulam city. Here you find a calm and quiet Kerala living experience with all modern facilities at a very affordable charges.<br><br>Athithi Homes is situated in a quiet green neighborhood away from the hassles of the city. We believe that “Atithi Devo Bhava” derived from Sanskrit means “The guest is equivalent to God”. Priya Homes is in the city center close to railway stations, transportation hubs, leisure destinations and great shopping areas.<br><br>
            Homestay’s are more friendlier than any closed doors hotel rooms. Visitors can experience the cultural and lifestyle of the nearby places and food.<br><br>
            During the stay, you can make a short visit to all the main tourist attractive places like Thekkady wild sanctuary, Peerumedu, Wagamon, Munnar hill stations, Cochin Lake backwater, Cochin-Alleppey-Kumarakom backwaters, for a change, relaxation and sightseeing.<br><br>
        </div>
    </div>
    <div class="col-md-12">
        <?php include ('carousel.php'); ?>
    </div>

</div>
<?php include ('homestaymessage.php'); ?>
<?php include ('footer.php'); ?>
</body>
</html>
