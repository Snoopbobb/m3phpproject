<?php 
class ValidateNumber extends Validate {
	public function ValidateNumber($number) {
		if(!preg_match("/^[0-9]/", $number)) {
			return "Only numbers are allowed";
		}
	}
}