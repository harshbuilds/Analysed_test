
    <title>Dashboard</title>
    <link rel="stylesheet" href="./css/shortlistedJobs.css">
  <body>
    <?php include('header.php') ?>
    <div class="container">

      <div class="small_container">
        <div class="bread-crumbs_Mytools-recruiter">
            <a href="/" class="unactive-breadcrumb-link">Dashboard</a> > <a href="" class="active-breadcrumb-link">Shortlisted Jobs</a> 
        </div>
      <div class="row-flex-jobs-j alignitemsstart-shortlisted">
            <div class="left-section-shortlisted-jobs">
                <div class="heading_dash">
                    <div class="row-flex-jobj">
                        <h1 class="mainHeadingDash">Shortlisted Jobs</h1>
                        <img src="./img/List icon.svg" style="margin-left: 30px;">
                    </div>
                    <div class="mainParaDashDiv row-flex-jobj">
                            <div class="row-flex-jobj">
                                <label for="sortby">Sort by: </label>
                                <select id="sortby">
                                    <option value="1">Recent</option>
                                </select>
                            </div>
                            <div class="row-flex-jobj">
                                <label for="sortby1">Applicants:</label>
                                    <select id="sortby1">
                                        <option value="1">Low to High</option>
                                    </select>
                            </div> 
                    </div>
                </div>
                <div class="shortlisted-jobs-cards-main-div">
                    <p class="shortlisteddivheading">Shortlisted Jobs (2)</p>
                    <div class="row-flex-jobj card-main-div-shortlisted">
                        <div class="single-item-shortlisted-jobs">
                            <div class="share-and-star-icon row-flex-jobj">
                                <a href=""><img src="./img/star.png"></a>
                                <a href=""><img src="./img/share.png"></a>
                            </div>
                            <img src="./img/Uber icon.svg" alt="">
                            <p class="product-name">Product Owner</p>
                            <p class="Desc">Analysis, CMR, Data Validating...</p>
                            <p class="nameCompany">Uber</p>
                            <p class="locationCompany">Portland, OG</p>
                            <div class="row-flex-jobs-j">
                                <a href="" class="seemore-button">See more</a>
                                <span class="job-duration">20 days left</span>
                            </div>
                        </div>
                        <div class="single-item-shortlisted-jobs">
                            <div class="share-and-star-icon row-flex-jobj">
                            <a href=""><img src="./img/star.png"></a>
                                <a href=""><img src="./img/share.png"></a>
                            </div>
                            <img src="./img/Adobe icon.png" alt="">
                            <p class="product-name">Product Owner</p>
                            <p class="Desc">Analysis, CMR, Data Validating...</p>
                            <p class="nameCompany">Uber</p>
                            <p class="locationCompany">Portland, OG</p>
                            <div class="row-flex-jobs-j">
                                <a href="" class="seemore-button">See more</a>
                                <span class="job-duration">20 days left</span>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="right-section-shortlisted-jobs">
                    <p class="filterheading">Filter</p>
                    <div class="input-div-right-section-shortlisted-jobs">
                        <label for="location">Location</label>
                        <input type="text" placeholder="Enter Location" name="location">
                    </div>
                    <div class="input-div-right-section-shortlisted-jobs">
                        <label for="PaySalaryRange">Pay Salary Range</label>
                        <div class="row-flex-jobj">
                            <input type="text" placeholder="Min" name="min" class="minINJ">
                            <span class="toINJ">to</span>
                            <input type="text" placeholder="Max" name="Max" class="minINJ">
                        </div>
                    </div>
                    <div class="input-div-right-section-shortlisted-jobs selectItem">
                        <label for="Industry">Industry</label>
                        <select id="industry" name="industry">
                            <option></option>
                        </select>
                    </div>
                    <div class="input-div-right-section-shortlisted-jobs">
                        <label for="Jobtype">Job Type</label>
                        <div class="row-flex-jobj">
                            <input type="radio" name="Jobtype" id="fultime" value="Fulltype">
                            <label for="fultime" class="radioLabel">Full time job</label>
                        </div>
                        <div class="row-flex-jobj">
                            <input type="radio" name="Jobtype" id="Part-time Job" value="Parttype">
                            <label for="Part-time Job" class="radioLabel">Part-time Job</label>
                        </div>
                        <div class="row-flex-jobj">
                            <input type="radio" name="Jobtype" id="Internship" value="Intertype">
                            <label for="Internship" class="radioLabel">Internship</label>
                        </div>
                    </div>
                    <div class="input-div-right-section-shortlisted-jobs">
                        <label for="AddSkills">Add Skills</label>
                        <input type="text" placeholder="Add Skills" name="AddSkills" id="AddSkills">
                    </div>
            </div>
        </div>
      </div>
    </div>