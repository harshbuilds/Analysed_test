<?php
 session_start(); 

 if (isset($_SESSION['info'])){

 extract($_SESSION['info']); // Function to extract array.
 
 $db = mysqli_connect('localhost', 'root', '', 'analysed');
 
 if($password1!=$password){
	  echo "<script>alert('password and confirm password are different!')</script>";
      echo "<script>window.open('index.php','_self')</script>";
	  }
 else{
 $query = mysqli_query($db,"insert into recruiter (firstname,lastname,email,number,password,confirmpassword,address,company_name,designation,off_email,industry,off_address) values('$firstname','$lastname','$email','$number','$password','$password1','$address','$companyname','$designation','$offemail','$industry','$offaddress')");
 
 if ($query)
{
	//unset($_SESSION['info']);
	echo "<script>alert('Account has been created successfully!')</script>";
	echo "<script>window.open('Recruiter login.php','_self')</script>";
	
}
else
{
	echo mysqli_error($query);
	
}
	}
 }
 ?>