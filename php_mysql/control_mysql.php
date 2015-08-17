<html>
<head>
<title>Connecting MySQL Server</title>
</head>
<body>
<?php
      $dbhost = 'localhost:3306';  //mysql服务器主机地址
      $dbuser = 'root';      //mysql用户名
      $dbpass = '123456';//mysql用户名密码

      //连接数据库
      $conn = mysql_connect($dbhost, $dbuser, $dbpass);
      if(! $conn )
      {
        die('Could not connect: ' . mysql_error());
      }
      echo 'Connected successfully <br>';


      //创建数据库
      // $sql="CREATE DATABASE TUTORIALS";
      // $retval=mysql_query($sql,$conn);
      // if(!$retval){
      //    die("could not create database:".mysql_error());
      // }
      // echo "database TUTORIALS CRATE successfully";


      //删除数据库
      // $sql="DROP DATABASE TUTORIALS";
      // $retval=mysql_query($sql,$conn);
      // if(!$retval){
      //    die("delete fail :".mysql_error());
      // }
      // echo "delect successfully";

      //选择数据库
      mysql_select_db("TUTORIALS");

      //创建表
      // $sql = "CREATE TABLE tutorials_tbl( ".
      //     "tutorial_id INT NOT NULL AUTO_INCREMENT, ".
      //     "tutorial_title VARCHAR(100) NOT NULL, ".
      //     "tutorial_author VARCHAR(40) NOT NULL, ".
      //     "submission_date DATE, ".
      //     "PRIMARY KEY ( tutorial_id )); ";
      // $retval=mysql_query($sql,$conn);
      // if(! $retval )
      // {
      //    die('Could not create table: ' . mysql_error());
      // }
      // echo "Table created successfully\n";

      //删除表
      // $sql="DROP TABLE tutorials_tbl";
      // $retval=mysql_query($sql,$conn);
      // if(! $retval )
      // {
      //    die('Could not delete table: ' . mysql_error());
      // }
      // echo "Table deleted successfully\n";

      //查询数据
      // $sql = 'SELECT tutorial_id, tutorial_title, 
      //          tutorial_author, submission_date
      //          FROM tutorials_tbl ';
      // $retval=mysql_query($sql,$conn);
      // if(! $retval ){
      //    die('Could not get data: ' . mysql_error());
      // }
      // while($row = mysql_fetch_array($retval, MYSQL_ASSOC)){
      //    echo "Tutorial ID :{$row['tutorial_id']}  <br> ".
      //          "Title: {$row['tutorial_title']} <br> ".
      //          "Author: {$row['tutorial_author']} <br> ".
      //          "Submission Date : {$row['submission_date']} <br> ".
      //          "--------------------------------<br>";
      // }

      // while($row = mysql_fetch_array($retval, MYSQL_NUM)){
      //    echo "Tutorial ID :{$row[0]}  <br> ".
      //          "Title: {$row[1]} <br> ".
      //          "Author: {$row[2]} <br> ".
      //          "Submission Date : {$row[3]} <br> ".
      //          "--------------------------------<br>";
      // } 
      // mysql_free_result($retval); //释放类存
      // echo "Fetched data successfully\n";

      //修改数据表
      // $sql = 'UPDATE tutorials_tbl
      //          SET tutorial_title="Learning JAVA"
      //          WHERE tutorial_id=1';
      // $retval = mysql_query( $sql, $conn );
      // if(! $retval ){
      //    die('Could not update data: ' . mysql_error());
      // }
      // echo "Updated data successfully\n";


      //删除
      $sql = 'DELETE FROM tutorials_tbl
        WHERE tutorial_id=3';
      $retval = mysql_query( $sql, $conn );
      if(! $retval ){
         die('Could not delete data: ' . mysql_error());
      }
      echo "Deleted data successfully\n";

      mysql_close($conn);
  
?>
</body>
</html>