<?php
include('config.php');

if(isset($_POST['skey'])){
    $sk = $_POST['skey'];
    if($sk == 'recent'){
        $sql = "SELECT * FROM joblistings WHERE logo IS NOT NULL ORDER BY createdon";
    }
    elseif($sk == 'older'){
        $sql ="SELECT * FROM joblistings WHERE logo IS NOT NULL ORDER BY createdon DESC";
    }
    else{
        $sql = "SELECT * FROM joblistings";
    }
    $result = mysqli_query($conn,$sql);

    $count = mysqli_num_rows($result);

    $posarr = array();

    while($row = mysqli_fetch_assoc($result)){
        $temp = array();
        $temp['id'] = $row['id'];
        $temp['package_type'] = $row['package_type'];
        $temp['package'] = $row['package'];
        $temp['position'] = $row['position'];
        $temp['skills_req'] = $row['skills_req'];

        $temp['created_on'] = $row['createdon'];
        $temp['created_on'] = date('Y-m-d', strtotime($temp['created_on']));
    
        $temp['job_description'] = $row['job_description'];
        $temp['job_description'] = substr($temp['job_description'], 0, 100);
    
        $temp['company_name'] = $row['company_name'];
        $temp['logo'] = $row['logo'];

        array_push($posarr,$temp);

    }

    echo json_encode($posarr);
}
?>

