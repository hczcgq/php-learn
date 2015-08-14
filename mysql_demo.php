<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname="myDB";

// 创建连接
$conn = new mysqli($servername, $username, $password,$dbname);

// 检测连接
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully<br>";

//创建数据库
#$sql="CREATE DATABASE myDB";
#if($conn->query($sql)===true){
#	echo "Database created successfully<br>";
#}else{
#	echo "Error Creating database:".$conn->error."<br>";
#}

#创建表
#$sql = "CREATE TABLE MyGuests (
#id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
#firstname VARCHAR(30) NOT NULL,
#lastname VARCHAR(30) NOT NULL,
#email VARCHAR(50),
#reg_date TIMESTAMP
#)";
#if($conn->query($sql)===true){
#	 echo "Table MyGuests created successfully<br>";
#} else {
#    echo "Error creating table: " . $conn->error."<br>";
#}


#插入数据
#$sql="INSERT INTO MyGuests (firstname, lastname, email)
#VALUES ('John', 'Doe', 'john@example.com')";
#if($conn->query($sql)===true){
#	 echo "New record created successfully<br>";
#} else {
#    echo "Error: " . $sql . "<br>" . $conn->error."<br>";
#}


#插入多条数据
#$sql = "INSERT INTO MyGuests (firstname, lastname, email)
#VALUES ('John', 'Doe', 'john@example.com');";
#$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
#VALUES ('Mary', 'Moe', 'mary@example.com');";
#$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
#VALUES ('Julie', 'Dooley', 'julie@example.com')";
#if($conn->multi_query($sql)===true){
#	echo "New records created successfully<br>";
#} else {
#    echo "Error: " . $sql . "<br>" . $conn->error."<br>";
#}



#预处理
#$stmt=$conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES(?, ?, ?)");
#$stmt->bind_param("sss", $firstname, $lastname, $email);
// 设置参数并执行
#$firstname = "John";
#$lastname = "Doe";
#$email = "john@example.com";
#$stmt->execute();
#$firstname = "Mary";
#$lastname = "Moe";
#$email = "mary@example.com";
#$stmt->execute();
#$firstname = "Julie";
#$lastname = "Dooley";
#$email = "julie@example.com";
#$stmt->execute();
#echo "New records created successfully<br>";
#$stmt->close();



#读取数据
#$sql="SELECT id, firstname, lastname FROM MyGuests";
#$result=$conn->query($sql);
#if($result->num_rows>0){
#	while($row=$result->fetch_assoc()){
#		echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"]."<br>";
#	}
#}else{
#		echo "0 results";
#}


#按条件读取
$sql="SELECT id, firstname, lastname FROM MyGuests WHERE FirstName='John'";
$result=$conn->query($sql);
if($result->num_rows>0){
	while($row=$result->fetch_assoc()){
		echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"]."<br>";
	}
}else{
		echo "0 results";
}


#更新
#$sql="UPDATE MyGuests SET email='hczcgq@gmail.com'
#WHERE FirstName='Mary' AND LastName='Moe'";
#if($conn->multi_query($sql)===true){
#	echo "Update successfully<br>";
#} else {
#   echo "Error: " . $sql . "<br>" . $conn->error."<br>";
#}


#删除
#$sql="delete from myguests where id=6";
#if($conn->multi_query($sql)===true){
#	echo "Delete successfully<br>";
#} else {
#  echo "Error: " . $sql . "<br>" . $conn->error."<br>";
#}

$conn->close();
?>
</body>
</html>