<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
 // variables for input data
 $name = $_POST['name'];
 $nickname = $_POST['nickname'];
 $gender = $_POST['gender'];
 $email = $_POST['email'];
 $comment = $_POST['comment'];
 $cellphone = $_POST['cellphone'];
 // variables for input data
 
 // sql query for inserting data into database
 
        $sql_query = "INSERT INTO users(name,nickname,gender,email,comment,cellphone) VALUES('$name','$nickname','$gender','$email','$comment','$cellphone')";
 mysqli_query($con, $sql_query);
        
        // sql query for inserting data into database
 
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CRUD Operations With PHP and MySql - By Cleartuts</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
 <div id="content">
    <label>CRUD Operations With PHP and MySql - By Cleartuts</label>
    </div>
</div>
<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td align="center"><a href="index.php">back to main page</a></td>
  
    </tr>
    <tr>
    <td><input type="text" name="name" placeholder="FullName" required /></td>
    </tr>
    </tr>
    <tr>
    <td><input type="text" name="nickname" placeholder="Nickname" required /></td>
    </tr>
    <tr>
   </tr>
    <tr>
    <td><input type="text" name="gender" placeholder="Gender" required /></td>
    </tr>
    <tr>
     </tr>
    <tr>
    <td><input type="text" name="email" placeholder="Email" required /></td>
    </tr>
    <tr>
     </tr>
    <tr>
    <td><input type="text" name="comment" placeholder="Comment" required /></td>
    </tr>
    <tr>
     </tr>
    <tr>
    <td><input type="text" name="cellphone" placeholder="Cellphone" required /></td>
    </tr>
    <tr>
    <td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>