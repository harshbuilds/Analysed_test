<link rel="stylesheet" href="css/profile.css">
<!-- <link rel="stylesheet" href="../css/profile_js.css"> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.6.0.js" ></script>

<script type="text/javascript">


   
</script>
<title>Profile</title>
<?php session_start();  ?>
<?php include('header.php') ?>
<?php include('db.php'); ?>
<?php include('connection1.php'); ?>

<?php
    $flag= true;
    $r_id=$_SESSION['recruiter_id'];
    $sql="select * from recruiter where recruiter_id='$r_id'";
    $res=mysqli_query($conn,$sql);
    if($res == TRUE)
    {
        $count=mysqli_num_rows($res);
        if($count >0)
        {
            while($rows=mysqli_fetch_assoc($res))
            {
                $recruiter_id=$rows['recruiter_id'];
                $firstname=$rows['firstname'];
                $lastname=$rows['lastname'];
                $email=$rows['email'];
                $number=$rows['number'];
                $company_name=$rows['company_name'];
                $address=$rows['address'];
                $designation=$rows['designation'];
                $industry=$rows['industry'];
                $off_email=$rows['off_email'];
                $off_address=$rows['off_address'];
                $password=$rows['password'];
                $confirmpassword=$rows['confirmpassword'];
                $consultant=$rows['consultant'];
                $rec_img=$rows['rec_img'];
?>


<div class="container c1">
<section class="profileContainer small_Container">
    <div class="leftArea-profileContainer">
        <img src="./img/Screenshot_2021-03-22 Flow 1.png" class="profilepic-profileContainer">
        <div class="contactInfo-profileContainer">
            <section class="profileContactInfo-profileContainer">
                <p class="name_profileContactInfo-profileContainer"> <?php echo $firstname;?> <?php echo $lastname;?>  </p>
                <p class="designation_profileContactInfo-profileContainer">Lead - <?php echo $designation;?></p>
                <p class="location_profileContactInfo-profileContainer"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $off_address;?></p>
                 <p class="email_profileContactInfo-profileContainer"><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo $email;?></p>  
                <p class="phone_profileContactInfo-profileContainer"> <i class="fa fa-phone" aria-hidden="true"></i> <?php echo $number;?></p>
            <?php }}}?>
                           
            </section>
<?php 
    $check="select * from profile_db_rec where recruiter_id='$r_id'";
$res=mysqli_query($conn,$check);
        $count=mysqli_num_rows($res);
        if($count >0)
        {
            if($rows=mysqli_fetch_assoc($res))
            {

        ?>
    <form action="" method="POST">               
        <a style="text-decoration:none" href="edit_profile.php" id="edit">
                Edit Profile
        </a>
        </div>
    </div>

    <div class="rightArea-profileContainer">
        <div class="profileSection-profileContainer detailed-profileContainer">
            <h3 class="heading-profileContainer">About<i class="fa fa-pencil" aria-hidden="true" id="edit_pencil"></i> </a> </h3>
            <p class="para-profileContainer"><?php echo $rows['about'] ?></p>
        </div>
<div class="section2">
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Experience')">Experience</button>
  <button class="tablinks" onclick="openCity(event, 'Education')">Education</button>
</div>

<div id="Experience" class=" tc tabcontent ">
    <a href="" class="add-more" id="btn2">
        Add more
    </a>
   <img src="./img/Screenshot_2021-03-22 Flow 1.png" class="exp_img">
    <p class="exp1"><?php echo $rows['compname'] ?></p>
    <p class="exp2"><?php echo $rows['role'] ?></p>
    <p class="exp3"><?php echo $rows['duration'] ?></p>
<!-- <div class="paste-new-form">
    
</div> -->

</div>

<div id="Education" class="tabcontent">
<div class="edu1" id="ed1">
  <p class="para-profileContainer" id ="edu_para">Bachelor's Degree
    <p class="edu"><?php echo $rows['b_colname']  ?></p>
    <p class="edu0"><?php echo $rows['b_degree'] ?></p>
    <p class="edu3"><?php echo $rows['b_syey'] ?></p>
  </p>
</div>
<div class="edu2" id="ed2">
    <p class="para-profileContainer" id="edu_para">Master's Degree
   <p class="edu4"><?php echo $rows['m_colname'] ?></p>
    <p class="edu5"><?php echo $rows['m_degree'] ?></p>
    <p class="edu6"><?php echo $rows['m_syey'] ?></p>
    </p>
</div>
</div> 

</div>

            <input type="Submit" name="Submit" value="Submit" class="btn btn-success" id="btn1">
    </div>
    <div class="section3">
        <div class="projectsSection-profileContainer detailed-profileContainer">
            <h3 class="heading-profileContainer">Projects<i class="fa fa-pencil" aria-hidden="true" id="edit_pencil"></i> </a> </h3>
            <p class="para-profileContainer" id="projects"><?php echo $rows['projects'] ?></p>
        </div>
    </div>
</form>
<?php }}

