<?php include('header.php')?>
<link rel="stylesheet" href="./css/jobsDescription.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

<title>Job Description</title>

<div class="container"> 
<div class="small_container">
    <div class="bread-crumbs_Mytools-recruiter" style="margin-bottom: 40px;">
            <a href="/" class="unactive-breadcrumb-link">Dashboard</a> > <a href="" class="unactive-breadcrumb-link">Suggested Jobs</a> > <a href="" class="active-breadcrumb-link">Job Description</a> 
        </div>
    <div class="job-row-flex-JobDescription">
        <div class="left-side-jobDescription">
            <div class="share-icons-leftside-jobDescription">
            <a href="#" style="margin-right: 20px;"><img src="./img/Star.svg" class="share-and-star-icon-img"></a>
                <a href="#"><img src="./img/Share.svg" class="share-and-star-icon-img"></a>

            </div>
            <h2 class="heading-dash">Frontend Developer</h2>
            <div class="icons-flex-left-side-jobsDescription">
                <span> <i class="fa fa-eye" aria-hidden="true" style="color:#FFBD06"></i> 202 views</span>
                <span><i class="fa fa-users" aria-hidden="true" style="color:#8C60EB"></i> 4 applicants</span>
                <span><i class="fa fa-clock-o" aria-hidden="true" style="color:#0F9D58"></i> 23 days remaining</span>
            </div>
            <div class="jobDescription-paragraph-left-side-jobsDescription">
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
            </div>
            <div class="skills-leftSide-jobsDescription">
                <p>Skills</p>
                <span>HTML</span>
                <span>HTML</span>
                <span>HTML</span>
                <span>HTML</span>
            </div>
            <div class="requirements-section-leftSide-jobsDescription">
                <p>Requirements</p>
                <section class="requirements-detail-left-side-JobsDescription">
                    <div class="requirements-subDetail-left-sideJobsDescription">
                        <span>Availability:</span> <p>Hourly</p>
                    </div>
                    <div class="requirements-subDetail-left-sideJobsDescription">
                        <span>Experience level:</span> <p>Intermediate (3-4 years)</p>
                    </div>
                    <div class="requirements-subDetail-left-sideJobsDescription">
                        <span>Languages:</span> <p>English</p>
                    </div>
                </section>
            </div>
            

            <div class="popup" id="popup-1">
              <div class="overlay"></div>
                <div class="content">
                 <div class="close-btn" onlick="togglePopup()">Finish</div>

                  <img src="./img/tick.png">
                  <h2> Applied Successfully</h2>
                  <p>Lorem ipsum reto alsuy adonti asoplre nkis aypign qnikaam</p>
                  <hr>
                
              </div>
            </div>
            <button class="apply-btn" onclick="togglePopup()">Apply for this job</button>

            <script>
              function togglePopup(){
                document.getElementById("popup-1").classlist.toggle("active");
              }
              </script>
      
        
