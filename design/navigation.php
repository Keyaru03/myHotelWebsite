<?php


$current_page = basename($_SERVER['PHP_SELF']);

?>


<div class="header">
    <div class="wrap">
        <div class="header-top">
            <div class="logo">
                <div>
                    <img src="images/coollogo.jpg.png" align="center" width=700px height=150 px>
                    <div class="contact-info">
                        <a href="contact.php" target="_self">
                            <img src="images/contact us.png" alt="contact-us" width=150px height=130px border="0" />

                            <div class="auth-buttons">



                                <?php if (!isset($_SESSION['username'])): ?>

                                    <a href="login.php" class="btn login-btn">Login</a>
                                    <a href="signup.php" class="btn signup-btn">Sign Up</a>
                                <?php else: ?>
                                    <!-- Show welcome message and logout link if the user is logged in -->

                                    <a href="logout.php" class="logout-btn">Logout</a>
                                <?php endif; ?>




                                <style>
                                    .auth-buttons {
                                        display: flex;
                                        /* Aligns buttons in a row */
                                        justify-content: flex-end;
                                        /* Aligns buttons to the right */
                                        margin-top: 10px;
                                        /* Adds some space above the buttons */
                                    }

                                    .btn {
                                        padding: 10px 20px;
                                        /* Button padding */
                                        margin: 0 5px;
                                        /* Space between buttons */
                                        border-radius: 5px;
                                        /* Rounded corners */
                                        text-decoration: none;
                                        /* Removes underline from links */
                                        font-weight: bold;
                                        /* Makes the text bold */
                                        transition: background-color 0.3s ease;
                                        /* Smooth transition for background color */
                                    }

                                    .login-btn {
                                        background-color: #4CAF50;
                                        /* Green background for login */
                                        color: white;
                                        /* White text */
                                    }

                                    .signup-btn {
                                        background-color: #008CBA;
                                        /* Blue background for signup */
                                        color: white;
                                        /* White text */
                                    }

                                    /* Hover effects */
                                    .login-btn:hover {
                                        background-color: #45a049;
                                        /* Darker green on hover */
                                    }

                                    .signup-btn:hover {
                                        background-color: #005f73;
                                        /* Darker blue on hover */
                                    }
                                </style>

                            </div>
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
                        <li class="<?= ($current_page == 'index.php') ? 'active' : '' ?>"><a href="index.php">Home</a>
                        </li>
                        <li class="<?= ($current_page == 'about.php') ? 'active' : '' ?>"><a href="about.php">About</a>
                        </li>
                        <li class="<?= ($current_page == 'services.php') ? 'active' : '' ?>"><a
                                href="services.php">Services</a></li>
                        <li class="<?= ($current_page == 'gallery.php') ? 'active' : '' ?>"><a
                                href="gallery.php">Gallery</a></li>

                        <div class="clear"> </div>
                    </ul>
                </div>
            </div>
        </div>