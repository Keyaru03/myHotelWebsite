<?php
include('design/header.php');
include('design/navigation.php');
include('db.php');


?>

<div class="clear"> </div>
<!--start-image-slider---->
<div class="image-slider">
    <!-- Slideshow 1 -->
    <ul class="rslides" id="slider1">
        <li><img src="images/slider1.jpg" alt=""></li>
        <li><img src="images/slider2.jpg" alt=""></li>
        <li><img src="images/slider3.jpg" alt=""></li>
    </ul>
    <!-- Slideshow 2 -->
</div>
<!--End-image-slider---->
<!---start-content----->
<div class="content">
    <div class="quit">
        <p><span class="start">Live </span> Life <span class="end">King Size </span></p>
    </div>
    <div class="content-grids">
        <div class="wrap">
            <div class="content-grid">
                <div class="content-grid-pic">
                    <a href="#"><img src="images/icon1.png" title="image-name" /></a>
                </div>
                <div class="content-grid-info">
                    <h3>Best food Ever</h3>
                    <p>"Adobo Chicken/Beef/Pork,Afrida,<br>
                        Sisig chicken/beef/pork, Pakbet,<br>
                        Kamote fries and Grill meat,,<br>
                        Milktea, Different kind of flavor of juice. . ."</p>
                    <a href="https:swiggy.com">Read More</a>
                </div>
                <div class="clear"> </div>
            </div>
            <div class="content-grid">
                <div class="content-grid-pic">
                    <a href="#"><img src="images/icon2.png" title="image-name" /></a>
                </div>
                <div class="content-grid-info">
                    <h3>24x7 phone support</h3>
                    <p>"customer is King<br> At your Serive."</p>
                    <a href="contact.html">Read More</a>
                </div>
                <div class="clear"> </div>
            </div>
            <div class="content-grid">
                <div class="content-grid-pic">
                    <a href="#"><img src="images/iocn3.png" title="image-name" /></a>
                </div>
                <div class="content-grid-info">
                    <h3>Best Room Services</h3>
                    <p>"live life king size with<br>
                        all the services at your room"</p>
                    <a href="services.html">Read More</a>
                </div>
                <div class="clear"> </div>
            </div>

            <div class="clear"> </div>
        </div>
    </div>
    <div class="clear"> </div>
    <div class="content-box">
        <div class="wrap">
            <div class="content-box-left">
                <div class="content-box-left-topgrid">
                    <h3>welcome to our Hotel</h3>
                    <p>
                    <ul>
                        <b> Feel Like Home :) </b>
                    </ul>
                    </p>
                    <?php
                    echo '<ul><li><span style="color: white; font-size: 15px;"> Whether you are staying with us, visiting our overlooking mountains & nature park attractions
                        for the day or dining in one of our award-winning restaurants,hotel ni tito promises to deliver
                        extraordinary experiences. We are very excited to bring to you a wide range of new and exciting
                        entertainment options that you must try during your visit..</span></li></ul>';
                    ?>
                    <span>For more information about our Hotel, Call 0969xxxxxxx</span>
                </div>
                <div class="content-box-left-bootomgrids">
                    <div class="content-box-left-bootomgrid">
                        <h3>
                            <?php
                            echo '<ul><li><span style="color: white;">Deluxe Rooms</span></li></ul>';
                            ?>
                        </h3>
                        <b>Guest room, 1 King or 2 Twin/Single Bed(s)</b>
                        <a href="#"><img src="images/slider1.jpg" title="image-name" /></a>
                    </div>
                    <div class="content-box-left-bootomgrid">
                        <h3>
                            <?php
                            echo '<ul><li><span style="color: white;">Luxury Rooms</span></li></ul>';
                            ?>
                        </h3>
                        <b>Guest room, 1 King or 2 Twin/Single Bed(s), Pool access, Balcony</b>
                        <a href="#"><img src="images/slider2.jpg" title="image-name" /></a>
                    </div>
                    <div class="content-box-left-bootomgrid lastgrid">
                        <h3>
                            <?php
                            echo '<ul><li><span style="color: white;">Executive Rooms</span></li></ul>';
                            ?>
                        </h3>
                        <b>Club lounge access, Guest room, 1 King or 2 Double</b>
                        <a href="#"><img src="images/slider3.jpg" title="image-name" /></a>
                    </div>
                    <div class="clear"> </div>
                </div>
                <div class="clear"> </div>
            </div>
            <div class="content-box-right">
                <div class="content-box-right-topgrid">
                    <h3>To days Specials</h3>
                    <a href="#"><img src="images/slider1.jpg" title="imnage-name" /></a>
                    <h4>Super Discount Offer</h4>
                    <b>"For those seeking additional luxury and comfort<br>
                        <u>Size:</u> 45 - 47 square metres<br>
                        <u>Views:</u> The Palm or Aquaventure<br>
                        <u>Occupancy:</u> 2 adults + 2 children<br>
                        <u>Bed type:</u> a king size bed or queen size beds"
                    </b>
                    <a href="gallery.html">Read More</a>
                </div>
                <div class="content-box-right-bottomgrid">

                </div>
            </div>
            <div class="clear"> </div>
        </div>
        <div class="clear"> </div>
        <div class="boxs">
            <div class="wrap">
                <div class="box">

                </div>
                <div class="box center-box">
                    <ul>
                        <li><a href="#" onclick="myFunction()">Leave a Feedback</a></li>
                        <li><a href="#" onclick="myFunction1()">Reviews and Ratings</a></li>
                        <li><a href="gallery.html">gallery</a></li>
                        <li><a href="services.html">Services</a></li>

                    </ul>
                </div>
                <div id="top123">
                    <img src="images/Antipolo Rizal Map.png" height=200px width=450px height=125px width=450px
                        align=rights>
                </div>

                <div class="clear"> </div>
            </div>
            <!---start-box---->
        </div>



        <?php
        include('design/footer.php');
        ?>