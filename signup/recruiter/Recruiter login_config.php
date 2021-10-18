<?php
	session_start();

	$db = mysqli_connect('localhost', 'root', '', 'virtualanalyse');

if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $run_query=mysqli_query($db,"SELECT * FROM recruiters WHERE email='$email'AND password='$password'");

    if(mysqli_num_rows($run_query))
    {
       $_SESSION['firstname']=$firstname;
      $_SESSION['rec_id']=$rec_id;
      $_SESSION['email']=$email;
        echo "<script>window.open('/Analysed-test/recruiter/dashboard.php','_self')</script>";
    }
    else
    {
      echo "<script>alert('email or password is incorrect!')</script>";
      echo "<script>window.open('Recruiter login.php','_self')</script>";
    }
}
?>
