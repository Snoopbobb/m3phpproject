<?php 
require_once('validate.php');
require_once('email_validate.php');
require_once('password_validate.php');
require_once('username_validate.php');
require_once('phonenumber_validate.php');
require_once('number_validate.php');
//The variables below must initialized to suppress notices :(
$email = '';
$password = '';
$username = '';
$phonenumber = '';
$number = '';
$mail_message = '';
$password_message = '';
$username_message = '';
$phonenumber_message = '';
$number_message = '';

if (!empty($_POST)) {
	if($_POST['email']) {
		$email = $_POST['email'];
		$emailValidate = new emailValidate;
		if(!$emailValidate->isValid($email)) {
			$mail_message = "Please enter a valid email address.";
		} 
	} else {
		$mail_message = "Email must not be empty.";
	}
	if($_POST['password']) {
		$password = $_POST['password'];
		$validatePassword = new passwordValidate;
		if(!$validatePassword->isValid($password)){
			$password_message = "Password must have a minimum of 8 characters, 2 of which must be numeric.";	
		}
	} else {
		$password_message = "Password must not be empty.";
	}
	if($_POST['username']) {
		$username = $_POST['username'];
		$validateUsername = new usernameValidate;
		if(!$validateUsername->isValid($username)){
			$username_message = "Username must conain at least 6 characters, numbers and letters only.";	
		}
	} else {
		$username_message = "Username must not be empty.";
	}
	if($_POST['phone_number']) {
		$phonenumber = $_POST['phone_number'];
		$validatePhonenumber = new phonenumberValidate;
		if(!$validatePhonenumber->isValid($phonenumber)){
			$phonenumber_message = "Phone Number must be in the (555) 555-5555 format.";	
		}
	} else {
		$phonenumber_message = "Phone Number must not be empty.";
	}
	if($_POST['number']) {
		$number = $_POST['number'];
		$validateNumber = new numberValidate;
		if(!$validateNumber->isValid($number)) {
			$number_message = "Only numbers allowed.";
		}
	} else {
		$number_message = "Number must not be empty.";
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>m3phpproject</title>
	<style type="text/css">
		div {
			padding: 20px;
		}

		span {
			background-color: red;
			color: white;
			margin-left: 10px;
		}
	</style>
</head>
<body>
	<form action="" method="POST">
		<div>
			<h3>Email</h3>
			<input type="text" name="email" value="<?php echo $email; ?>"><span><?php echo $mail_message; ?></span>
		</div>
		<div>
			<h3>Password</h3>
			<input type="text" name="password" value="<?php echo $password; ?>"><span><?php echo $password_message; ?></span>
		</div>
		<div>
			<h3>Username</h3>
			<input type="text" name="username" value="<?php echo $username; ?>"><span><?php echo $username_message; ?></span>
		</div>
		<div>
			<h3>Phone Number</h3>
			<input type="text" name="phone number" value="<?php echo $phonenumber; ?>"><span><?php echo $phonenumber_message; ?></span>
		</div>
		<div>
			<h3>Number</h3>
			<input type="text" name="number" value="<?php echo $number; ?>"><span><?php echo $number_message; ?></span>
		</div>
		<div>	
			<button>Submit</button>
		</div>
	</form>
</body>
</html>