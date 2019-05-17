<?php
Class Connection {
	
	public $conn;
	
	public function __construct(){
		$this->conn=new PDO('mysql:host=localhost;dbname=test_sh',"root","");
	}
	
	public function insertMobile($name,$model,$price){
		$statement=$this->conn->prepare("INSERT INTO MOBILES (name,model,price) VALUES (:name,:model,:price)");
		
		try{
			$statement->execute(
			array(
			":name"=>$name,
			":model"=>$model,
			":price"=>$price
			)
		);
		
		echo "another row inserted";
		
		}catch(\Exception $e){
			echo "error is: ".$e->getMessage();
		}
	}

	
}


?>