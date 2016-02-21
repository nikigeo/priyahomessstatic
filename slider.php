<div id="home-top-section">

    <!-- Main Slider -->
    <div id="main-slider">
        <div class="items">
            <a href="#" >
                <img src="images/gallery/1.jpg" alt="3"/><!-- Change the URL section based on your image\'s name -->
            </a>
        </div>
        <div class="items">
            <a href="#" >
                <img src="images/gallery/3.jpg" alt="3"/>
            </a>
        </div>
        <div class="items" >
            <a href="#" >
                <img src="images/gallery/10.jpg" alt="4"/>
            </a>
        </div>
        <div class="items">
            <a href="#" >
                <img src="images/gallery/11.jpg" alt="2"/>
            </a>
        </div>
    </div>

    <!-- Booking Form -->
    <div class="booking-form-container container">
        <div class="booking-form-inner-container">
            <div id="main-booking-form" class="style-2">
                <h2><span>Reservation</span></h2>
                <form class="booking-form clearfix" action="sendreservation.php" method="post"><!-- Do Not remove the classes -->
                    <div class="input-daterange clearfix">
                        <div class="booking-fields col-xs-6 col-md-12">
                            <input placeholder="Choose check in date" class="datepicker-fields check-in" type="text" name="start"/><!-- Date Picker field ( Do Not remove the "datepicker-fields" class ) -->
                            <i class="fa fa-calendar"></i><!-- Date Picker Icon -->
                        </div>
                        <div class="booking-fields col-xs-6 col-md-12">
                            <input placeholder="Choose check out date" class="datepicker-fields check-out" type="text" name="end"/>
                            <i class="fa fa-calendar"></i>
                        </div>
                    </div>
                    <div class="booking-fields col-xs-6 col-md-12">
                        <input type="text" class="email" name="email" placeholder="Email" required="required">
                    </div>
                    <div class="booking-fields col-xs-6 col-md-12">
                        <input type="text" class="text" name="phone" placeholder="Contact No" required="required">
                    </div>
                    <div class="booking-button-container">
                        <input class="btn btn-default" value="Send Request" type="submit"/><!-- Submit button -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>