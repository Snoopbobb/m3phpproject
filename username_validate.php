<?php 
class UsernameValidate extends Validate {
	protected $regex = '/[A-Za-z][A-Za-z0-9]{5,31}$/';
}