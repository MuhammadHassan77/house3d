<?php
	session_start();
	
	// $fname = mysqli_real_escape_string($mysqli, $_POST['fname']);
	// $lname = mysqli_real_escape_string($mysqli, $_POST['lname']);
	// $u_email = mysqli_real_escape_string($mysqli, $_POST['email']);
	// $u_pass = mysqli_real_escape_string($mysqli, $_POST['pass']);
	// $phone = mysqli_real_escape_string($mysqli, $_POST['number']);
	
	$fname = $_POST['f_name'];
	$lname = $_POST['l_name'];
	$u_email = $_POST['u_email'];
	$u_pass = $_POST['u_pass'];
	$phone = $_POST['u_number'];
	
	include "connect.php";

	if (!empty($fname) && !empty($lname) && !empty($u_email) && !empty($u_pass )&& !empty($phone)) {
		if (filter_var($u_email, FILTER_VALIDATE_EMAIL)) { //EMAIL IS VALID

			// code... LETS CHECK THAT EMAIL IS EXIST IN DATABASE OR NOT
			$sql = mysqli_query($mysqli, "SELECT email FROM user_registration WHERE email = '{$u_email}'");
			
			if (mysqli_num_rows($sql) > 0) {
				// code... IF EMAIL EXIST
				echo "$u_email - This email already exists!";
			}else{
				$random_id = rand(time(), 10000000); //CREATING RANDOM ID FOR USER

				// LET'S INSERT ALL USER DATA INSIDE TABLE
				$sql2 = mysqli_query($mysqli, "INSERT INTO user_registration (fname, lname, email, pass, phone, uid)
													VALUES ('{$fname}', '{$lname}', '{$u_email}', '{$u_pass}', '{$phone}', {$random_id}) ");
				if ($sql2) { // IF THESE DATA INSERTED
					// code...
					$sql3 = mysqli_query($mysqli, "SELECT * FROM user_registration WHERE email = '{$u_email}'");
					
					if (mysqli_num_rows($sql3) > 0) {
						// code...
						$row = mysqli_fetch_assoc($sql3);
						$_SESSION['uid'] = $row['uid']; // USING THESE SESSION WE NEED USER UNIQUE_ID IN OTHER PHP FILE 
						
						echo 1;
					}else{
						echo "Try Again";
					}
				}else{
					echo "Something Went Wrong!";
				}
			}
		}else{
			echo $u_email . " - Is not valid";
		}
	}else{
		echo "Input field required";
	}

?>