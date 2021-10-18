<?php include('header.php')?>
<link rel="stylesheet" href="./css/referrals.css">
<title>Analysed</title>
<div class="container">
    <div class="small_container">
        <div class="row-recruiter heading-container-referrals-recruiters">
            <div class="left-side-heading-and-links">
                <h2>Refer to your peers so that they can also use our awesome platform!</h2>
                <p>Share via</p>
                <span class="icons-referrals-recruiter row-recruiter">
                    <a href="#"><i class="fa fa-linkedin" aria-hidden="true"  style="color:#167ebe"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true" style="color:#1C9CEB"></i></a>
                    <a href="#"><i class="fa fa-envelope" aria-hidden="true" style="color:#3598DB"></i></a>
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true" style="color:#4267B2"></i></a>
                </span>
            </div>
            <div class="right-side-image-div">
                <img src="./img/Group 1606.svg" alt="">
            </div>
        </div>
        <div class="row-recruiter linkfor-referral">
            <span class="referral-link-to-copy">https://analysed.in/pages/signup/signup.php?referralid=1231%GhbvQlpN5z%</span>
            <button class="link-copy-referral"> Copy link</button>
        </div>
        <div class="your-referrals-main-container">
            <h2>Your referrals</h2>
            <div class="card-item-parent-div-referrals">
                <div class="card-item-your-referrals-single row-recruiter">
                    <span class="card-item-referrals-first-span-parent">
                        <p>Sent on</p>
                        <span>20-5-2020</span>
                    </span>
                    <span class="card-item-referrals-first-span-parent">
                        <p>Name</p>
                        <span>Shubham Kumar</span>
                    </span>
                    <span class="card-item-referrals-first-span-parent">
                        <p>E-mail</p>
                        <span>subahm@gmail.com</span>
                    </span>
                    <span class="card-item-referrals-first-span-parent">
                        <p class="sent-through-text-referrals">Sent through</p>
                    </span>
                    <span class="card-item-referrals-first-span-parent"><i class="fa fa-linkedin" aria-hidden="true"  style="color:#167ebe;font-size:50px"></i></span>
                    <span class="card-item-referrals-first-span-parent">
                        <p>Status</p>
                        <span style="color:#FFBD06">Accepted</span>
                    </span>
            </div>
        </div>
        </div>
    </div>
</div>
<script>
    
document.querySelector('.link-copy-referral').addEventListener('click',copy_password)

function copy_password() {
    var copyText = document.querySelector(".referral-link-to-copy");
    var textArea = document.createElement("textarea");
    textArea.value = copyText.textContent;
    document.body.appendChild(textArea);
    textArea.select();
    document.execCommand("Copy");
    textArea.remove();
    alert("Copied");
}
    
</script>