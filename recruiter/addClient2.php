<?php

    session_start();

    if(isset($_POST['submit'])){
        foreach ($_POST as $key => $value)
        {
            $_SESSION['info'][$key] = $value;
        }
     
        $keys = array_keys($_SESSION['info']);
     
        if(in_array('next', $keys)){
            unset($_SESSION['info']['next']);
        }
     
       if(isset($_SESSION['info'])){
        extract($_SESSION['info']);

        $conn = mysqli_connect('localhost','root','','analysed');

        //move_uploaded_file($_FILES["$company_img"]["tmp_name"],"img/".$_FILES["$company_img"]["name"]);

        $sql = mysqli_query($conn,"INSERT INTO client (company_name,status,company,company_img,ownership,industry,source,parent_company,active_contact,company_desc,permanent_fee,contract_fee,main_email,contact_no,address,city,zipcode,state,country,bank_name,bank_id,bank_acc_no,iban,vat) VALUES ('$company_name','$status','$company','$company_img','$ownership','$industry','$source','$parent_company','$active_contact','$company_desc','$permanent_fee','$contract_fee','$main_email','$contact_no','$address','$city','$zipcode','$state','$country','$bank_name','$bank_id','$bank_acc_no','$iban','$vat')");

        if($sql){

			$_SESSION['company_name'] = $company_name;
			header("Location: client_individual.php");
             }
             
             else{
                echo mysqli_error($conn);
            }
        }

     } 
?>

<?php include('header.php')?>
<link rel="stylesheet" href="./css/addClient.css">
<title>Analysed</title>
  <form action="" method="post">
<div class="container">
    <div class="bread-crumbs_Mytools-recruiter">
        <a href="/">Dashboard</a> > <a href="">My Database</a> > <a href="">Add client</a> 
    </div>
    <div class="small_container">
        <div class="heading_dash">
            <h1 class="mainHeadingDash">Add Client</h1>
            <p class="mainParaDash">Fill in the details to create a new client.</p>
        </div>
        <!-- <button class="save_button_addClient default-button-for-recruiter-dashboard">Save</button> -->
        <div class="row-recruiter container-for-add-client-main">
            <div class="left-side-row-for-add-client-container-1">
                <p class="links-for-add-client-low-side-row-for-add-client active" id="link-categories-addClient-1"><a href="addClient.php">General info</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addClient-2"><a href="addClient1.php" >Contact info</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addClient-3"><a href="addClient2.php" class="active">Billing info</a></p>
            </div>
      
            <div class="right-side-row-for-add-client-container-1" id="billing-info-addclient-1">
                <h2 class="heading-for-general-information-right-side-add-client-container-2"><i class="fa fa-money" aria-hidden="true"></i> Billing information</h2>
                <div class="row-recruiter inputs-for-add-client-below-image-box">    
                    <p class="input-para-add-client-ekam-1 fx-city-name-1"> 
                            <label for="default-select-for-no.101">Bank name</label>
                            <input id="default-select-for-no.101" name="bank_name" type="text" class="default-input-for-add-client-1"placeholder="Enter your bank name" required />
                        </p>
                        <p class="input-para-add-client-ekam-1 fx-city-name-1"> 
                            <label for="default-select-for-no.102">Bank ID</label>
                            <input id="default-select-for-no.102"  name="bank_id" type="tel" class="default-input-for-add-client-1" placeholder="Enter bank ID" required />
                    </p>
                    <p class="input-para-add-client-ekam-1  fx-city-name-1"> 
                            <label for="default-select-for-no.105">Bank account number</label>
                            <input id="default-select-for-no.105" name="bank_acc_no" type="text" class="default-input-for-add-client-1" placeholder="Enter your bank account number" required />
                    </p>
                    <p class="input-para-add-client-ekam-1"> 
                            <label for="default-select-for-no.103">IBAN #</label>
                            <input id="default-select-for-no.103" name="iban" type="text" class="default-input-for-add-client-1" placeholder="Enter IBAN #" required />
                    </p>
                    <p class="input-para-add-client-ekam-1"> 
                            <label for="default-select-for-no.104">VAT #</label>
                            <input id="default-select-for-no.104" name="vat"  type="text" class="default-input-for-add-client-1" placeholder="Enter IBAN #" required />
                    </p>
                    <input type = "submit" name="submit" class="save_button_addClient default-button-for-recruiter-dashboard" value="Submit" >
                </div>
            </div>
  
        </div>
    </div>
    </div>
</div>
      </form>