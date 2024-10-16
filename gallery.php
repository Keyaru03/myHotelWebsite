<!DOCTYPE HTML>
<html>
	<head>
		<title>Hotel ni Tito | Gallery</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<style>
        .countdown {
            font-family: Arial, sans-serif;
            font-size: 24px;
            color: #333;
        }
    </style>
	</head>
	<body>

	<?php

	// Set the timezone to the Philippines (Asia/Manila)
    date_default_timezone_set('Asia/Manila');

    // Set the target date for the countdown
   // Target dates
$deluxPrimeExpirationKingSize = "2024-10-13 23:30:00";  // Your target date and time
$deluxPrimeExpirationQueenSize = "2024-10-13 23:31:00";  // Your target date and time
$deluxPrimeExpirationImperial = "2024-10-13 23:32:00";  // Your target date and time
$deluxPrimeExpirationTerrace = "2024-10-13 23:33:00";  // Your target date and time for Terrace
$deluxPrimeExpirationExecutive = "2024-10-13 23:34:00";  // Your target date and time for Executive
$deluxPrimeExpirationRegal = "2024-10-13 23:36:00";  // Your target date and time for Regal

// Convert the target dates to Unix timestamps
$targetTimestampKingSize = strtotime($deluxPrimeExpirationKingSize);
$targetTimestampQueenSize = strtotime($deluxPrimeExpirationQueenSize);
$targetTimestampImperial = strtotime($deluxPrimeExpirationImperial);
$targetTimestampTerrace = strtotime($deluxPrimeExpirationTerrace);
$targetTimestampExecutive = strtotime($deluxPrimeExpirationExecutive);
$targetTimestampRegal = strtotime($deluxPrimeExpirationRegal);

// Pass the target timestamp to JavaScript
echo "<script>
    var deluxPrimeExpirationKingSize = $targetTimestampKingSize * 1000;
    var deluxPrimeExpirationQueenSize = $targetTimestampQueenSize * 1000;
    var deluxPrimeExpirationImperial = $targetTimestampImperial * 1000;
	 var deluxPrimeExpirationKingSize = $targetTimestampKingSize * 1000;
    var deluxPrimeExpirationTerrace = $targetTimestampTerrace * 1000;
    var deluxPrimeExpirationExecutive = $targetTimestampExecutive * 1000;
    var deluxPrimeExpirationRegal = $targetTimestampRegal * 1000;
</script>";
?>

		<!---start-Wrap--->
			<!---start-header--->
			<div class="header">
				<div class="wrap">
					<div class="header-top">
						<div class="logo">
						
						</div>
                        <img src="images/coollogo.jpg.png" align="center" width=700px height=150 px>
						<div class="contact-info">
							<a href = "contact.php" target = "_self"> 
								<img src = "images/contact us.png" alt = "contact-us" width=150px height=130px border = "0"/> 
							<p class="phone">Call us : <a href="#">0969xxxxxxx</a></p>
							<p class="gps">Gps : <a href="#top123">View map</a></p>
							<p class="code">BROUGHT TO YOU BY:<a href="https:zeeshanovic.blogspot.com">Kups</a></p>
						</div>
						<div class="clear"> </div>
					</div>
				</div>
				<div class="header-top-nav">
					<div class="wrap">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="services.php">Services</a></li>
							<li class="active"><a href="gallery.php">Gallery</a></li>
							<div class="clear"> </div>
						</ul>
					</div>
				</div>
			</div>
			<!---End-header--->
			<div class="clear"> </div>

			<!-- <div id="countdown"></div> -->

			<!---start-content----->
			<div class="content">
				<div class="wrap">
					<!----start-image-gallery----->
					<div class="gallerys">
					<h3>gallery</h3>
					<div class="gallery-grids">
						<div class="gallery-grid">
							<img src="images/slider1.jpg" alt="">
							<h4>Deluxe prime</h4>
							<p>With king size bed</p>
							<div class="countdown" id="KingSize"></div>
							<div class="gallery-button"><a href="#" onclick="myFunction()">Book Now</a></div>
						</div>
						<div class="gallery-grid grid2">
							<img src="images/slider3.jpg" alt="">
							<h4>Deluxe supreme</h4>
							<p>Two queen size bed</p>
							<div class="countdown" id="queenSize"></div>
							<div class="gallery-button"><a href="#" onclick="myFunction()">Book Now</a></div>
						</div>
						<div class="gallery-grid">
							<img src="images/Imperial club room.jpg" height=155px width=450px alt="">
							<h4>Imperial Club Room</h4>
							<p>For those seeking additional luxury and comfort</p>
							<div class="countdown" id="Imperial"></div>
							<div class="gallery-button"><a href="#" onclick="myFunction()">Book Now</a></div>
						</div>
						<div class="clear"> </div>
					</div>
					<div class="clear"> </div>
					<div class="gallery-grids">
						<div class="gallery-grid">
							<img src="images/terrace club room.jpg"  height=125px width=450px alt="">
							<h4>Terrace Club Suite</h4>
							<p> The Terrace Club Suite has beautiful and spacious terraces, perfect for sunbathing or al fresco dining.</p>
							<div class="countdown" id="Terrace"></div>
							<div class="gallery-button"><a href="#" onclick="myFunction()">Book Now</a></div>
						</div>
						<div class="gallery-grid grid2">
							<img src="images/slider3.jpg" height=125px width=450px alt="">
							<h4>Executive Club Suite</h4>
							<p>The Executive Club Suite is the perfect balance of comfort and luxury.</p>
							<div class="countdown" id="Executive"></div>
							<div class="gallery-button"><a href="#" onclick="myFunction()">Book Now</a></div>
						</div>
						<div class="gallery-grid">
							<img src="images/regular club.jpg" height=125px width=450px alt height=125px width=450px="">
							<h4>Regal Club Suite</h4>
							<p>The Regal Club Suite offers a lavish sanctuary with plenty of room to relax, rejuvenate and entertain.</p>
							<div class="countdown" id="Regal"></div>
							<div class="gallery-button"><a href="#" onclick="myFunction()">Book Now</a></div>
						</div>
					</div>
					<script type="text/javascript" src="js/jquery.lightbox.js"></script>
				    <link rel="stylesheet" type="text/css" href="css/lightbox.css" media="screen">
				  	<script type="text/javascript">
				    $(function() {
				        $('.gallery-grid a').lightBox();
				    });
				    </script>
				    <div class="clear"> </div>
				    <div class="projects-bottom-paination">
						<ul>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
						</ul>
					</div>
				</div>
					<!----start-image-gallery----->
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
						<li><a href="gallery.php">gallery</a></li>
						<li><a href="services.php">Services</a></li>
					
					</ul>
				</div>
                    <div id="top123"> 
                          <img src="images/Antipolo Rizal Map.png" height=200px width=450px height=125px width=450px align= rights>
                    </div>
				<div class="box">
					
				</div>
				<div class="clear"> </div>
			</div>
			<!---start-box---->
		</div>
		<!---start-copy-Right----->
		<div class="copy-tight">
			<p>&copy HOTEL NI TITO,DEMO LAND 2024</p>
		</div>
		<!---End-copy-Right----->
			</div>
			<!---End-content----->
		</div>
		<!---End-Wrap--->
    <script>
