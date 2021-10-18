<?php
session_start();
if (!isset($_SESSION['email']))  
  {  
    
      header("Location:/Analysed-test/signup/recruiter/Recruiter login.php");
  } ?>
   <?php 
       include('db.php'); ?>
<link rel="stylesheet" href="./css/header.css">
<link rel="stylesheet" href="./css/recruiter_header.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<nav class="sidebar_main">
      <ul class="sidebar_main-list">
        <li class="sidebar_main-listItems">
          <a href="#" class="sidebar_main-listlinks">
            <img src="./img/Menu.png" class="menuForSidebar"/>
          </a>
        </li>
        <li class="sidebar_main-listItems">
          <a href="dashboard.php" class="sidebar_main-listlinks">
            <img src="./img/nav-ele-1.png" />
          </a>
        </li>
        <li class="sidebar_main-listItems">
          <a href="aboutOrganization.php" class="sidebar_main-listlinks">
            <img src="./img/Group 72.png" />
          </a>
        </li>
        <li class="sidebar_main-listItems">
          <a href="yourTools.php" class="sidebar_main-listlinks">
            <img src="./img/Icon awesome-tools.png" />
          </a>
        </li>
        <li class="sidebar_main-listItems">
          <a href="addClient.php" class="sidebar_main-listlinks">
            <img src="./img/Path 3377.png" />
          </a>
        </li>
        <li class="sidebar_main-listItems">
          <a href="addCandidate.php" class="sidebar_main-listlinks">
            <img src="./img/Group 2964.png" />
          </a>
        </li>
        <li class="sidebar_main-listItems">
          <a href="createTasks.php" class="sidebar_main-listlinks">
            <img src="./img/Path 284-2.png" />
          </a>
        </li>
        <li class="sidebar_main-listItems">
          <a href="scheduleMeeting.php" class="sidebar_main-listlinks">
            <img src="./img/Group 75.png" />
          </a>
        </li>
        <li class="sidebar_main-listItems">
          <a href="settings.php" class="sidebar_main-listlinks">
            <img src="./img/Group 139.png" />
          </a>
        </li>
        <li class="sidebar_main-listItems">
          <a href="addClient.php" class="sidebar_main-listlinks">
            <img src="./img/Group 136.png" />
          </a>
        </li>
        <li class="sidebar_main-listItems">
          <a href="complaint_tickets.php" class="sidebar_main-listlinks">
            <img src="./img/Group 138.png" />
          </a>
        </li>
        <li class="sidebar_main-listItems">
          <a href="contact.php" class="sidebar_main-listlinks">
            <img src="./img/Group 137.png" />
          </a>
        </li>
      </ul>
</nav>
    <div class="container-1">
        <img src="./img/hamburger-menu-icon.svg" alt="" class="hamburger">
        <nav class="nav_main-1">
            <h2 class="logo_heading">Analysed</h2>
            <div class="input-field">
                <input
                    type="text"
                    name="searchForJobs"
                    id="inputSearch"
                    class="searchForJobs"
                    placeholder="Search for Jobs"
                />
                <button class="searchButton">
                    <img src="./img/search-icon-blue.png" />
                </button>
            </div>

            <div class="profileSection-dashboard_recruiter">

                <div class="profileSection-container-info-dashboard_recruiter">
                    <div class="notificationsDiv" style="top:80px!important">
                        <ul>
                        <li>
                          <a href="#">
                            <div><h3>Eric Hogwarts</h3> <span>23 Mins Ago</span></div>
                            This is a sample email
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <div><h3>Eric Hogwarts</h3> <span>23 Mins Ago</span></div>
                            This is a sample email
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <div><h3>Eric Hogwarts</h3> <span>23 Mins Ago</span></div>
                            This is a sample email
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <div><h3>Eric Hogwarts</h3> <span>23 Mins Ago</span></div>
                            This is a sample email
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <div><h3>Eric Hogwarts</h3> <span>23 Mins Ago</span></div>
                            This is a sample email
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="row-recruiter top-row-profileSection-dashboard_recruiter">
                        <span class="row-recruiter">
                            <img
                                src="./img/mail-icon-blue.png"
                                alt=""
                                class="notificationProfileInNav"
                            />
                            <img
                                src="./img/notif-icon-blue.png"
                                alt=""
                                class="notificationProfileInNavNoti"
                            />
                            <a href="#" class="dropDownMenu_nav" style="display:none;">
              <i class="fa fa-angle-down" aria-hidden="true"></i>
            </a>
                        </span>
                        <span>
                            <ul>
                                <li>
                                    <a href="profile.php" style="color:#3598DB">Profile <img src="./img/Path 469.png"/></a>
                                </li>
                                <li>
                                    <a href="#" style="color: #51C46D">Logout <img src="./img/Path 481.png"/></a>
                                </li>
                                </ul>
                        </span>
                    </div>
                    <img src="./img/Ellipse 234.png" alt="" srcset="" class="profile_picture_profileSection-dashboard-recruiter">
                    <h3 class="heading_name_profileSection-dashboard_recruiter"><?php
                                            $sql="SELECT firstname FROM recruiters where email= '" . $_SESSION['email'] . "'";
                                        	$result_1 = mysqli_query($db,$sql);
                                            while ($row = mysqli_fetch_array($result_1)) {
                                                echo $row['firstname'];}
                                        
                                        	 ?></h3>
                    <p class="aboutOrganisation_profileSection-dashboard_recruiter">
                        <a href="#"><img src="./img/Path -1.png"> About Organisation</a>
                    </p>
                </div>
                <div class="messagesSection-container-dashboard_recruiter">
                    <div class="row-recruiter" style="justify-content: space-between;">
                        <p style="font-size: 18px;color:#333333;font-weight:bold">Messages</p>
                        <a href="#"><img src="./img/Path 469.png" alt="" srcset=""></a>
                    </div>
                    <div class="row-recruiter messages-item">
                        <img src="./img/Ellipse -1.png" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="row-recruiter messages-item">
                        <img src="./img/Ellipse -2.png" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="taskCreatedSection-container-dashboard_recruiter">
                    <div class="row-recruiter" style="justify-content: space-between;">
                        <p style="font-size: 18px;color:#333333;font-weight:bold">Recent Activity</p>
                    </div>
                    <div class="row-recruiter recentActivity-item">
                        <img src="./img/Path 349.png" alt="">
                        <span>
                        <p  style="font-size:18px;color:#333333;margin-bottom:5px">Task Created</p>
                        <p style="font-size:12px;color:#333333">task deatils Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donecwj</p>
                        </span>
                    </div>
                    <div class="row-recruiter recentActivity-item">
                        <img src="./img/Path 351.png" alt="">
                        <span>
                        <p  style="font-size:18px;color:#333333;margin-bottom:5px">Interview Coming Up</p>
                        <p style="font-size:12px;color:#333333">task deatils Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donecwj</p>
                        </span>
                    </div>
                    <div class="row-recruiter recentActivity-item">
                        <img src="./img/notification_important-24px.png" alt="">
                        <span>
                        <p  style="font-size:18px;color:#333333;margin-bottom:5px">Task Created</p>
                        <p style="font-size:12px;color:#333333">task deatils Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donecwj</p>
                        </span>
                    </div>
            </div>
        </nav>
    </div>

</div>
<script src="./js/header.js"></script>
