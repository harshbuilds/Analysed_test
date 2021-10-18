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
     
        header("Location: includes/registerRecruitment.php");
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
                <p class="links-for-add-client-low-side-row-for-add-client active" id="link-categories-addRec-1"><a href="createRecruitement.php" class="active">Job Description</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addRec-2"><a href="createRecruitement1.php">Skills & Exp</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addRec-3"><a href="createRecruitement2.php">Role Details</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addRec-4"><a href="createRecruitement3.php">Payment info</a></p>
            </div>
            <form action="" method="post">
            <div class="right-side-row-for-add-client-container-1 " id="job-information-createRec-1">
                <div class="row-recruiter file-upload-create-recruitment-1">
                    <h2 class="heading-for-general-information-right-side-add-client-container okaniawa"><i class="fa fa-user" aria-hidden="true"></i> Job Description</h2>
                    <span>
                        <label for="file-upload-create-rec-e" ><span style="font-size:18px;margin-right:12px;color:#333333;">Job description</span><button class="default-button-for-recruiter-dashboard file-upload">Browse</button></label>
                        <input type="file" name="file" id="file-upload-create-rec-e">    
                    </span>
                </div>    
                    <div class="row-recruiter image-box-right-side-add-client">
                        <div class="right-side-image-box-right-add-client-1 create-rec">
                            <div class="row-recruiter sub-divs-image-box-right-side-add-client">
                                <div class="row-recruiter inputs-for-add-client-below-image-box">
                                    <p class="select-for-select-image-box-below-inputs fx-city-name-1 create-rec-100-temp-p"> 
                                        <label for="default-select-for-no.3">Position *</label>
                                            <select name="Position" style="color:#979797" id="default-select-for-no.3" class="default-select-for-add-client-1" required />
                                                <option value="0" default>Select an appropriate job title</option>
                                                <option value="1">Open</option>
                                                <option value="2">Closed</option>
                                                <option value="3">Working</option>
                                            </select>
                                    </p>
                                    <p class="select-for-select-image-box-below-inputs fx-city-name-1 create-rec-100-temp-p"> 
                                        <label for="default-select-for-no.4">Industry *</label>
                                            <select name="Industry" id="default-select-for-no.4" style="color:#979797" class="default-select-for-add-client-1" required />
                                                <option value="0" default>Industry related to job</option>
                                                <option value="1">Open</option>
                                                <option value="2">Closed</option>
                                                <option value="3">Working</option>
                                            </select>
                                    </p>
                                    <p class="select-for-select-image-box-below-inputs fx-city-name-1 create-rec-100-temp-p"> 
                                        <label for="default-select-for-no.5">Job type *</label>
                                            <select name="Jobtype" id="default-select-for-no.5" class="default-select-for-add-client-1" required />
                                                <option value="0" default>Full time</option>
                                                <option value="1">Open</option>
                                                <option value="2">Closed</option>
                                                <option value="3">Working</option>
                                            </select>
                                    </p>
                                    <p class="select-for-select-image-box-below-inputs fx-city-name-1 create-rec-100-temp-p"> 
                                        <label for="default-select-for-no.3">Name of the client company *</label>
                                            <select name="Nameoftheclientcompany" id="default-select-for-no.3" style="color:#979797" class="default-select-for-add-client-1" required />
                                                <option value="0" default>Select a company from list</option>
                                                <option value="1">Open</option>
                                                <option value="2">Closed</option>
                                                <option value="3">Working</option>
                                            </select>
                                    </p>
                                    <p class="select-for-select-image-box-below-inputs fx-city-name-1 create-rec-100-temp-p"> 
                                        <label for="default-select-for-no.4">Contact at client company *</label>
                                            <select name="Contactatclientcompany" id="default-select-for-no.4" style="color:#979797" class="default-select-for-add-client-1" required />
                                                <option value="0" default>Contact at company</option>
                                                <option value="1">Open</option>
                                                <option value="2">Closed</option>
                                                <option value="3">Working</option>
                                            </select>
                                    </p>
                                    <p class="select-for-select-image-box-below-inputs fx-city-name-1 create-rec-100-temp-p"> 
                                        <label for="default-select-for-no.5">Business Development Manager *</label>
                                            <select name="BusinessDevelopmentManager" id="default-select-for-no.5" style="color:#979797" class="default-select-for-add-client-1" required />
                                                <option value="0" default>Manager for the recruitment</option>
                                                <option value="1">Open</option>
                                                <option value="2">Closed</option>
                                                <option value="3">Working</option>
                                            </select>
                                    </p>
                                    <p class="select-for-select-image-box-below-inputs fx-city-name-1 create-rec-100-temp-p"> 
                                        <label for="default-select-for-no.3">Status *</label>
                                            <select name="Status" id="default-select-for-no.3" class="default-select-for-add-client-1" required />
                                                <option value="0" default>Temporary to permanent</option>
                                                <option value="1">Open</option>
                                                <option value="2">Closed</option>
                                                <option value="3">Working</option>
                                            </select>
                                    </p>
                                    <p class="select-for-select-image-box-below-inputs fx-city-name-1 create-rec-100-temp-p"> 
                                        <label for="default-select-for-no.4">Priority *</label>
                                            <select name="Priority" id="default-select-for-no.4" class="default-select-for-add-client-1" required />
                                                <option value="0" default>High</option>
                                                <option value="1">Open</option>
                                                <option value="2">Closed</option>
                                                <option value="3">Working</option>
                                            </select>
                                    </p>
                                    <p class="select-for-select-image-box-below-inputs fx-city-name-1 create-rec-100-temp-p"> 
                                        <label for="default-select-for-no.5">Job reference number *</label>
                                            <select name="Jobreferencenumber" id="default-select-for-no.5" class="default-select-for-add-client-1" required />
                                                <option value="0" default>Reference number for job</option>
                                                <option value="1">Open</option>
                                                <option value="2">Closed</option>
                                                <option value="3">Working</option>
                                            </select>
                                    </p>
                                    <p class="input-para-add-client-ekam-1 fx-city-name-1 create-rec-100-temp-p"> 
                                        <label for="default-select-for-no.9">Designation *</label>
                                            <input id="default-select-for-no.9" name="Designation" style="color:#979797" class="default-input-for-add-client-1"placeholder="Your designation" required />
                                    </p>
                                    <p class="select-for-select-image-box-below-inputs fx-city-name-1 create-rec-100-temp-p"> 
                                        <label for="default-select-for-no.5">Recruiter's name *</label>
                                            <select name="Recruitersname" id="default-select-for-no.5" style="color:#979797" class="default-select-for-add-client-1" required />
                                                <option value="0" default>Who do you want to assign it to?</option>
                                                <option value="1">Open</option>
                                                <option value="2">Closed</option>
                                                <option value="3">Working</option>
                                            </select>
                                    </p>
                                    <p class="input-para-add-client-ekam-1 fx-city-name-1 create-rec-100-temp-p"> 
                                        <label for="default-select-for-no.9">Number of openings *</label>
                                            <input id="default-select-for-no.9" name="Numberofopenings" class="default-input-for-add-client-1" style="color:#979797;"placeholder="Number of openings *" required />
                                    </p>
                                    <p class="input-para-add-client-ekam-1"> 
                                        <label for="default-select-for-no.10">Start Date</label>
                                        <input id="default-select-for-no.10" name="Sdate" type="date" class="default-input-for-add-client-1" placeholder="Enter value in %" required />
                                    </p>
                                    <p class="input-para-add-client-ekam-1"> 
                                        <label for="default-select-for-no.10">End Date</label>
                                        <input id="default-select-for-no.10" name="EndDate" type="date" class="default-input-for-add-client-1" placeholder="Enter value in %" required />
                                    </p>
                                    <p class="select-for-select-image-box-below-inputs fx-city-name-1 create-rec-100-temp-p"> 
                                        <label for="default-select-for-no.6">Job location *</label>
                                        <select name="Joblocation1" id="default-select-for-no.6" class="default-select-for-add-client-1" required />
                                            <option value="0" default>India</option>
                                            <option value="1">Open</option>
                                            <option value="2">Closed</option>
                                            <option value="3">Working</option>
                                        </select>
                                    </p>
                                    <p class="select-for-select-image-box-below-inputs fx-city-name-1 create-rec-100-temp-p"> 
                                        <label for="default-select-for-no.6">&nbsp;</label>
                                            <select name="Joblocation2" id="default-select-for-no.6" class="default-select-for-add-client-1" required />
                                                <option value="0" default>Andhra Pradesh</option>
                                                <option value="1">Open</option>
                                                <option value="2">Closed</option>
                                                <option value="3">Working</option>
                                            </select>
                                    </p>
                                    <p class="select-for-select-image-box-below-inputs fx-city-name-1 create-rec-100-temp-p"> 
                                            <label for="default-select-for-no.6">&nbsp;</label>
                                                <select name="Joblocation3" id="default-select-for-no.6" class="default-select-for-add-client-1" required />
                                                    <option value="0" default>Vishakhapatnam</option>
                                                    <option value="1">Open</option>
                                                    <option value="2">Closed</option>
                                                    <option value="3">Working</option>
                                                </select>
                                    </p>
                                    <p class="input-para-add-client-ekam-1 fx-city-name-1 create-rec-100-temp-p"> 
                                            <label for="default-select-for-no.10">Starting time *</label>
                                            <input id="default-select-for-no.10" name="Startingtime" type="text" class="default-input-for-add-client-1" placeholder="HH:MM:SS" >
                                    </p>
                                    <p class="input-para-add-client-ekam-1 fx-city-name-1 create-rec-100-temp-p"> 
                                            <label for="default-select-for-no.10">Ending time *</label>
                                            <input id="default-select-for-no.10" name="Endingtime" type="text" class="default-input-for-add-client-1" placeholder="HH:MM:SS" >
                                    </p>
                                    <p class="input-para-add-client-ekam-1 fx-city-name"> 
                                            <label for="default-select-for-no.10">Client margin</label>
                                            <input id="default-select-for-no.10" name="Clientmargin" style="color:#979797" type="text" class="default-input-for-add-client-1" placeholder="Ex. 10 implies to 10%" required />
                                    </p>
                                    <p class="input-para-add-client-ekam-1"> 
                                            <label for="default-select-for-no.10">Contact information for the advert *</label>
                                            <input id="default-select-for-no.10" name="Contactinformationfortheadvert" style="color: #979797;" type="text" class="default-input-for-add-client-1" placeholder="Name" required />
                                    </p>
                                    <p class="input-para-add-client-ekam-1 "> 
                                        <label for="default-select-for-no.10"> &nbsp;</label>
                                            <input id="default-select-for-no.10" name="Contact"  style="color: #979797;" type="tel" class="default-input-for-add-client-1" placeholder="Contact number" required />
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


