<?php

$login_username=$_POST["username"];
$login_password=$_POST["password"];


include "mysql.php";
$sql="SELECT * FROM login WHERE user="."'".$login_username."' AND password='".$login_password."'";
$result=$conn->query($sql);
if($result->num_rows>0){
	while($row=$result->fetch_assoc()){
		echo "login success";
	}
}else{
		echo "0 results";
}
$conn->close();

?>