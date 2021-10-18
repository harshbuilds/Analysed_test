<?php

    session_start();

    if(isset($_POST['next'])){
        foreach ($_POST as $key => $value)
        {
            $_SESSION['info'][$key] = $value;
        }
     
        $keys = array_keys($_SESSION['info']);
     
        if(in_array('next', $keys)){
            unset($_SESSION['info']['next']);
        }
     
        header("Location: createRecruitement2.php");
     } 

?>

<?php include('header.php')?>
<link rel="stylesheet" href="./css/addClient.css">
<link rel="stylesheet" href="./css/createRecruitement.css">
<title>Analysed</title>
<div class="container">
    <div class="bread-crumbs_Mytools-recruiter">
        <a href="/">Dashboard</a> > <a href="">My Database</a> > <a href="">Job listings</a> ><a href="">Create Recruitement</a> 
    </div>
    <div class="small_container">
        <div class="heading_dash">
            <h1 class="mainHeadingDash">Create recruitment</h1>
            <p class="mainParaDash">Fill in the details to create a new recruitment</p>
        </div>
        <!-- <button class="save_button_addClient default-button-for-recruiter-dashboard">Save</button> -->
        <div class="row-recruiter container-for-add-client-main">
            <div class="left-side-row-for-add-client-container-1">
                <p class="links-for-add-client-low-side-row-for-add-client active" id="link-categories-addRec-1"><a href="createRecruitement.php" >Job Description</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addRec-2"><a href="createRecruitement1.php" class="active">Skills & Exp</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addRec-3"><a href="createRecruitement2.php">Role Details</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addRec-4"><a href="createRecruitement3.php">Payment info</a></p>
            </div>
            <form action="" method="post">
            <div class="right-side-row-for-add-client-container-1 " id="skills-information-createRec-1">
                    <h2 class="heading-for-general-information-right-side-add-client-container okaniawa-1"><i class="fa fa-bullseye" aria-hidden="true"></i> Skills & Experience</h2>
                    <div class="row-recruiter image-box-right-side-add-client">
                        <div class="right-side-image-box-right-add-client-1 create-rec">
                            <div class="row-recruiter sub-divs-image-box-right-side-add-client">
                                <div class="row-recruiter inputs-for-add-client-below-image-box inputs-for-add-client-below-image-box-create-rec">
                                    <p class="input-para-add-client-ekam-1"> 
                                        <label for="default-select-for-no.11">Skills *</label>
                                        <input id="default-select-for-no.11" name="skills" type="text" class="default-input-for-add-client-1"placeholder="Enter skills required for this job" required />
                                    </p>
                                    <p class="input-para-add-client-ekam-1"> 
                                        <label for="default-select-for-no.11">Qualifications *</label>
                                        <input id="default-select-for-no.11" name="Qualifications" type="text" class="default-input-for-add-client-1"placeholder="Minimum qualifications requirements" required />
                                    </p>
                                    <p class="input-para-add-client-ekam-1"> 
                                        <label for="default-select-for-no.11">Eligibility criteria *</label>
                                        <input id="default-select-for-no.11" name="Eligibilitycriteria" type="text" class="default-input-for-add-client-1"placeholder="Ex. citizenship criteria" required />
                                    </p>
                                    <p class="input-para-add-client-ekam-1"> 
                                        <label for="default-select-for-no.11">Experience requirement *</label>
                                        <input id="default-select-for-no.11" name="Experiencerequirement" type="text" class="input-padding-create-recruitment-1 default-input-for-add-client-1"placeholder="minimum experience requirements" required />
                                    </p>
                                    <p class="input-para-add-client-ekam-1"> 
                                        <label for="default-select-for-no.11">Relevant experience</label>
                                        <input id="default-select-for-no.11" name="Relevantexperience" type="text" class="input-padding-create-recruitment-1 default-input-for-add-client-1"placeholder="Specific industry experience" required />
                                    </p>
                                    <p class="input-para-add-client-ekam-1"> 
                                        <label for="default-select-for-no.11">Irrelevant experience</label>
                                        <input id="default-select-for-no.11" name="Irrelevantexperience" type="text" class="input-padding-create-recruitment-1 default-input-for-add-client-1"placeholder="Any irrelevant internship experience" required />
                                    </p>
                        
                                </div>
                                <input type = "submit" name = "next" class="save_button_addClient default-button-for-recruiter-dashboard" value="Save" >
                            </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

<script src="./js/createRecruitement.js"></script>

