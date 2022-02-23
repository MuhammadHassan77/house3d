<?php 
	session_start();
	include_once "connect.php";

	// $u_email = mysqli_real_escape_string($mysqli, $_POST['log_email']);
	// $u_pass = mysqli_real_escape_string($mysqli, $_POST['log_pass']);

	$u_email = $_POST['u_email'];
	$u_pass = $_POST['u_pass'];
	

	if (!empty($u_email) && !empty($u_pass)) {
		// code... LETS CHECK USERS ENTERED EMAIL AND PASSWORD MATCH TO DATABASE ANY TABLE ROW EMAIL AND PASSWORD
		$sql = mysqli_query($mysqli, "SELECT * FROM user_registration WHERE email = '{$u_email}' AND pass = '{$u_pass}' ");
		
		if (mysqli_num_rows($sql) > 0) {
			// code... IF USER CREDENTIALS MATCHED
			$row = mysqli_fetch_assoc($sql);
			$_SESSION['uid'] = $row['uid']; // USING THESE SESSION WE NEED USER UNIQUE_ID IN OTHER PHP FILE 
			echo 1;
		}else{
			echo "Email or password is incorrect !";
		}
	}else{
		echo "Please enter email and password!";
	}

?>