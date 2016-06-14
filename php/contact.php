<?php 
require "inc_connect.php";

    $user_name = $_POST['name']; 
    $user_email = $_POST['email']; 
    $user_msg = $_POST['message']; 
    if ($user_name == "" OR $user_email == "" OR $user_msg == "")
	{  
		$response = array("error" => true, "error_message" => "all fields must be filled out");
		echo json_encode($response);	
		exit;	
	}	
	else{  	  
      
		if($stmt = $mysqli->prepare("INSERT INTO contact(name, email, message) VALUES (?,?,?)")){
			$stmt->bind_param("sss", $user_name, $user_email, $user_msg);
			$rc = $stmt->execute();
			if ( false===$rc ) {
				$response = array("error" => true, "error_message" => "database error");
				echo json_encode($response);	
				exit; 
			}
			$stmt->close();
			$response = array("error" => false, "success_message" => "Email sent! Thanks for getting in touch with us!");
			echo json_encode($response);	
			exit;
		}  else{
			echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
		}  
    }  
	
?>