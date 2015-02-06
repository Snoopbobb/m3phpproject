<?php 
class ValidateUsername extends Validate {
	public function ValidateUsername($username) {
		if(!preg_match("/[A-Za-z][A-Za-z0-9]{5,31}$/", $username)) {
			return "Username must begin with a letter, be between 6 and 32 characters, and contain letters and numbers only";
		}
	}
}