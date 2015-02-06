<?php 
class ValidateEmail extends Validate {

	public function ValidateEmail($email) {
		if(!preg_match("/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/", $email)) {
			return "Please enter a valid email address";
		}
	}
}