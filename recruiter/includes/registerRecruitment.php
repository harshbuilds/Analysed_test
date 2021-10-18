
<?php
    
    session_start();
   

    if(isset($_SESSION['info'])){
        extract($_SESSION['info']);

        $conn = mysqli_connect('localhost','root','','analysed');

        //$sql = mysqli_query($conn,"INSERT INTO recruitment (Position,Industry,Jobtype,Nameoftheclientcompany,Contactatclientcompany,BusinessDevelopmentManager,Status,Priority,Jobreferencenumber,Designation,Recruitersname,Numberofopenings,Sdate,EndDate,Joblocation1,Joblocation2,Joblocation3,Startingtime,Endingtime,Clientmargin,Contactinformationfortheadvert,Contact) VALUES ('$Position','$Industry','$Jobtype','$Nameoftheclientcompany','$Contactatclientcompany','$BusinessDevelopmentManager','$Status','$Priority','$Jobreferencenumber','$Designation','$Recruitersname','$Numberofopenings','$Sdate','$EndDate','$Joblocation1','$Joblocation2','$Joblocation3','$Startingtime','$Endingtime','$Clientmargin','$Contactinformationfortheadvert','$Contact')");
         $sql = mysqli_query($conn,"INSERT INTO joblistings (position,industry,job_type,client_company,contact_client_company,business_dev_manager,status,priority,job_reference_number,designation,recruiters_name,openings,start_date,end_date,country,state,district,starting_time,ending_time,client_margin,advert_contact_name,advert_contact_no) VALUES ('$Position','$Industry','$Jobtype','$Nameoftheclientcompany','$Contactatclientcompany','$BusinessDevelopmentManager','$Status','$Priority','$Jobreferencenumber','$Designation','$Recruitersname','$Numberofopenings','$Sdate','$EndDate','$Joblocation1','$Joblocation2','$Joblocation3','$Startingtime','$Endingtime','$Clientmargin','$Contactinformationfortheadvert','$Contact')");

        if($sql){
            unset($_SESSION['info']);

            echo 'Data has been saved successfully!';

            echo '<a href="../createRecruitement.php">Go back!</a>';


        }else{
            echo mysqli_error($conn);
        }
    }
   
?>
