<title>Dashboard</title>
    <link rel="stylesheet" href="./css/DashboardJobs.css">
    <link rel="stylesheet" href="./css/appliedCandidates.css">
    <link rel="stylesheet" href="./css/shortlistedJobs.css">
  <body>
    <?php include('header.php') ?>
    <div class="container">

      <div class="small_container">
        <div class="bread-crumbs_Mytools-recruiter">
            <a href="/" class="unactive-breadcrumb-link">Dashboard</a> > <a href="" class="active-breadcrumb-link">Applied Candidates</a> 
        </div>
        <div class="row-flex-jobs-j alignitemsstart-shortlisted Dashboard-main-container-jobs">
            <div class="left-side-container-DashboardJ">
                <h2 class="jobsCreateaDashboard-jobs">Applied Candidates <span>(250)</span></h2>
                <div class="cards-section-container row-flex-jobs-j">
                    <div class="single-container-cards-DasboardJobs candidatesjobs-applied">
                            <a href="">
                                <p class="candidate-status-jobs reviewed">Reviewed</p>
                                <img src="./img/Ellipse 148-1.png" alt="">
                                <h3 class="job-headingnname">Jane Williams</h3>
                                <p class="skill-job-candiate">Java developer</p>
                                <ul class="candidate-desc">
                                    <li>Computer Science Degree</li>
                                    <li>1 Year Experience</li>
                                    <li>Full-Time Job</li>
                                    <li>Basic programming, Java, AWS</li>
                                </ul>
                                <div class="row-flex-jobs-j seemorebutton-social">
                                    <a href="index.php" class="seemoreButton">See more</a>
                                    <div class="row-flex-jobs-j social-media-icons">
                                        <a href="#"><img src="./img/Icon zocial-linkedin.svg" alt=""></a>
                                        <a href="#"><img src="./img/Icon feather-twitter.svg" alt=""></a>
                                        <a href="#"><img src="./img/Icon material-mail-outline.svg" alt=""></a>
                                    </div>
                                </div>
                                <p class="date-created-jobsDashboard">Applied Recently</p>
                            </a>
                    </div>
                    <div class="single-container-cards-DasboardJobs candidatesjobs-applied">
                            <a href="">
                                <p class="candidate-status-jobs Contacting">Contacting</p>
                                <img src="./img/Ellipse 148-1.png" alt="">
                                <h3 class="job-headingnname">Jane Williams</h3>
                                <p class="skill-job-candiate">Java developer</p>
                                <ul class="candidate-desc">
                                    <li>Computer Science Degree</li>
                                    <li>1 Year Experience</li>
                                    <li>Full-Time Job</li>
                                    <li>Basic programming, Java, AWS</li>
                                </ul>
                                <div class="row-flex-jobs-j seemorebutton-social">
                                    <a href="index.php" class="seemoreButton">See more</a>
                                    <div class="row-flex-jobs-j social-media-icons">
                                        <a href="#"><img src="./img/Icon zocial-linkedin.svg" alt=""></a>
                                        <a href="#"><img src="./img/Icon feather-twitter.svg" alt=""></a>
                                        <a href="#"><img src="./img/Icon material-mail-outline.svg" alt=""></a>
                                    </div>
                                </div>
                                <p class="date-created-jobsDashboard">Applied Recently</p>
                            </a>
                    </div>
                    <div class="single-container-cards-DasboardJobs candidatesjobs-applied">
                            <a href="">
                                <p class="candidate-status-jobs Hired">Hired</p>
                                <img src="./img/Ellipse 148-1.png" alt="">
                                <h3 class="job-headingnname">Jane Williams</h3>
                                <p class="skill-job-candiate">Java developer</p>
                                <ul class="candidate-desc">
                                    <li>Computer Science Degree</li>
                                    <li>1 Year Experience</li>
                                    <li>Full-Time Job</li>
                                    <li>Basic programming, Java, AWS</li>
                                </ul>
                                <div class="row-flex-jobs-j seemorebutton-social">
                                    <a href="index.php" class="seemoreButton">See more</a>
                                    <div class="row-flex-jobs-j social-media-icons">
                                        <a href="#"><img src="./img/Icon zocial-linkedin.svg" alt=""></a>
                                        <a href="#"><img src="./img/Icon feather-twitter.svg" alt=""></a>
                                        <a href="#"><img src="./img/Icon material-mail-outline.svg" alt=""></a>
                                    </div>
                                </div>
                                <p class="date-created-jobsDashboard">Applied Recently</p>
                            </a>
                    </div>
                </div>
            </div>
            <div class="right-side-container-DashboardJ">
                <div class="row-flex-jobj justifycontent-flex-end">
                    <p class="sortbyText">Sort By :</p>
                    <select class="sortbySelect">
                        <option value="0">Recent</option>
                        <option value=""></option>
                        <option value=""></option>
                    </select>
                </div>
                <h2 class="filter-heading">Filter</h2>
                <div class="category-main-first">
                    
                        <label for="jobtitle" class="label-applied-candidates">Job Title</label>
                        <input type="text" id="jobtitle" placeholder="Job Title" class="input-applied-candidates">
                    
                </div>
                <div class="category-main-first">
                    
                        <label for="Location" class="label-applied-candidates">Location</label>
                        <input type="text" id="Location" placeholder="Location" class="input-applied-candidates">
                    
                </div>
                <div class="category-main-first">
                    <p class="row-flex-jobs-j">
                        <span class="heading-filter-dj" id="filterHeading3">Qualification</span>
                        <i class="fa fa-angle-down" aria-hidden="true"></i>

                    </p>
                    <div class="category-filters" id="categoryDiv3">
                        <div class="row-flex-jobs-j">
                            <span>
                                <input type="checkbox" id="type">
                                <label for="type">Full time jobs</label>
                            </span>
                            <p>24</p>
                        </div>
                        <div class="row-flex-jobs-j">
                            <span>
                                <input type="checkbox" id="type">
                                <label for="type">Part time jobs</label>
                            </span>
                            <p>24</p>
                        </div>
                        <div class="row-flex-jobs-j">
                            <span>
                                <input type="checkbox" id="type">
                                <label for="type">Internship jobs</label>
                            </span>
                            <p>24</p>
                        </div>            
                    </div>
                </div>
                <div class="category-main-first">
                    <p class="row-flex-jobs-j">
                        <span class="heading-filter-dj" id="filterHeading4">Employment type</span>
                        <i class="fa fa-angle-down" aria-hidden="true"></i>

                    </p>
                    <div class="category-filters" id="categoryDiv4">
                        <div class="row-flex-jobs-j">
                            <span>
                                <input type="checkbox" id="type">
                                <label for="type">Full time jobs</label>
                            </span>
                            <p>24</p>
                        </div>
                        <div class="row-flex-jobs-j">
                            <span>
                                <input type="checkbox" id="type">
                                <label for="type">Part time jobs</label>
                            </span>
                            <p>24</p>
                        </div>
                        <div class="row-flex-jobs-j">
                            <span>
                                <input type="checkbox" id="type">
                                <label for="type">Internship jobs</label>
                            </span>
                            <p>24</p>
                        </div>            
                    </div>
                </div>
                <div class="category-main-first">
                    <p class="row-flex-jobs-j">
                        <span class="heading-filter-dj"  id="filterHeading5">Status</span>
                        <i class="fa fa-angle-down" aria-hidden="true"></i>

                    </p>
                    <div class="category-filters" id="categoryDiv5">
                        <div class="row-flex-jobs-j">
                            <span>
                                <input type="checkbox" id="type">
                                <label for="type">Full time jobs</label>
                            </span>
                            <p>24</p>
                        </div>
                        <div class="row-flex-jobs-j">
                            <span>
                                <input type="checkbox" id="type">
                                <label for="type">Part time jobs</label>
                            </span>
                            <p>24</p>
                        </div>
                        <div class="row-flex-jobs-j">
                            <span>
                                <input type="checkbox" id="type">
                                <label for="type">Internship jobs</label>
                            </span>
                            <p>24</p>
                        </div>            
                    </div>
                </div>
            </div>
        </div>
<script>
    const filterHeading3 = document.querySelector('#filterHeading3');
    const filterHeading4 = document.querySelector('#filterHeading4');
    const filterHeading5 = document.querySelector('#filterHeading5');
    const categoryDiv3 = document.querySelector('#categoryDiv3');
    const categoryDiv4 = document.querySelector('#categoryDiv4');
    const categoryDiv5 = document.querySelector('#categoryDiv5');
    
    filterHeading3.addEventListener('click',()=>{
        categoryDiv3.classList.toggle('active')
    })
    filterHeading4.addEventListener('click',()=>{
        categoryDiv4.classList.toggle('active')
    })
    filterHeading5.addEventListener('click',()=>{
        categoryDiv5.classList.toggle('active')
    })

</script>