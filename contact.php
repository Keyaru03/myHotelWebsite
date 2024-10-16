<?php
include('design/header.php'); 
include('design/navigation.php');
?>
<!---End-header--->
<div class="clear"> </div>
<!---start-content----->
<div class="content">
    <div class="wrap">
        <!-------start-contatct------>
        <div class="contact">
            <div class="section group">
                <div class="col span_1_of_3">
                    <div class="contact_info">

                    </div>
                    <img src="images/ECOMMERCE_Icons_Service-512.png" align="left" width=180px height=200px>

                </div>
                <div class="col span_2_of_3">
                    <div class="contact-form">
                        <h3>Contact Us</h3>
                        <form method="post" action="contact-form-handler.php" netlify>


                            <div>
                                <span><label>Enter Email Id</label></span>
                                <span><input name="userName" type="text" class="textbox"></span>
                                <span><label>Enter Feedback</label></span>
                                <textarea name="message" rows="10"
                                    cols="30">Please enter your valuable feeback.</textarea>

                            </div>

                            <div>
                                <span><input type="submit" value="Submit" onclick="myFunction()"></span>
                            </div>
                            </fieldset>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-------start-contatct------>
    </div>
    <div class="clear"> </div>
    <div class="boxs">
        <div class="wrap">
            <div class="box">

            </div>
            <div class="box center-box">
                <ul>
                    <li><a href="https:zeeshanovic.blogspot.com">Leave a Feedback</a></li>
                    <li><a href="https:zeeshanovic.blogspot.com">Reviews and Ratings</a></li>
                    <li><a href="https:zeeshanovic.blogspot.com">FAQs</a></li>
                    <li><a href="https:zeeshanovic.blogspot.com">Packages</a></li>

                </ul>
            </div>
            <div id="top123">
                <img src="images/Antipolo Rizal Map.png" height=200px width=450px height=125px width=450px align=rights>
            </div>
            <div class="box">

            </div>
            <div class="clear"> </div>
        </div>
        <!---start-box---->
    </div>

    <?php
include('design/footer.php');
?>