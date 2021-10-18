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
     
        header("Location: createRecruitement3.php");
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
                <p class="links-for-add-client-low-side-row-for-add-client active" id="link-categories-addRec-1"><a href="createRecruitement.php">Job Description</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addRec-2"><a href="createRecruitement1.php">Skills & Exp</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addRec-3"><a href="createRecruitement2.php"  class="active">Role Details</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addRec-4"><a href="createRecruitement3.php">Payment info</a></p>
            </div>
            <form action="" method="post">
            <div class="right-side-row-for-add-client-container-1 " id="role-information-createRec-1">
                    <h2 class="heading-for-general-information-right-side-add-client-container okaniawa-2"><i class="fa fa-handshake-o" aria-hidden="true"></i> Roles & Responsibilities</h2>
                    <div class="row-recruiter image-box-right-side-add-client">
                        <div class="right-side-image-box-right-add-client-1 create-rec">
                            <div class="row-recruiter sub-divs-image-box-right-side-add-client">
                                <div class="row-recruiter inputs-for-add-client-below-image-box inputs-for-add-client-below-image-box-create-rec">
                                    <p class="input-para-add-client-ekam-1"> 
                                        <label for="default-select-for-no.11">Roles and responsibilities *</label>
                                        <input id="default-select-for-no.11" name="Rolesandresponsibilities" type="text" class="input-padding-create-recruitment-12 default-input-for-add-client-1"placeholder="Enter roles and responsibilties" required />
                                    </p>
                                    <p class="input-para-add-client-ekam-1"> 
                                        <label for="default-select-for-no.11">Growth oppurtunities *</label>
                                        <input id="default-select-for-no.11" name="Growthoppurtunities" type="text" class="input-padding-create-recruitment-12 default-input-for-add-client-1"placeholder="Enter potentional growth opportunities" required />
                                    </p>
                                    <p class="input-para-add-client-ekam-1"> 
                                        <label for="default-select-for-no.11">Learning oppurtunities *</label>
                                        <input id="default-select-for-no.11" name="Learningoppurtunities" type="text" class="input-padding-create-recruitment-12 default-input-for-add-client-1"placeholder="Potential learning opportunities" required />
                                    </p>
                                    <p class="input-para-add-client-ekam-1"> 
                                        <label for="default-select-for-no.11">Employee endorsements *</label>
                                        <input id="default-select-for-no.11" name="Employeeendorsements" type="text" class="input-padding-create-recruitment-12 default-input-for-add-client-1"placeholder="Enter employee endorsements" required />
                                    </p>
                                    <p class="input-para-add-client-ekam-1"> 
                                        <label for="default-select-for-no.11">Employee benefits *</label>
                                        <input id="default-select-for-no.11" name="Employeebenefits" type="text" class="input-padding-create-recruitment-12 default-input-for-add-client-1"placeholder="Enter employee benefits" required />
                                    </p>
                                    <p class="input-para-add-client-ekam-1"> 
                                        <label for="default-select-for-no.11">Reputation of organisation *</label>
                                        <input id="default-select-for-no.11" name="Reputationoforganisation" type="text" class="input-padding-create-recruitment-12 default-input-for-add-client-1"placeholder="Enter reputation of organisation" required />
                                    </p>
                                    <p class="input-para-add-client-ekam-1"> 
                                        <label for="default-select-for-no.11">Job description for the advert *</label>
                                        <input id="default-select-for-no.11" name="Jobdescriptionfortheadvert" type="text" class="input-padding-create-recruitment-12 default-input-for-add-client-1"placeholder="Enter reputation of organisation" required />
                                    </p>
                                    <p class="input-para-add-client-ekam-1"> 
                                        <label for="default-select-for-no.11">Workspace view</label>
                                        <input id="default-select-for-no.11" name="Workspace view" type="file" class="" placeholder="Enter reputation of organisation">
                                        
                                        <label for="default-select-for-no.3" style="margin-top:40px">Transportation *</label>
                                            <select name="Transportation" id="default-select-for-no.3" class="default-select-for-add-client-1" required />
                                                <option value="0" default>Anywhere</option>
                                                <option value="1">Open</option>
                                                <option value="2">Closed</option>
                                                <option value="3">Working</option>
                                            </select>
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


