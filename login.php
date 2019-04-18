<?php include_once 'config/init.php'; ?>

<?php
	$user = new User;
	if (isset($_POST['login'])) {
		if (!empty($_POST['username']) && !empty($_POST['password'])) {

			//simple this way, but the inputs needs to be verified against attacks in standard projects
			$username = $_POST['username'];
			$password = $_POST['password'];
			
			if ($user->getRowCount($username) == 1) {
				$userDetails = $user-> getUser($username);
				if (password_verify($password, $userDetails->password)) {
					//Session User
					$_SESSION['username'] = $username;
					// SET CSRF
					redirect('index.php');
				} 
				else {
					redirect('login-signup.php', "wrong password" , 'error');
				
				}
			}
			else{
				//username dosent exist
				redirect('login-signup.php', "Invalid Username" , 'error');
			}
		}
		else{
			redirect('login-signup.php', "Please imput your username and password!" , 'error');
		}
	}

 ?>