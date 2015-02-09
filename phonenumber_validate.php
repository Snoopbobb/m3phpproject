<?php 
class PhonenumberValidate extends Validate {
	protected $regex = '/^\(\d{3}\) \d{3}-\d{4}$/';
}