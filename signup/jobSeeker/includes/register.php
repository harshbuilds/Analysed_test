<?php
    
    session_start();
   
    if(isset($_SESSION['info'])){
        extract($_SESSION['info']);

        $conn = mysqli_connect('localhost','root','','virtual_analysed');

        $sql = mysqli_query($conn,"INSERT INTO jobSeekerSignUp (firstName,lastName,email,phoneNumber,password,confirmPassword,address,qualification,passing,institute,education,skills,industry,experience) VALUES ('$Firstname','$Lastname','$Emailaddress','$Phonenumber','$Password','$ConfirmPassword','$Address','$qualification','$passing','$institue','$education','$Skills','$industry','$experience')");

        if($sql){
            unset($_SESSION['info']);

            echo 'Data has been saved successfully!';

            echo '<a href="../index.php">Go back!</a>';


        }else{
            echo mysqli_error($conn);
        }
    }


?>
