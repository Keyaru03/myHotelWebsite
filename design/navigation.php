<?php
// Get the current page name
$current_page = basename($_SERVER['PHP_SELF']);
?>
        
        <!---start-Wrap--->
			<!---start-header--->
			<div class="header">
				<div class="wrap">
					<div class="header-top">
						<div class="logo">
						<div>
                        <img src="images/coollogo.jpg.png" align="center" width=700px height=150 px>
						<div class="contact-info">
							<a href = "contact.php" target = "_self"> 
								<img src = "images/contact us.png" alt = "contact-us" width=150px height=130px border = "0"/> 
							<p class="phone">Call us : <a href="#">0969xxxxxxx</a></p>
							<p class="gpa">Gps : <a href="#top123">View map</a></p>
							<p class="code">BROUGHT TO YOU BY:<a href="https:zeeshanovic.blogspot.com">Kups</a></p>

						</div>
						<div class="clear"> </div>
					</div>
				</div>
				<div class="header-top-nav">
					<div class="wrap">
						<ul>
							<li class="<?= ($current_page == 'index.php') ? 'active' : '' ?>"><a href="index.php">Home</a></li>
							<li class="<?= ($current_page == 'about.php') ? 'active' : '' ?>"><a href="about.php">About</a></li>
							<li class="<?= ($current_page == 'services.php') ? 'active' : '' ?>"><a href="services.php">Services</a></li>
							<li class="<?= ($current_page == 'gallery.php') ? 'active' : '' ?>"><a href="gallery.php">Gallery</a></li>
							
							<div class="clear"> </div>
						</ul>
					</div>
				</div>
			</div>