<?php
include 'Car.php';

Class Audi extends Car{
	private $color;
	private $seats;
	
	public function setColor($color){
	 $this->color=$color;
	}
	
	public function setSeats($seats){
		$this->seats=$seats;
	}
	
	public function getColor(){
		return $this->color;
	}
	public function getSeats(){
		return $this->seats;
	}
}

?>