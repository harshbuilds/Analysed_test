<?php
	include('connection1.php');

	$jobtitle = "";
	$company = "";
	
	$queryCondition = "";
	if(!empty($_POST["search"])) {
		foreach($_POST["search"] as $k=>$v){
			if(!empty($v)) {

				$queryCases = array("jobtitle","company");
				if(in_array($k,$queryCases)) {
					if(!empty($queryCondition)) {
						$queryCondition .= " AND ";
					} else {
						$queryCondition .= " WHERE ";
					}
				}
				switch($k) {
					case "jobtitle":
						$jobtitle = $v;
						$queryCondition .= "jobtitle LIKE '" . $v . "%'";
						break;
					case "company":
						$company = $v;
						$queryCondition .= "company LIKE '" . $v . "%'";
						break;
					
                }    
			}
		}
	}
	$sql = "SELECT * from hired_candidates " . $queryCondition;					
		
	$query =  $sql;
	$result = $conn->query($sql);
?>

<title>Dashboard</title>
    <link rel="stylesheet" href="./css/DashboardJobs.css">
    <link rel="stylesheet" href="./css/appliedCandidates.css">
    <link rel="stylesheet" href="./css/hiredCandidates.css">
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
                <h2 class="jobsCreateaDashboard-jobs">Interviews Done <span>(250)</span></h2>
                <div class="cards-section-container row-flex-jobs-j">

                <?php
					if(!empty($result)) {
						foreach($result as $row) {
						  
					?>
                    <div class="single-container-cards-DasboardJobs candidatesjobs-applied">
                            <a href="">
                                <div class="candidate-status-jobs hiredCandidates-img"><p>NEW</p><img src="./img/Path 2213.svg"></div>
                                <img src="./img/Ellipse 148-1.png" alt="">
                                <h3 class="job-headingnname"><?php echo $row['name']; ?></h3>
                                <p class="skill-job-candiate hiredCandidates-p1"><?php echo $row['jobtitle']; ?> <?php echo $row['company']; ?></p>
                                <div class="row-flex-jobj email-id-and-experience">
                                    <img src="./img/Mail icon.svg"> 
                                    <span><p class="grey-email-id">Email ID</p><p class="name-dark-id"><?php echo $row['email']; ?></p></span>
                                </div>
                                <div class="row-flex-jobj email-id-and-experience">
                                    <img src="./img/briefcase.svg"> 
                                    <span class="span-experience-1">
                                    <p class="grey-email-id"><?php echo $row['experience']; ?></p>
                                    <p class="name-dark-id row-flex-jobs-j"><span>Total</span> <span>1-2 Years</span></p>
                                    <p class="name-dark-id row-flex-jobs-j"><span>Data <br>Visualization</span> <span>1+ Years</span></p>
                                    </span>
                                </div>
                                <div class="seemorebutton-social">
                                    <a href="index.php" class="seemoreButton">See more</a>
                                </div>
                            </a>
                    </div>
                    <?php 
				}
				}
				?> 
                    <div class="single-container-cards-DasboardJobs candidatesjobs-applied">
                            <a href="">
                                <div class="candidate-status-jobs hiredCandidates-img"><p>NEW</p><img src="./img/Path 2213.svg"></div>
                                <img src="./img/Ellipse 148-1.png" alt="">
                                <h3 class="job-headingnname">Jane Williams</h3>
                                <p class="skill-job-candiate hiredCandidates-p1">Java Developer at Oracle</p>
                                <div class="row-flex-jobj email-id-and-experience">
                                    <img src="./img/Mail icon.svg"> 
                                    <span><p class="grey-email-id">Email ID</p><p class="name-dark-id">JaneWilliam2@gmail.com</p></span>
                                </div>
                                <div class="row-flex-jobj email-id-and-experience">
                                    <img src="./img/briefcase.svg"> 
                                    <span class="span-experience-1">
                                    <p class="grey-email-id">Experience & Roles</p>
                                    <p class="name-dark-id row-flex-jobs-j"><span>Total</span> <span>1-2 Years</span></p>
                                    <p class="name-dark-id row-flex-jobs-j"><span>Data <br>Visualization</span> <span>1+ Years</span></p>
                                    </span>
                                </div>
                                <div class="seemorebutton-social">
                                    <a href="index.php" class="seemoreButton">See more</a>
                                </div>
                            </a>
                    </div>
                    <div class="single-container-cards-DasboardJobs candidatesjobs-applied hiredCandiates-div-card">
                            <a href="">
                                <div class="candidate-status-jobs hiredCandidates-img"><p>NEW</p><img src="./img/Path 2213.svg"></div>
                                <img src="./img/Ellipse 148-1.png" alt="">
                                <h3 class="job-headingnname">Jane Williams</h3>
                                <p class="skill-job-candiate hiredCandidates-p1">Java Developer at Oracle</p>
                                <div class="row-flex-jobj email-id-and-experience">
                                    <img src="./img/Mail icon.svg"> 
                                    <span><p class="grey-email-id">Email ID</p><p class="name-dark-id">JaneWilliam2@gmail.com</p></span>
                                </div>
                                <div class="row-flex-jobj email-id-and-experience">
                                    <img src="./img/briefcase.svg"> 
                                    <span class="span-experience-1">
                                    <p class="grey-email-id">Experience & Roles</p>
                                    <p class="name-dark-id row-flex-jobs-j"><span>Fresher</span</p>
                                    </span>
                                </div>
                                <div class="seemorebutton-social">
                                    <a href="index.php" class="seemoreButton">See more</a>
                                </div>
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
                <form action="hiredCandidates.php" method="POST">
                <div class="category-main-first">
                    
                        <label for="jobtitle" class="label-applied-candidates">Job Title</label>
                        <input type="text" id="jobtitle" placeholder="Job Title" class="input-applied-candidates" name="search[jobtitle]" value="<?php echo $jobtitle; ?>">
                    
                </div>
                <div class="category-main-first">
                    
                        <label for="CompanyName" class="label-applied-candidates">Company Name</label>
                        <input type="text" id="CompanyName" placeholder="Company Name" class="input-applied-candidates"  name="search[company]" value="<?php echo $company; ?>">
                    
                </div>
                <div class="col-lg-4">
                    <input type="submit" name="go" value="search" class="btn btn-primary">
                </div>
				</form>
            </div>
            </div>
        </div>
<script>

</script>