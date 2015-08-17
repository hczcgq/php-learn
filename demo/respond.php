<?php

class Respond{

	public static function json(){
		$arr=array(
			"id"=>11,
			"name"=>"chenguoquan",
			"age"=>25);

		$result=array(
			"code"=>200,
			"message"=>"Success",
			"data"=>$arr);
		echo json_encode($result);
		exit();
	}
}

?>