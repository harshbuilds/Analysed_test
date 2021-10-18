<?php include('header.php')?>
<link rel="stylesheet" href="./css/addClient.css">
<link rel="stylesheet" href="./css/create_new_user.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<title>Analysed</title>
<div class="container">
    <div class="small_container">
        <div class="heading_dash">
            <h1 class="mainHeadingDash">Create User</h1>
            <p class="mainParaDash" style="color:#3598DB;">Provide details and give user access controls.</p>
        </div>
        <div class="row-recruiter image-box-right-side-add-client">
            <div class="left-side-image-box-add-client-1">
                <div class="sub-divs-image-box-right-side-add-client">
                    <input type="file" class="input-image-upload-ekam-1-add-client" id="input-image-upload-ekam-1-add-client" name="input-file-1">
                    <label class="label-for-image-upload-ekam-1client position-absolute-label-ekam-addclient" for="input-image-upload-ekam-1-add-client">
                        <h2 style="padding:20px 30px;margin-left:40%;margin-top:-120px"><i class="fa fa-user" aria-hidden="true"></i></h2>
                        <p style="margin-left:110%;margin-top:-40px;"><i class="fa fa-camera" aria-hidden="true"></i></p>
                    </label>
                </div>
            </div>
        </div>
        <div class="row-recruiter container-for-add-client-main">
            <div class="right-side-row-for-add-client-container-1" id="general-information-addclient-1">
                <div class="row-recruiter sub-divs-image-box-right-side-add-client">
                    <div class="row-recruiter"style="padding-top:40px">
                        <h2 class="heading-for-general-information-right-side-add-client-container" style="color:#3598DB;font-size:23px;">Personal details</h2>
                    </div>
                </div>
                <div class="row-recruiter inputs-for-add-client-below-image-box">
                    <div class="right-side-image-box-right-add-client-1">
                                <div class="row-recruiter sub-divs-image-box-right-side-add-client">
                                    <p class="input-para-add-client-ekam-1 fx-city-name-1">
                                        <label for="usertype">User Type <span style="color:#3598DB;">*</span></label>
                                        <select name="usertype" id="usertype" class="default-select-for-add-client-1" style="color:grey;">
                                                <option value="0" default>Select User type</option>
                                                <option value="1">Recruiter</option>
                                                <option value="2">Job seeker</option>
                                                <option value="3">Client</option>
                                            </select>
                                    </p>
                                    <p class="input-para-add-client-ekam-1 fx-city-name-1">
                                        <label for="name">Name <span style="color:#3598DB;">*</span></label>
                                        <input type="text" name="name" class="default-input-for-add-client-1" placeholder="Enter name of the user" id="name">
                                    </p>
                                    <p class="input-para-add-client-ekam-1 fx-city-name-1">
                                        <label for="designation">Designation <span style="color:#3598DB;">*</span></label>
                                        <input type="text" name="designation" class="default-input-for-add-client-1" placeholder="Enter designation" id="designation">
                                    </p>
                                    <div class="input-para-add-client-ekam-1 fx-city-name-1">
                                        <label for="phone_number">Phone number <span style="color:#3598DB;">*</span></label>
                                        <input type="tel" maxlength='10' name="Phone number" id="phone_number" class="default-input-for-add-client-1"  placeholder="Enter a 10 digit phone number">
                                    </div>
    
                                    <p class="input-para-add-client-ekam-1 fx-city-name-1">
                                        <label for="email">Email <span style="color:#3598DB;">*</span></label>
                                        <input type="email" name="email" class="default-input-for-add-client-1" placeholder="Enter the associated email-id" id="email">
                                    </p>
                                    <p class="input-para-add-client-ekam-1 fx-city-name-1"> 
                                        <label for="password">Password <span style="color:#3598DB;">*</span></label>
                                        <input type="password" name="password" class="default-input-for-add-client-1" placeholder="Set the password for the account" id="password">
                                    </p>
                                </div>
                            </div>
                        </div>
                                <div class="row-recruiter" style="margin-bottom: 30px;">
                                    <h2 class="heading-for-general-information-right-side-add-client-container" style="color:#3598DB;font-size:23px;">Notification details</h2>
                                </div>
                                <div class="row-recruiter sub-divs-image-box-right-side-add-client">
                                    <div class="radio-item">
                                        <input type="radio" id="ritema" name="ritem" value="">
                                        <label for="ritema">Allow email notifications</label>
                                    </div>
                                    <div class="radio-item">
                                        <input type="radio" id="ritemb" name="ritem" value="">
                                        <label for="ritemb">Allow user to choose settings</label>
                                    </div>
                                    <div class="radio-item">
                                        <input type="radio" id="ritemc" name="ritem" value="">
                                        <label for="ritemc">Don't allow email notifications</label>
                                    </div>
                                </div>
                            <div class="row-recruiter" style="margin-bottom: 30px;">
                                    <h2 class="heading-for-general-information-right-side-add-client-container" style="color:#3598DB;font-size:23px;">User access details</h2>
									<div class="col-sm">
                                        <input type="checkbox" id="c1" name="cb">
										<label for="c1" style="color:#3598DB;"> Select all</label>
                                    </div>
                            </div>
                                <div class="row"style="padding-bottom:13px">
                                    <div class="col-sm">
                                        <input type="checkbox" id="c1" name="cb">
										<label for="c1">Access to database</label>
                                    </div>
                                    <div class="col-sm">
                                        <input type="checkbox" id="c2" name="cb">
										<label for="c2">Can create a job</label>
                                    </div>
                                    <div class="col-sm">
                                        <input type="checkbox" id="c3" name="cb">
										<label for="c3">Can shortlist candidates</label>
                                    </div>
                                    <div class="col-sm">
                                        <input type="checkbox" id="c4" name="cb">
										<label for="c4">Can add a company</label>
                                    </div>
                                </div>
                                <div class="row" style="padding-bottom:13px">
                                    <div class="col-sm">
                                        <input type="checkbox" id="c5" name="cb">
										<label for="c5">Can add tasks</label>
                                    </div>
                                    <div class="col-sm">
                                        <input type="checkbox" id="c6" name="cb">
										<label for="c1">Can hire candidates</label>
                                    </div>
                                    <div class="col-sm">
                                        <input type="checkbox" id="c7" name="cb">
										<label for="c7">Can view analytics</label>
                                    </div>
                                    <div class="col-sm">
                                        <input type="checkbox" id="c8" name="cb">
										<label for="c8">Can view billing details</label>
                                    </div>
                                </div>
                                <div class="row" style="padding-bottom:13px">
                                    <div class="col-sm">
                                        <input type="checkbox" id="c9" name="cb">
										<label for="c9">Can start or join video calls</label>
                                    </div>
                                    <div class="col-sm">
                                        <input type="checkbox" id="c10" name="cb">
										<label for="c10">Can schedule interviews</label>
                                    </div>
                                    <div class="col-sm">
                                        <input type="checkbox" id="c11" name="cb">
										<label for="c11">Can add candidates</label>
                                    </div>
                                    <div class="col-sm">
                                        <input type="checkbox" id="c12" name="cb">
										<label for="c12">Can reply to queries</label>
                                    </div>
                                </div>
                                <div class="row" style="padding-bottom:13px">
                                    <div class="col-sm">
                                        <input type="checkbox" id="c13" name="cb">
										<label for="c13">Can create contracts</label>
                                    </div>
                                    <div class="col-sm" style="margin-left:-570px">
                                        <input type="checkbox" id="c14" name="cb">
										<label for="c14">Can edit details of organisation</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-success" style="float:right">Create user</button>
                    </div>
                </div>
