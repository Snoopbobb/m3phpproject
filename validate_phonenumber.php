<?php 
class ValidatePhonenumber extends Validate {
	public function ValidatePhonenumber($phonenumber) {
		if(!preg_match("/^\(\d{3}\) \d{3}-\d{4}$/", $phonenumber)) {
			return "Phone number must be in the (555) 555-5555 format";
		}
	}
}