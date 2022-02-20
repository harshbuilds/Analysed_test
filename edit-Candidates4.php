<?php include('connection1.php'); ?>
<?php
    session_start();

    if(isset($_SESSION['firstname'])) {

        $firstname=$_SESSION['firstname'];

    if(isset($_POST['submit'])){
        foreach ($_POST as $key => $value)
        {
            $_SESSION['info'][$key] = $value;
        }
     
        $keys = array_keys($_SESSION['info']);
     
        if(in_array('next', $keys)){
            unset($_SESSION['info']['next']);
        }
        session_start();
        if(isset($_SESSION['info'])){
        extract($_SESSION['info']);

        $conn = mysqli_connect('localhost','root','','analysed');
		
		$date=date("Y-m-d");

        move_uploaded_file($_FILES["$image"]["tmp_name"],"img/".$_FILES["$image"]["name"]);

        move_uploaded_file($_FILES["$resume"]["tmp_name"],"img/".$_FILES["$resume"]["name"]);

        $sql = mysqli_query($conn,"update candidates set image='$image',firstname='$firstname',lastname='$lastname',candidate_email='$emailid',countrycode='$code',phone_no='$phonenumber',birth_date='$birthdate',status='$Industry',address='$address',country='$ownership',city_name='$cityname',zipcode='$Zipcode',state='$State',current_title='$currentTitle',company_name='$companyName',candidate_type='$candidateType',emp_preference='$employmentPreference',source='$source',recruiter='$recruiter',current_salary='$currentSalary',salary_range1='$salaryRange1',salary_range2='$salaryRange2',talents='$talents',resume='$resume',skills='$skills',qualifications='$qualification',comment='$candidateComment',availability_date='$availability',job='$job',accessibility='$accessebility',response_type='$reasonType',last_updated='$date' where firstname='$firstname'");

        if($sql){
			
            $_SESSION['firstname'] = $firstname;
			header("Location: Candidates_specific.php");
            
             }
             
             else{
                echo mysqli_error($conn);
            }
        }

     } 
	 ?>
<?php include('header1.php')?>
<link rel="stylesheet" href="./css/addClient.css">
<link rel="stylesheet" href="./css/addCandidates1.css">
<!-- <link rel="stylesheet" href="../signup/recruiter/css/index.css"> -->
<title>Analysed</title>
<div class="container">
<div class="bread-crumbs_Mytools-recruiter">
        <a href="/" class="unactive-breadcrumb-link">Dashboard</a> > <a href="" class="unactive-breadcrumb-link">My Database</a> > <a href="" class="active-breadcrumb-link">Add candidates</a> 
    </div>
    <div class="small_container">
        <div class="heading_dash">
            <h1 class="mainHeadingDash">Add Candidate</h1>
            <p class="mainParaDash">Please enter the details of the new candidates</p>
        </div>
        <!-- <button class="save_button_addClient default-button-for-recruiter-dashboard">Save</button> -->
        <div class="row-recruiter container-for-add-client-main">
            <div class="left-side-row-for-add-client-container-1">
                <p class="links-for-add-client-low-side-row-for-add-client active" id="link-categories-addClient-1"><a href="edit-Candidates1.php" >Personal infromation</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addClient-2"><a href="edit-Candidates2.php">Professional infromation</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addClient-3"><a href="edit-Candidates3.php">Skills & Qualification</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addClient-3"><a href="#" class="active">Additional information</a></p>
            </div>
            <div class="right-side-row-for-add-client-container-1" id="general-information-addclient-1">
            <div class="row-recruiter" style="margin-bottom: 30px;">
                <img src="./img/clipboard.svg" width="50px" style="margin-right: 30px;">
                    <h2 class="heading-for-general-information-right-side-add-client-container">Additional information</h2>
                </div>
                <?php
                $sql=mysqli_query($conn,"select * from candidates where firstname='$firstname'");
                $check=mysqli_num_rows($sql)>0;
                if($check){
                    while($row=mysqli_fetch_assoc($sql)){
                        ?>
                <form action="" method="post">
                <div class="row-recruiter inputs-for-add-client-below-image-box">
                    <div class="right-side-image-box-right-add-client-1">
                                <div class="row-recruiter sub-divs-image-box-right-side-add-client">
                                    <p class="input-para-add-client-ekam-1">
                                        <label for="default-input-for-no.1">Candidates Comments*</label>
                                        <input type="text" name="candidateComment" class="default-input-for-add-client-1" placeholder="Company name" id="default-input-for-no.1" value="<?php echo $row['comment']; ?>" required />
                                    </p>
                                    <p class="input-para-add-client-ekam-1">
                                        <label for="default-input-for-no.1">Availability Date*</label>
                                        <input type="date" name="availability" class="default-input-for-add-client-1" placeholder="Company name" id="default-input-for-no.1" value="<?php echo $row['availability_date']; ?>" required />
                                    </p>
                                    <p class="select-for-select-image-box-below-inputs  fx-city-name-1"> 
                                        <label for="default-select-for-no.6">Job*</label>
                                            <select name="job" id="default-select-for-no.6" class="default-select-for-add-client-1" required />
                                                <option value="<?php echo $row['job']; ?>" default><?php echo $row['job']; ?></option>
                                                <option value="Sr.Product designer">Sr.Product designer</option>
                                                <option value="Software Engineer">Software Engineer</option>
                                                <option value="UI Designer">UI Designer</option>
                                            </select>
                                    </p>
                                    <p class="select-for-select-image-box-below-inputs  fx-city-name-1"> 
                                        <label for="default-select-for-no.6">Accessibility*</label>
                                            <select name="accessebility" id="default-select-for-no.6" class="default-select-for-add-client-1" required />
                                                <option value="<?php echo $row['accessibility']; ?>" default><?php echo $row['accessibility']; ?></option>
                                                <option value="Internal">Internal</option>
                                                <option value="External">External</option>
                                            </select>
                                    </p>
                                    <p class="select-for-select-image-box-below-inputs  fx-city-name-1"> 
                                        <label for="default-select-for-no.6">Response type*</label>
                                            <select name="reasonType" id="default-select-for-no.6" class="default-select-for-add-client-1" required />
                                                <option value="<?php echo $row['response_type']; ?>" default><?php echo $row['response_type']; ?></option>
                                                <option value="Web response">Web response</option>
                                                <option value="Submission">Submission</option>
                                            </select>
                                    </p>
                                </div>
                                <input type = "submit" name = "submit" class="save_button_addClient default-button-for-recruiter-dashboard" value="Submit" >
                            </div>
                        </form>
                    <?php } } } ?>
                    </div>
                </div>
            </div>
    </div>
</div>
