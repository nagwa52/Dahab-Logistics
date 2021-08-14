<?php
		 session_start();
		 $message="";
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				//connect to database
				require ('connect-mysql.php'); 
				// Validate the email address
				if (!empty($_POST['email'])) {
				$e = mysqli_real_escape_string($dbcon, $_POST['email']);
				} else {
				$e = FALSE;
				echo '<p class="error">You forgot to enter your email address.</p>';
				}
				// Validate the password
				if (!empty($_POST['password'])) {
				$p = mysqli_real_escape_string($dbcon, $_POST['password']);
				} else {
				$p = FALSE;
				echo '<p class="error">You forgot to enter your password.</p>';
				}


				if ($e && $p)
				{           //if no problems 
						
					// Retrieve the user_id, first_name and user_level for that email/password combination
					$result = mysqli_query($dbcon,"SELECT email, password FROM users WHERE (email='$e' AND password='$p')");
                       $row  = mysqli_fetch_array($result);
						  if(is_array($row)) {

								
									$_SESSION['email'] = $row['email'];
									$_SESSION['password'] = $row['password'];
									if(isset($_SESSION['email']) && ($_SESSION['password'])) {
										$_SESSION['userLogin'] = true;
										header("Location: index.php");
									  }  
									} else {
									 $message = "Invalid Username or Password!";
									 echo $message;
									}  
								}
								
							}
?>

<!-- Display the form fields-->
<div id="loginfields">
    <?php include ('loginpage.php'); ?>
</div>