<?php 

class ValidatePassword extends Validate {
	public function ValidatePassword($password) {
		if(!preg_match("/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/", $password)) {
			return "Password must contain at least 8 characters, at least one uppercase letter, at least one lowercase letter, and at least one number";
		}
	}
}