function myFunction() {
    var person = prompt("Please enter your mobile number", "9xxxxxxxxx");
   var r =confirm("The price is ₱5500\n Press ok to continue");
    if (person != null&& r== true) {
        alert("Dear customer, Thank You for booking the room!!!");
    }
	if (person != null&& r== false) {
		alert("You cancel your booking ");
}
}




// Timer Script Here

 // Function to update the countdown
 function updateCountdownKing() {
    var now = new Date().getTime();
    var timeLeft = deluxPrimeExpirationKingSize - now;

    var days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
    var hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

    document.getElementById("KingSize").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";

    if (timeLeft < 0) {
        clearInterval(kingSizeInterval);
        document.getElementById("KingSize").innerHTML = "Available";
    }
}

// Function to update the countdown for Queen Size room
function updateCountdownQueen() {
    var now = new Date().getTime();
    var timeLeft = deluxPrimeExpirationQueenSize - now;

    var days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
    var hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

    document.getElementById("queenSize").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";

    if (timeLeft < 0) {
        clearInterval(queenSizeInterval);
        document.getElementById("queenSize").innerHTML = "Available";
    }
}

// Function to update the countdown for Imperial room
function updateCountdownImperial() {
    var now = new Date().getTime();
    var timeLeft = deluxPrimeExpirationImperial - now;

    var days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
    var hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

    document.getElementById("Imperial").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";

    if (timeLeft < 0) {
        clearInterval(imperialInterval);
        document.getElementById("Imperial").innerHTML = "Available";
    }
}
function updateCountdownTerrace() {
    var now = new Date().getTime();
    var timeLeft = deluxPrimeExpirationTerrace - now;

    var days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
    var hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

    document.getElementById("Terrace").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";

    if (timeLeft < 0) {
        clearInterval(terraceInterval);
        document.getElementById("Terrace").innerHTML = "Available";
    }
}

function updateCountdownExecutive() {
    var now = new Date().getTime();
    var timeLeft = deluxPrimeExpirationExecutive - now;

    var days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
    var hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

    document.getElementById("Executive").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";

    if (timeLeft < 0) {
        clearInterval(executiveInterval);
        document.getElementById("Executive").innerHTML = "Available";
    }
}

function updateCountdownRegal() {
    var now = new Date().getTime();
    var timeLeft = deluxPrimeExpirationRegal - now;

    var days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
    var hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

    document.getElementById("Regal").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";

    if (timeLeft < 0) {
        clearInterval(regalInterval);
        document.getElementById("Regal").innerHTML = "Available";
    }
}


// Start countdowns every second
var kingSizeInterval = setInterval(updateCountdownKing, 1000);
var queenSizeInterval = setInterval(updateCountdownQueen, 1000);
var imperialInterval = setInterval(updateCountdownImperial, 1000);
var terraceInterval = setInterval(updateCountdownTerrace, 1000);
var executiveInterval = setInterval(updateCountdownExecutive, 1000);
var regalInterval = setInterval(updateCountdownRegal, 1000);
		// End timer script 
</script>
	</body>
</html>

