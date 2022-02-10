<link rel="stylesheet" href="./css/jsDashboard.css"> <!--linking to the css file-->
<?php include('header.php')?> <!--including the header file-->

<title>JobSeeker Dashboard</title>  <!--title of the page-->

<div class="title">
    <h2>Dashboard</h2>
    <br>
    <p>Welcome back!</p>
</div> 

<!--jobs applied-->
<div class="jobs-applied">
    <p> Jobs Applied</p>
    <h3> 1</h3>
    <img src="./img/stats-img-1.png" style="width:45px;height:45px;">
</div>

<!--jobs nearby-->
<div class="jobs-nearby">
    <p> Jobs Nearby</p>
    <h3>30</h3>
    <img src="./img/stats-img-2.png" style="width:45px;height:45px;">
</div>

<!--shortlisted-->
<div class="shortlisted">
    <p> Shortlisted</p>
    <h3>10</h3>
    <img src="./img/stats-img-3.png" style="width:45px;height:45px;">
</div>

<!--starred job-->
<div class="starred-jobs">
    <p> starred-jobs</p>
    <h3>2</h3>
    <img src="./img/stats-img-4.png" style="width:45px;height:45px;">
</div>


<!--jobs near you-->
<div class="jobs-near-you">
    <p  id="title"> Jobs near you</p>
    <img id="setting" src="./img/setting-icon-blue.png" style="width:15px;height:15px;">
    <p id="place">Langley</p>
    <img id="map" src="./img/map.png" style="width:420px;height:340px;">
    <table>
        <tr>
            <th>Job title</th>
            <th>Job available</th>
        </tr>
        <hr>
        <tr>
            <td>MERN stack developer</td>
            <td>506</td>
        </tr>
      
        <tr>
            <td>MEAN stack developer</td>
            <td>114</td>
        </tr>
      
        <tr>
            <td>django developer</td>
            <td>678</td>
        </tr>
      
        <tr>
            <td>React-native front end developer</td>
            <td>89</td>
        </tr>
    </table>
</div>

<!--profile viewed-->
<div class="profile-viewed">
    <p id="title">Profile Viewed</p>
    <img id="setting" src="./img/setting-icon-blue.png" style="width:15px;height:15px;">
    <p id="days">Last 30 days</p>
    <p id="views">Total views: 136</p>
    <img id="graph" src="./img/graph.png" style="width:460px;height:330px;">

    <table>
        <tr>
            <th>Skills</th>
            <th>No. of Company</th>
        </tr>
        <hr>
        <tr>
            <td>Python</td>
            <td>506</td>
        </tr>
      
        <tr>
            <td>Design Xd</td>
            <td>114</td>
        </tr>
      
        <tr>
            <td>Html & CSS</td>
            <td>678</td>
        </tr>
      
        <tr>
            <td>React Js</td>
            <td>89</td>
        </tr>
    </table>
</div>


<!--Recomendation-->
<div class="recommend">
<h2>Recommended for you</h2>

<!--airbnb-->
<div class="airbnb">
<img id="logo" src="./img/Airbnb-logo.png" style="width:40px;height:40px;">
<img id="share" src="./img/share-icon.png" style="width:17px;height:17px;">
<img id="star" src="./img/star-icon.png" style="width:17px;height:17px;">
<p id="name"> AirBnB</p>
<p id="address">London, UK</p>
<p id="role">FRONTEND DEVELOPER</p>
<progress value="15" max="100" >15%</progress>
<p id="days-left"> 2 days left</p>
<p id="skills">CSS, HTML, UI, FrontEnd</p>
<p id="type">Full time</p>
<input type="button" id="applyNow" name="applyNow" value="Apply Now">
</div>


<!--Netflix-->
<div class="netflix">
<img id="logo" src="./img/Netflix-logo.png" style="width:40px;height:40px;">
<img id="share" src="./img/share-icon.png" style="width:17px;height:17px;">
<img id="star" src="./img/star-icon.png" style="width:17px;height:17px;">
<p id="name"> Netflix</p>
<p id="address">New York, NY</p>
<p id="role">UX/DESIGNER</p>
<progress value="30" max="100" >30%</progress>
<p id="days-left"> 5 days left</p>
<p id="skills">Wireframe, Sketch, Prototyping...</p>
<p id="type">Part time</p>
<input type="button" id="applyNow" name="applyNow" value="Apply Now">
</div>

<!--Uber-->
<div class="uber">
<img id="logo" src="./img/Uber-logo.png" style="width:40px;height:40px;">
<img id="share" src="./img/share-icon.png" style="width:17px;height:17px;">
<img id="star" src="./img/star-icon.png" style="width:17px;height:17px;">
<p id="name"> Uber</p>
<p id="address">Portland, OG</p>
<p id="role">PRODUCT OWNER</p>
<progress value="100" max="100" >100%</progress>
<p id="days-left"> 20 days left</p>
<p id="skills">Analysis, CRM, Data validation...</p>
<p id="type">Full time</p>
<input type="button" id="applyNow" name="applyNow" value="Apply Now">
</div>

<!--view more-->
<div class="view-more">
    <a href="">View More > </a>
</div>
</div>


<!--job search-->
<div class="job-search">
    <h2>Search for specific job</h2>

    <!--data analysis-->
    <div class="data-analysis">
    <img id="logo" src="./img/DataAnalysis.png" style="width:100px;height:100px;">
    <p id="name">Data Analysis</p>
    </div>

    <!--SEO-->
    <div class="seo">
    <img id="logo" src="./img/Seo.png" style="width:100px;height:100px;">
    <p id="name">SEO</p>
    </div>

    <!--Python Developer-->
    <div class="python-developer">
    <img id="logo" src="./img/PythonDeveloper.png" style="width:100px;height:100px;">
    <p id="name">Python Developer</p>
    </div>

     <!--web Developer-->
     <div class="web-developer">
    <img id="logo" src="./img/WebDeveloper.png" style="width:100px;height:100px;">
    <p id="name">Web Developer</p>
    </div>

    <!--view more-->
<div class="view-more">
    <a href="">View More > </a>
</div>
</div>


<!--Upcoming Interview-->
<div class="upcoming-interview">
    <p id="title">Upcoming Interviews</p>
    <input type="button" id="schedule" name="schedule" value="Schedule an interview    +">

    <table>
        <tr>
            <th>NAME</th>
            <th>DATE</th>
            <th>JOB ROLE</th>
        </tr>
        <tr>
            <td id="one"><img src="./img/Ellipse 148-1.png" style="width:45px;height:45px;"></td>
            <td id="name">Martha</td>
            <td id="company">Company</td>
            <td><img id="calendar" src="./img/black-calendar-icon.png" style="width:10px;height:10px;"></td>
            <td id="date">30th Jan,2022</td>
            <td id="clock"><img id="calendar" src="./img/clock.png" style="width:10px;height:10px;"></td>
            <td id="time"> 5pm</td>
            <td id="role">Full stack web developer</td>
</tr>
<hr>
<tr>
            <td id="two"><img src="./img/Ellipse 148-2.png" style="width:45px;height:45px;"></td>
            <td id="name1">Marry</td>
            <td id="company1">Company</td>
            <td><img id="calendar1" src="./img/black-calendar-icon.png" style="width:10px;height:10px;"></td>
            <td id="date1">1st Feb,2022</td>
            <td id="clock1"><img id="calendar" src="./img/clock.png" style="width:10px;height:10px;"></td>
            <td id="time1"> 5pm</td>
            <td id="role1">Full stack web developer</td>
</tr>
    </table>
</div>
