<?php
include 'FullName.php';

Class MyName extends FullName{
	private $nickName;
	
	public function setNickName($nickname){
		$this->nickName=$nickname;
	}
	
	public function printName(){
		return $this->nickName;
	}
}

?>