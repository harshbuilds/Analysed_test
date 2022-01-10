<link rel="stylesheet" href="./css/contactUs.css"> <!--linking to the css file-->
<?php include('header.php')?> <!--including the header file-->

<title>Contact Us</title>  <!--title of the page-->

<div class="title">
    <h2>Reach out to us</h2>
    <br>
    <p>We love to hear from you</p>
</div>



<div class="form-popup" id="myForm">
  <form action="" method="post" class="form-container">
  <div class="img">
    <img src="./img/contact.png" style="width:320px;height:270px;">
</div>
                                         <!--First Name-->
                                         <div class="first-name">
                                        <label class="first-name">First Name<span>*</span></label>
                                        <input type="text" name="firstname" id="first-name" placeholder="Enter First Name" oninput="this.className=''" required>
                                        </div>	
                                   
                                        <!--Last Name-->
                                        <div class="last-name">
                                        <label class="last-name">Last Name<span>*</span></label>
                                        <input type="text" name="lastname" id="last-name" placeholder="Enter Last Name" oninput="this.className=''" required>
                                        </div>

                                         <!--email-->
                                         <div class="email">
                                        <label class="email">Email<span>*</span></label>
                                         <input type="email" name="email" id="email" placeholder="Email" oninput="this.className=''" required>
                                         </div>

                                         <!--contact number-->
                                         <div class="phone">
                                        <label class="phone">Contact Number<span>*</span></label>
                                         <input type="tel" name="phone" id="phone" placeholder="Enter Contact Number" oninput="this.className=''" required>
                                         </div>

                                         <!--Message-->
                                        <div class="message">
                                        <label class="messsage">Message<span>*</span></label>
                                        <input type="text" name="message" id="message" placeholder="Message" oninput="this.className=''" required>
                                        </div>

                                        <!--location-->
                                        <div class="location">
                                            <img class="location" src="./img/location.png">
                                            <p style="color:grey;">Address</p>
                                        <p> Hyderabad</p>
                                        </div>

                                        <!--general support-->
                                        <div class="general-support">
                                            <img class="general-support" src="./img/mail-icon-blue.png">
                                            <p style="color:grey;">General Support</p>
                                        <p> support@analysed.in</p>
                                        </div>
				        
                                         <!--contact number of analysed-->
                                         <div class="contact">
                                            <img class="contact" src="./img/phone.png" style="width:30px;height:30px;">
                                            <p style="color:grey;">Contact Number</p>
                                        <p> +91 (630) 003 6660     </p>
                                        <p> +91(789) 327888570</p>
                                        </div>

                                        <!--send button-->
                                        <div class="sendBtn"> 
                                         <input type="submit" id="sendBtn" name="send" value="Send Message">
                                        <img src="./img/send.png">
                                         </div>
  </form>
</div>
