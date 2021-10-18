<?php include('header.php')?>
<link rel="stylesheet" href="./css/contact.css">
<title>Analysed</title>
<div class="container">
    <div class="small_container">
        <div class="heading_dash">
            <h1 class="mainHeadingDash">Reach out to us</h1>
            <p class="mainParaDash">We love to hear from you</p>
        </div>
    <section class="contact-us-section-box row-recruiter">
        <div class="left-flex-contact-us-section-box">
            <img src="./img/delivery_address.svg" class="contact-us-svg-recruiter">
            <div class="row-recruiter contact-info-left-flex-contact-us-section-box">
                <span>
                    <span class="grey-small-text-contact-us">Address</span>
                    <p class="black-text-contact-us-image-below">Hyderabad</p>
                </span>
                <span>
                    <span class="grey-small-text-contact-us">General Support</span>
                    <p class="black-text-contact-us-image-below">support@analysed.in</p>
                </span>
            </div>
            <div class="row-recruiter contact-info-left-flex-contact-us-section-box">
                <span>
                    <span class="grey-small-text-contact-us">Contact Number</span>
                    <p class="black-text-contact-us-image-below">+91 (630)-003-6660</p>
                </span>
                <span>
                    <p class="black-text-contact-us-image-below">+91-(789)-327-8570</p>
                </span>
            </div>
        </div>
        <div class="right-flex-contact-us-section-box">
            <form action="/" id="contact-us-recruiter">
            <div class="row-recruiter input-labels-contact-us">
                <span>
                    <label for="first-name-recruiter-contact-us">First Name *</label><br>
                    <input type="text" placeholder="Enter your first name" name="first-name" required id="first-name-recruiter-contact-us">
                </span>
                <span>
                    <label for="first-name-recruiter-contact-us">Last Name</label><br>
                    <input type="text" placeholder="Enter your last name" name="last-name"  id="last-name-recruiter-contact-us">
                </span>
            </div>
                    <span>
                    <label for="email-recruiter-contact-us">Email *</label><br>
                    <input type="email" placeholder="Enter your email address" name="email" required id="email-recruiter-contact-us">
                </span>
                <span>
                    <label for="number-recruiter-contact-us">Contact number *</label><br>
                    <input type="tel" placeholder="Enter your phone number" maxlength = 10 required name="phonenumber" id="number-recruiter-contact-us">
                </span>
                <span>
                    <label for="Message-recruiter-contact-us">Message *</label><br>
                    <textarea placeholder="Enter your message here" required id="Message-recruiter-contact-us" form="usrform" name="message"></textarea>
                </span>
                <button class="button-recruiter-contact-us-submit" type="submit">Send message&nbsp;<i class="fa fa-paper-plane" aria-hidden="true"></i></button>
            </form>
        </div>
    </section>