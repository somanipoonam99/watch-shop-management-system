<?php
session_start();
    if (isset($_SESSION['uid']))
{
    header('location:admin/admin1.php');
}
?>
<html>
<head>
<style>
div{
height:300px;
width:400px;
background:pink;
}
</style>
<body bgcolor="orange">
<a href="info.php"> BACK </a>
<center>
<div>
<br>
<h1>LOGIN FORM </h1>
<br>
<form action="login.php" method="post">
<table>
<tr> 
<td>User Name: </td> <td> <input type="text" name="user" required></td>
</tr>
<br>
</tr>
<tr>
<td>Password: </td> <td> <input type="password" name="password" required></td>
</tr>
</table>
<p><input type="submit" value="Login"  name="login"> &nbsp;&nbsp;<input type="button" value="reset" > 
</p>
</div>
</form>
</center>
</body>
</html>
<?php
include ("dbcon.php");
if(isset($_POST['login']))
{
   $uname=$_POST['user'];
   $pass=$_POST['password'];
   $qry="SELECT * FROM `user` WHERE `username`='$uname' AND `password`='$pass' ";
   $run=mysqli_query($con,$qry);
   $row=mysqli_num_rows($run);
if($row < 1)
    {
	?>
  <script>
  alert('user and password do not match!!');
  window.open('login.php', '_self');
  </script>
<?php
}	
 else
{
 $data=mysqli_fetch_assoc($run);
 $id=$data['id'];
 session_start();
 $_SESSION['uid']=$id;
 header('location:admin/admin1.php');
 }
}

?>