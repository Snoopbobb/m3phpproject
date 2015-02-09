<?php 
class PasswordValidate extends Validate {
	protected $regex = '/^(?=.*\d.*\d)[0-9A-Za-z!@#$%*]{8,}$/';
}