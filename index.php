<?php 
require_once('validate.php');
require_once('validate_email.php');
require_once('validate_password.php');
require_once('validate_username.php');
require_once('validate_phonenumber.php');
require_once('validate_number.php');
//Do tiny steps!
$elements = [];

if (isset($_POST)) {
	foreach ($_POST as $key => $value) {
		$elements[] = $value;
	}
}

$mail_message = '';
$validate_mail = '';
if (isset($_POST['email'])) {
	$email = $_POST['email'];
	$validate_mail = new ValidateEmail($email);
	$mail_message = $validate_mail->ValidateEmail($email);
} else {
	$elements[0] = '';
}

$password_message = '';
$validate_password = '';
if (isset($_POST['password'])) {
	$password = $_POST['password'];
	$validate_password = new ValidatePassword($password);
	$password_message = $validate_password->ValidatePassword($password);
} else {
	$elements[1] = '';
}

$username_message = '';
$validate_username = '';
if (isset($_POST['username'])) {
	$username = $_POST['username'];
	$validate_username = new ValidateUsername($username);
	$username_message = $validate_username->ValidateUsername($username);
} else {
	$elements[2] = '';
}

$phonenumber_message = '';
$validate_phonenumber = '';
if (isset($_POST['phone_number'])) {
	$phonenumber = $_POST['phone_number'];
	$validate_phonenumber = new ValidatePhonenumber($phonenumber);
	$phonenumber_message = $validate_phonenumber->ValidatePhonenumber($phonenumber);
} else {
	$elements[3] = '';
}

$number_message = '';
$validate_number = '';
if (isset($_POST['number'])) {
	$number = $_POST['number'];
	$validate_number = new ValidateNumber($number);
	$number_message = $validate_number->ValidateNumber($number);
} else {
	$elements[4] = '';
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
			<input type="text" name="email" value="<?php echo $elements[0]; ?>"><span><?php echo $mail_message; ?></span>
		</div>
		<div>
			<h3>Password</h3>
			<input type="text" name="password" value="<?php echo $elements[1]; ?>"><span><?php echo $password_message; ?></span>
		</div>
		<div>
			<h3>Username</h3>
			<input type="text" name="username" value="<?php echo $elements[2]; ?>"><span><?php echo $username_message; ?></span>
		</div>
		<div>
			<h3>Phone Number</h3>
			<input type="text" name="phone number" value="<?php echo $elements[3]; ?>"><span><?php echo $phonenumber_message; ?></span>
		</div>
		<div>
			<h3>Number</h3>
			<input type="text" name="number" value="<?php echo $elements[4] ?>"><span><?php echo $number_message; ?></span>
		</div>
		<div>	
			<button>Submit</button>
		</div>
	</form>
</body>
</html>