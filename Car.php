<?php
Class Car{
	private $engineStatus;
	private $bodyPart;
	
	public function setEngineStatus($engstat){
		$this->engineStatus=$engstat;
	}
	
	public function setBodyPart($part){
		$this->bodyPart=$part;
	}	
	public function getEngineStatus(){
		return $this->engineStatus;
	}
	
	public function getBodyPart(){
		return $this->bodyPart;
	}
}

?>