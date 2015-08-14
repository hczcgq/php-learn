<?php

$register_username=$_POST["username"];
$register_password=$_POST["password"];
$register_truename=$_POST["turename"];

include "mysql.php";


#插入数据
$sql="INSERT INTO login (user, password, name)
VALUES ('".$register_username."','".$register_password."','".$register_truename."')";
if($conn->query($sql)===true){
	 echo "Register successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error."<br>";
}

?>