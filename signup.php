<?php include_once 'config/init.php'; ?>
<?php
	$user = new User;
	if (isset($_POST['signup'])) {
		if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['password2'])) {
			redirect( 'login-signup.php', 'Please Fill all Fields!', 'error');
		}
		else{
			//hash password for some security
			$userpassword = $_POST['password'];
			$hashPassword = password_hash($userpassword, PASSWORD_DEFAULT);

			$userData = array();
			$userData['username'] = $_POST['username'];
			$userData['password'] = $hashPassword;
				
				
			if ($user -> signUpUser($userData)) {
				redirect( 'login-signup.php', 'Sign-up Succesfully', 'success');
			}
			else{
				redirect('login-signup.php', 'Error, Try again!', 'error');
			}
		}
	}
?>

