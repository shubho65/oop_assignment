<?php
Class FullName{
	private $fullName;
	
	public function setFullName($fullname){
		$this->fullName=$fullname;
	}
	public function printName(){
		return $this->fullName;
	}
}
?>