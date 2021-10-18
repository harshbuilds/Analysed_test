<?php
	include('connection1.php');

	$jobtitle = "";
	$company = "";
	$skills="";
	
	$queryCondition = "";
	if(!empty($_POST["search"])) {
		foreach($_POST["search"] as $k=>$v){
			if(!empty($v)) {

				$queryCases = array("jobtitle","company","skills");
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
					case "skills":
					    $skills=$v;
					    $queryCondition .="skills IN ('$v')";
						break;
					
                }    
			}
		}
	}
	$sql = "SELECT * from task_created " . $queryCondition;					
		
	$query =  $sql;
	$result = $conn->query($sql);
?>
<title>Dashboard</title>
    <link rel="stylesheet" href="./css/DashboardJobs.css">
    <link rel="stylesheet" href="./css/appliedCandidates.css">
    <link rel="stylesheet" href="./css/interviewDone.css">
    <link rel="stylesheet" href="./css/tasksCreated.css">
    <link rel="stylesheet" href="./css/shortlistedJobs.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <body>
    <?php include('header.php') ?>
	
    <div class="container">

      <div class="small_container">
        <div class="bread-crumbs_Mytools-recruiter">
            <a href="/" class="unactive-breadcrumb-link">Dashboard</a> > <a href="" class="active-breadcrumb-link">Tasks Created</a> 
        </div>
        <div class="row-flex-jobs-j alignitemsstart-shortlisted Dashboard-main-container-jobs">
            <div class="left-side-container-DashboardJ">
                <h2 class="jobsCreateaDashboard-jobs">Tasks Created<span>(250)</span></h2>
                <div class="cards-section-container row-flex-jobs-j">
				<?php
					if(!empty($result)) {
						foreach($result as $row) {
						  
					?>
			
                           <div class="single-container-cards-DasboardJobs candidatesjobs-applied">
                            <a href="">
                                <p class="candidate-status-jobs"><img src="./img/More.svg"></p>
                                <img src="./img/Ellipse 148-1.png" alt="">
                                <h3 class="job-headingnname"><?php echo $row['name']; ?></h3>
                                <p class="skill-job-candiate"><?php echo $row['position']; ?></p>
                                <p class="taskassigned-taskcreated"><?php echo $row['jobtitle']; ?></p>
                                <p class="lighgrey-text-task-created"><?php echo $row['description']; ?></p>
                                
                                <div class="upcomingInterviews-p tasks-created-p">
                                    <p class="row-flex-jobj"><img src="./img/Calendar(1).svg" style="margin-right: 10px;"><?php echo $row['date'];?></p>
                                </div>
                                <div class="skills-taskscreated row-flex-jobs-j">
                                    <span><?php echo $row['skills']; ?></span>
                                </div>
                                <p class="date-created-jobsDashboard">Applied Recently</p>
                            </a>
                    </div>
				<?php 
				}
				}
				?> 
				
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
				<form id="filter-form" class="form-horizontal" action="TasksCreated.php" method="post">
                <div class="category-main-first">
                    
                        <label for="jobtitle" class="label-applied-candidates">Job Title</label>
                        <input type="text" id="jobtitle" placeholder="Job Title" class="input-applied-candidates" name="search[jobtitle]" value="<?php echo $jobtitle; ?>">
                    
                </div>
                <div class="category-main-first">
                    
                        <label for="CompanyName" class="label-applied-candidates">Company Name</label>
                        <input type="text" id="company" placeholder="Company Name" class="input-applied-candidates" name="search[company]" value="<?php echo $company; ?>">
                    
                </div>
                <div class="category-main-first">
                    
                    <label for="Skills" class="label-applied-candidates">Skills</label>
                    <input type="text" id="skills" placeholder="Skills" class="input-applied-candidates" name="search[skills]" value="<?php echo $skills; ?>">
                
            </div>
            <div class="col-lg-4">
                    <input type="submit" name="go" value="search" class="btn btn-primary">
                </div>
				</form>
            </div>
        </div>
		</div>
		</div>
<script>
    const filterHeading3 = document.querySelector('#filterHeading3');

    const categoryDiv3 = document.querySelector('#categoryDiv3');

    
    filterHeading3.addEventListener('click',()=>{
        categoryDiv3.classList.toggle('active')
    })
</script>
<script>
		document.getElementById('jobtitle').value="";
		document.getElementById('company').value="";
		document.getElementById('skills').value="";

</script>