else{

?>
<form action="profile_db_rec.php" method="POST">

    </div>
    </div>

     <div class="rightArea-profileContainer">
        <div class="profileSection-profileContainer detailed-profileContainer">
            <h2 class="heading-profileContainer"><label for="about" class="form-label">About</label> <a href="#"><i class="fa fa-pencil" aria-hidden="true" id="edit_pencil"></i> </a></h2>
            <p class="para-profileContainer"> <input type="text" name="about" class="form-input" placeholder=" Enter About" id="about" name="about"> </p>
        </div>
<div class="section2">
  <div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Experience')">Experience</button>
  <button class="tablinks" onclick="openCity(event, 'Education')">Education</button>
  </div>

<div id="Experience" class="tabcontent" >
    <a href="javascript:void(0)" class="add_more" id="btn2">
        Add more
    </a>
 <div class="para-profileContainer"> 
    <input type="text"  class="form-input" name="compname[]" placeholder="Company Name" required>
    <input type="text"  class="form-input" name="role[]" placeholder="Role" required>
    <input type="text"  class="form-input" name="duration[]" placeholder="Duration" required>
<!-- 
    <input type="text"  class="form-input" name="compname[]" placeholder="Company Name" required>
    <input type="text"  class="form-input" name="role[]" placeholder="Role" required>
    <input type="text"  class="form-input" name="duration[]" placeholder="Duration" required>
  -->
 <div class="paste-new-form">
    
</div>
</div>

</div>

<div id="Education" class="tabcontent" style="display: flex;">
<div class="edu1">
  <p class="para-profileContainer">Bachelor's Degree
    <input type="text"  class="form-input" name="b_colname" placeholder="College Name" id="edu" >
    <input type="text"  class="form-input" name="b_degree" placeholder="Degree" id="edu"  >
    <input type="text"  class="form-input" name="b_syey" placeholder="Start Year - End Year" id="edu" >
</p>
</div>
<div class="edu2">
    <p class="para-profileContainer">Master's Degree
    <input type="text"  class="form-input" name="m_colname" placeholder="College Name" id="edu" >
    <input type="text"  class="form-input" name="m_degree" placeholder="Degree" id="edu" >
    <input type="text"  class="form-input" name="m_syey" placeholder="Start Year - End Year" id="edu" >
    </p>
</div>
</div>

</div>

            <input type="Submit" name="Submit" value="Submit" class="btn btn-success" id="btn1">
    </div>
    <div class="section3" id="section3">
        <div class="projectsSection-profileContainer detailed-profileContainer">
            <h2 class="heading-profileContainer"><label for="projects" class="form-label">Projects</label><a href="#"><i class="fa fa-pencil" aria-hidden="true" class="edit_pencil" style="float: right;"></i></a> </h2>
            <p class="para-profileContainer">
                <span><input type="text"  class="form-input" name="projects" placeholder="Enter Your Projects" id="projects" ></span>
            </p>
        </div>
    </div>
    <script type="text/javascript">
        
$(document).ready(function(){
        var i =0;
        $(document).on('click','.remove-btn',function(){
            $(this).closest('.para-profileContainer').remove();
        });

        $('#btn2').click(function(){
            $('.paste-new-form').append('<div class="para-profileContainer"><input type="text"  class="form-input" name="compname[]" placeholder="Company Name" required><input type="text"  class="form-input" name="role[]" placeholder="Role" required><input type="text"  class="form-input" name="duration[]" placeholder="Duration" required><button type="button" class="remove-btn btn btn-danger">Remove</button></div>');
});
});
    </script>
</form>
<?php }?>
</section>
</div>

</body>
<script>
  /*  $(document).ready(function(){

        $(document).on('click','.remove-btn',function(){
            $(this).closest('.para-profileContainer').remove();
        });

        $(document).on('click','#btn2',function(){
            $('.paste-new-form').append('<p class="para-profileContainer"><input type="text"  class="form-input" name="compname[]" placeholder="Company Name" required><input type="text"  class="form-input" name="role[]" placeholder="Role" required><input type="text"  class="form-input" name="duration[]" placeholder="Duration" required><button type="button" class="remove-btn btn btn-danger">Remove</button></p>');
});
});  */

// $(document).ready(function(){
//     var i =1;
//     $('#btn2').click(function(){
//         i++;
//         $('.paste-new-form').append('<div class="para-profileContainer" id="newrow'+i+'"><input type="text"  class="compname" name="compname[]" placeholder="Company Name" required><input type="text"  class="form-input" name="role[]" placeholder="Role" required><input type="text"  class="form-input" name="duration[]" placeholder="Duration" required><button type="button" class="remove-btn btn btn-danger" id='+i+'>Remove</button> </div><div class="paste-new-form"></div>');
//     });
//     $(document).on('click','.remove-btn',function(){
//         var button = $(this).attr("id");
//         $('#newrow'+button+'').remove();
//     });

// });
 

// function generateRows() {
//         const exp = document.createElement('div');
//         const compname = document.createElement("input");
//         // const answer = document.createElement("input");

//         exp.classList.add('para-profileContainer');
//         compname.classList.add(`compname`);
//         compname.classList.add(`q${counter}`);
//         // answer.classList.add(`answer`);
//         // answer.classList.add(`a${counter}`);
//         compname.name = `compname[]`;
//         compname.type = 'text';
//         compname.placeholder = "Enter your Question";
//         // answer.name = `answers[]`;
//         // answer.type = 'text';
//         // answer.placeholder = "Enter your Answer";
//         counter++;
//         exp.appendChild(compname);
//         // exp.appendChild(answer);
//         questionAnswerContainer.appendChild(exp);
//       }

//       function deleteRows(){
//         const compname = document.querySelectorAll('.compname');
//         // const answers = document.querySelectorAll('.answer');
//         const exp = document.querySelectorAll('.para-profileContainer')
//         if(compname.length > 0){
//           exp[exp.length - 1].remove();
//           compname[compname.length - 1].remove();
//           // answers[answers.length - 1].remove();
//         }
//       }

function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace("active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += "active";
}
</script>


