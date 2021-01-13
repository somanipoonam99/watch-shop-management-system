<?php
include('../dbcon.php');
$seid=$_GET['seid'];
$sql="SELECT * FROM `employee` WHERE `eid`='$seid'";
$run=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($run);
?>
<html>
<body bgcolor="gold">
<a href="employee.php"> BACK </a>
<center>
<h1>  Update Employee Details</h1>
<table>
<form action=" <?php $_SERVER['PHP_SELF']; ?> " method="get">
<tr> <td>Employee Id: </td><td> <input type="text" name="eid" value="<?php echo $data['eid'];?>" > </td> </tr>
<tr> <td>Name:</td><td> <input type="text" name="nm" value="<?php echo $data['name'];?>" > </td> </tr>
<tr> <td>Address:  </td><td> <input type="text" name="add" value="<?php echo $data['address'];?>"> </td> </tr>
<tr> <td>Mobile No: </td><td> <input type="text" name="mbno" value="<?php echo $data['mobileno'];?> "> </td> </tr>
<tr> <td>Email ID: </td><td> <input type="text" name="email" value="<?php echo $data['email'];?> "> </td> </tr>
<tr> <td> Date-Of-Join:</td><td> <input type="text" name="date" value="<?php echo $data['date'];?>"> </td> </tr>
<tr> <td>Salary: </td><td> <input type="text" name="sal" value="<?php echo $data['salary'];?> "> </td> </tr>
</table>
<br>
<input type="submit" value="UPDATE" name="update">
</center>
</body>
</html>

<?php
if(isset($_GET['update']))
{
include('../dbcon.php');
$empid=$_GET['eid'];
$name=$_GET['nm'];
$address=$_GET['add'];
$mobileno=$_GET['mbno'];
$email=$_GET['email'];
$date=$_GET['date'];
$salary=$_GET['sal'];
$qry= "UPDATE `employee`". "SET `name`='$name', `address`='$address', `mobileno`='$mobileno', `email`='$email', `date`='$date', `salary`='$salary'"." WHERE `eid`='$empid'" ;
$r= mysqli_query($con,$qry);
if($r == true)
{
?>
<script>
alert('Data Updated Succesfully');
window.open('employee.php','_self');
</script>
<?php
}
}
?>  