<?php

include 'connection1.php';     //database connection page included
session_start();      //session has been started
$c_id=$_GET['c_id'];

    if (isset($_POST['next'])) {
      $_SESSION['current_title']  = $_POST['currentTitle'];
      $_SESSION['company_Name'] = $_POST['companyName'];
      $_SESSION['candidate_Type'] = $_POST['candidateType'];
      $_SESSION['employment_Preference'] = $_POST['employmentPreference'];
      $_SESSION['source'] = $_POST['source'];
      $_SESSION['recruiter'] = $_POST['recruiter'];
      $_SESSION['current_Salary'] = $_POST['currentSalary'];
      $_SESSION['salary_Range1'] = $_POST['salaryRange1'];
      $_SESSION['salary_Range2'] = $_POST['salaryRange2'];


    }
?>
<?php include('header.php')?>
<link rel="stylesheet" href="./css/addClient.css">
<link rel="stylesheet" href="./css/addCandidates1.css">
<link rel="stylesheet" href=".css/index1.css">

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
                <p class="links-for-add-client-low-side-row-for-add-client active" id="link-categories-addClient-1"><a href="edit-Candidates1.php?c_id=<?php echo $c_id?>" >Personal infromation</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addClient-2"><a href="edit-Candidates2.php?c_id=<?php echo $c_id?>">Professional infromation</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addClient-3"><a href="#"  class="active">Skills & Qualification</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addClient-3"><a href="edit-Candidates4.php?c_id=<?php echo $c_id?>">Additional information</a></p>
            </div>
            <div class="right-side-row-for-add-client-container-1" id="general-information-addclient-1">
            <div class="row-recruiter" style="margin-bottom: 30px;">
                <img src="./img/creativity.svg" width="50px" style="margin-right: 30px;">
                    <h2 class="heading-for-general-information-right-side-add-client-container">Skills & Qualification</h2>
                </div>
                <?php



                                $sql=mysqli_query($conn,"select * from candidates where candidate_id='".$c_id."'");
                                $check=mysqli_num_rows($sql)>0;
                                if($check){
                                    while($row=mysqli_fetch_assoc($sql)){
                       ?>
                <form action="edit-Candidates4.php?c_id=<?php echo $c_id?>" method="post" enctype="multipart/form-data">
                <div class="row-recruiter inputs-for-add-client-below-image-box">
                    <div class="right-side-image-box-right-add-client-1">
                                <div class="row-recruiter sub-divs-image-box-right-side-add-client">
                                    <p class="input-para-add-client-ekam-1 talents">
                                        <label for="default-input-for-no.1">Talents*</label>
                                        <input type="text" name="talents" class="default-input-for-add-client-1" placeholder="Company name" id="default-input-for-no.1" value="<?php echo $row['talents']; ?>" required />
                                    </p>
                                    <div class="input-signup-div fx-city-name-1">
                                            <label for="file-upload ">Upload resume </label><br>
                                            <label for="file-upload"><span class="default-input-for-add-client-1">(*.docx, *.rtf, *.txt, *.pdf) <i class="fa fa-upload" aria-hidden="true"></i></span></label>
                                            <input type="file" name="resume" id="file-upload" placeholder="docx" style="display:none;" value="<?php echo $row['resume']; ?>"/>
                                    </div>
                                    <p class="input-para-add-client-ekam-1 talents">
                                        <label for="default-input-for-no.1">Skills*</label>
                                        <input type="text" name="skills" class="default-input-for-add-client-1" placeholder="Company name" id="default-input-for-no.1" value="<?php echo $row['skills']; ?>" required />
                                    </p>
                                    <p class="input-para-add-client-ekam-1 right-side fx-city-name-1">
                                        <label for="default-select-for-no1 ">Qualification*</label>
                                        <select name="qualification" id="default-select-for-no.1" class="default-select-for-add-client-1" required />
                                            <option value="<?php echo $row['qualifications']; ?>" default><?php echo $row['qualifications']; ?></option>
                                            <option value="MSc">MSc</option>
                                            <option value="BSc">BSc</option>
                                            <option value="BCom">B.Com</option>
                                        </select>
                                    </p>
                                </div>
                                <input href="edit-Candidates4.php?c_id=<?php echo $c_id?>" type = "submit" name = "next" class="save_button_addClient default-button-for-recruiter-dashboard" value="Save" >
                        </div>
                    </form>
                <?php } } ?>
                </div>
            </div>
        </div>
    </div>
</div>
