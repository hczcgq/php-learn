<html>
<head>
<title>Connecting MySQL Server</title>
</head>
<body>
<?php
   if(isset($_POST['add'])){
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
      $sql = "CREATE TABLE tutorials_tbl( ".
          "tutorial_id INT NOT NULL AUTO_INCREMENT, ".
          "tutorial_title VARCHAR(100) NOT NULL, ".
          "tutorial_author VARCHAR(40) NOT NULL, ".
          "submission_date DATE, ".
          "PRIMARY KEY ( tutorial_id )); ";
      $retval=mysql_query($sql,$conn);
      if(! $retval )
      {
         die('Could not create table: ' . mysql_error());
      }
      echo "Table created successfully\n";

      //删除表
      // $sql="DROP TABLE tutorials_tbl";
      // $retval=mysql_query($sql,$conn);
      // if(! $retval )
      // {
      //    die('Could not delete table: ' . mysql_error());
      // }
      // echo "Table deleted successfully\n";


      if(! get_magic_quotes_gpc() ){
         $tutorial_title = addslashes ($_POST['tutorial_title']);
         $tutorial_author = addslashes ($_POST['tutorial_author']);
      }else{
         $tutorial_title = $_POST['tutorial_title'];
         $tutorial_author = $_POST['tutorial_author'];
      }
      $submission_date = $_POST['submission_date'];

      $sql = "INSERT INTO tutorials_tbl ".
               "(tutorial_title,tutorial_author, submission_date) ".
               "VALUES ".
               "('$tutorial_title','$tutorial_author','$submission_date')";
      
      $retval = mysql_query( $sql, $conn );
      if(! $retval ){
         die('Could not enter data: ' . mysql_error());
      }
      echo "Entered data successfully\n";

      mysql_close($conn);
   }else{
      ?>
      <form method="post" action="<?php $_PHP_SELF ?>">
         <table width="600" border="0" cellspacing="1" cellpadding="2">
            <tr>
               <td width="260">Tutorial Title</td>
               <td>
                  <input name="tutorial_title" type="text" id="tutorial_title">
               </td>
            </tr>
            <tr>
               <td width="260">Tutorial Author</td>
               <td>
                  <input name="tutorial_author" type="text" id="tutorial_author">
               </td>
         </tr>
         <tr>
            <td width="260">Submission Date [ yyyy-mm-dd ]</td>
            <td>
               <input name="submission_date" type="text" id="submission_date">
            </td>
            </tr>
            <tr>
               <td width="250"> </td>
               <td> </td>
            </tr>
            <tr>
               <td width="250"> </td>
               <td>
                  <input name="add" type="submit" id="add" value="Add Tutorial">
               </td>
            </tr>
         </table>
      </form>
<?php
   }
?>
</body>
</html>