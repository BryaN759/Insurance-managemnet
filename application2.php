<?php 

include 'config.php';

if(isset($_POST['submit'])){ 
     
    $client_name = $_POST["client_name"];
    $client_email = $_POST["client_email"];
    $client_phone = $_POST["client_phone"];
    $address = $_POST["address"];
    $client_birthdate = $_POST["client_birthdate"];
    $client_nid = $_POST["client_nid"];
    $marital_status = $_POST["marital_status"];
    $client_sex = $_POST["client_sex"];

    $policy_name = $_POST["policy_name"];
    $policy_number = $_POST["policy_number"];
    $admin_id= $_POST["admin_id"];

    $nominee_name =$_POST["nominee_name"];
    $nominee_nid = $_POST["nominee_nid"];
    $nominee_phone = $_POST["nominee_phone"];
    $relation = $_POST["relation"];
    $nominee_birthdate = $_POST["nominee_birthdate"];
    $nominee_sex= $_POST["nominee_sex"];
    
  
        if (!$conn) {  
	        exit('Error connecting to the database.');  
        }  
  
        // first INSERT 
        if (!($query = mysqli_prepare($conn, "INSERT INTO `client`(name, email, phone, address, birthdate, nid, sex, marital_status, policy_no, agent_id) VALUES('$client_name', '$client_email', '$client_phone', '$address','$client_birthdate','$client_nid','$client_sex','$marital_status','$policy_number','$admin_id')"))) { 
	        exit('Error preparing query'); 
        }     
      
        if (!$query->bind_param("ss", $client_name, $client_email, $client_phone, $address,$client_birthdate,$client_nid,$client_sex,$marital_status,$policy_number,$admin_id)) { 
	        exit('Error binding params'); 
        }      
  
        if (!$query->execute()) { 
	        exit('Error executing query'); 
        }      
     
        $query->close(); 
        
        // second INSERT 
        if (!($query = mysqli_prepare($conn, "INSERT INTO `nominee`(name, nominee_nid, client_nid, phone, relation, birth_date, sex) VALUES('$nominee_name', '$nominee_nid', '$client_nid, '$nominee_phone','$relation','$nominee_birthdate','$nominee_sex')"))) { 
	        exit('Error preparing query'); 
        }     
      
        if (!$query->bind_param("sss", $nominee_name, $nominee_nid, $client_nid, $nominee_phone,$relation,$nominee_birthdate,$nominee_sex)) { 
	        exit('Error binding params'); 
        }      
  
        if (!$query->execute()) { 
	        exit('Error executing query'); 
        }      
     
        $query->close();
        $message[] = 'Application successfully submitted'; 
     
    } 
?>      

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>application form</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- custom application.css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>

<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>  
      </div>
      ';
   }
}
?>

<div class="form-box">

   <form action="" method="post">

        <h3>Submit your application for insurance</h3>
            <input type="text" name="client_name" placeholder="enter your name" required class="box">
            <input type="email" name="client_email" placeholder="enter your email" required class="box">
            <input type="text" name="client_phone" placeholder="enter your phone number" required class="box">
            <input type="text" name="address" placeholder="enter your address" required class="box">
            <input type="date" name="client_birthdate" placeholder="enter your birthdate" required class="box">
            <input type="text" name="client_nid" placeholder="enter your nid" required class="box">
            <input type="text" name="marital_status" placeholder="enter your marital_status" required class="box">
            <select name="client_sex" class="box">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        <h3>Policy Choose</h3>
            <input type="text" name="policy_name" placeholder="policy name" required class="box">
            <input type="text" name="policy_number" placeholder="policy number" required class="box">
            <input type="text" name="admin_id" placeholder="enter the id number of the admin consulted" required class="box">
            
        
        <h3>Nominee Info</h3>
            <input type="text" name="nominee_name" placeholder="nominee name" required class="box">
            <input type="text" name="nominee_nid" placeholder="enter your nid" required class="box">
            <input type="text" name="nominee_phone" placeholder="enter your phone number" required class="box">
            <input type="text" name="relation" placeholder="Relationship" required class="box">
            <input type="date" name="nominee_birthdate" placeholder="enter your birthdate" required class="box">
            <select name="nominee_sex" class="box">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>

            <input type="submit" name="submit" value="Add Client" class="btn">
      
    </form>

</div>    
</body>
</html>