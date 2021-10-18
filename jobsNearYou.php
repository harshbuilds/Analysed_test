<link rel="stylesheet" href="./css/jobsNearYou.css">
<?php include ('header.php') ?>
<title>Jobs near you</title>
    <div class="bgcolor-modal-JobsNearYou">
                    <div class="modal-jobsNearYou">
                        <span class="closeSettings-modal-jobsNearYou">Close</span>
                        <p class="location-settings-heading">Location settings</p>
                        <div class="container-modal-inputs-jobsNearYou">
                            <div class="grid-location-settings-modal">
                                <div class="column-1-location-settings-modal">
                                    <label for="enterLocation-modal-input">Location</label>    
                                    <input type="text" placeholder="Enter Your Location" id="enterLocation-modal-input">
                                </div> 
                                <div class="column-2-location-settings-modal">
                                    <label for="industry-modal-input">Industry</label>    
                                    <select name="" id="industry-modal-input">
                                        <option value="0">Technology</option>
                                        <option value="1">Mechanical</option>
                                        <option value="2">Civil</option>
                                    </select>
                                </div>

                                <div class="column-1-location-settings-modal">
                                    <label for="jobsinRadius-modal-input">Job in radius</label>    
                                    <input type="text" placeholder="Enter job radius in kms" id="jobsinRadius-modal-input">
                                </div> 
                                <div class="column-2-location-settings-modal">
                                    <label for="addSkills-modal-input">Add Skills +</label>    
                                    <span id="addSkills-modal-input">PHP <i class="fa fa-times" aria-hidden="true"></i></span>
                                    <span id="addSkills-modal-input">MYSQL <i class="fa fa-times" aria-hidden="true"></i></span>
                                </div>

                                <div class="column-1-location-settings-modal">
                                    <label for="payTypeSalary-modal-input">Pay type salary</label>    
                                    <input type="text" placeholder="min" id="payTypeSalary-modal-input">
                                    <input type="text" placeholder="max" id="payTypeSalary-modal-input">

                                <div class="radioButtons-jobsType-modal">
                                    <input type="radio" name="jobtype-Modal" id="partTime-jobType-modal"> 
                                    <label for="partTime-jobType-modal">Part Time</label>
                                </div>
                                <div class="radioButtons-jobsType-modal">
                                    <input type="radio" name="jobtype-Modal" id="fullTime-jobType-modal"> 
                                    <label for="fullTime-jobType-modal">Full Time</label>
                                </div>
                                <div class="radioButtons-jobsType-modal">
                                    <input type="radio" name="jobtype-Modal" id="intern-jobType-modal"> 
                                    <label for="intern-jobType-modal">Internship</label>
                                </div>
                                </div>
                            </div>
                            <button class="applySetting-modal-jobsType">
                            Apply Setting
                        </button>
                    </div>
            </div>
    </div>
<div class="container">
    <div class="small_container ekam-position-relative-2">
        <div class="heading_dash">
            <h1 class="mainHeadingDash">Jobs near you</h1>
        </div>
        <div class="row-ekam-flex-JobsNearYou">
            <button class="locationsettings-button-jobsNearYou">
                Location settings <i class="fa fa-cog" aria-hidden="true"></i>
            </button>
            <div class="map-section-jobsNearYou">
                <img src="./img/map.png" alt="" class="map-image-section-jobsNearYou">
            </div>
            <div class="cards-section-jobsNearYou">
                <div class="cardItem-section-jobsNearYou">
                    <div class="shareIcons-div-jobsNearYou">
                        <a href="#" class="link-shareButton-jobsNearYou">
                            <img src="./img/share-icon.png" alt="" class="shareButton-jobsNearYou">
                        </a>
                        <a href="#" class="link-starButton-jobsNearYou">
                            <img src="./img/star-icon.png" alt="" class="starButton-jobsNearYou">
                        </a>
                    </div>
                    <section class="cardItem-heading-info">
                        <img src="./img/Airbnb-logo.png" alt="">
                        <span>
                            <h4>AirBnb</h4>
                            <p>London, UK</p>
                        </span>
                    </section>
                        
                    <p class="designation-cardItem-jobsNearYou">Frontend Developer</p>
                    <section class="duration-cardItem-jobsNearYou">
                        <span></span>
                        <p>2 Days Left</p>
                    </section>
                    <span class="skills-cardItem-jobsNearYou">CSS, HTML, UI, FrontEnd</span>
                    <p class="jobs-description-cardItem-jobsNearYou">
                        Appt no 23, road name, Area na Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                    </p>
                    <p class="timeTaken-cardItem-jobsNearYou"> <i class="fa fa-car" aria-hidden="true"></i> &nbsp;20 mins</p>
                    <section class="row-ekam-flex-JobsNearYou fulltime-applynow-cardItem-jobsNearYou">
                        <span>Full time</span>
                        <button class="applyNow-cardsItem-jobsNearYou">Apply Now</button>
                    </section>
                </div>
                <div class="cardItem-section-jobsNearYou">
                    <div class="shareIcons-div-jobsNearYou">
                        <a href="#" class="link-shareButton-jobsNearYou">
                            <img src="./img/share-icon.png" alt="" class="shareButton-jobsNearYou">
                        </a>
                        <a href="#" class="link-starButton-jobsNearYou">
                            <img src="./img/star-icon.png" alt="" class="starButton-jobsNearYou">
                        </a>
                    </div>
                    <section class="cardItem-heading-info">
                        <img src="./img/Netflix-logo.png" alt="">
                        <span>
                            <h4>Netflix</h4>
                            <p>London, UK</p>
                        </span>
                    </section>
                        
                    <p class="designation-cardItem-jobsNearYou">Frontend Developer</p>
                    <section class="duration-cardItem-jobsNearYou">
                        <span></span>
                        <p>2 Days Left</p>
                    </section>
                    <span class="skills-cardItem-jobsNearYou">CSS, HTML, UI, FrontEnd</span>
                    <p class="jobs-description-cardItem-jobsNearYou">
                        Appt no 23, road name, Area na Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                    </p>
                    <p class="timeTaken-cardItem-jobsNearYou"> <i class="fa fa-car" aria-hidden="true"></i> &nbsp;20 mins</p>
                    <section class="row-ekam-flex-JobsNearYou fulltime-applynow-cardItem-jobsNearYou">
                        <span>Full time</span>
                        <button class="applyNow-cardsItem-jobsNearYou">Apply Now</button>
                    </section>
                </div>


            </div>
        </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    document.querySelector('.locationsettings-button-jobsNearYou').addEventListener('click', () =>{
        document.querySelector('.bgcolor-modal-JobsNearYou').style.display = 'block';
    })
    document.querySelector('.closeSettings-modal-jobsNearYou').addEventListener('click', () =>{
        document.querySelector('.bgcolor-modal-JobsNearYou').style.display = 'none';
    })
    document.querySelector('.applySetting-modal-jobsType').addEventListener('click', () =>{
        document.querySelector('.bgcolor-modal-JobsNearYou').style.display = 'none';
    })
</script>