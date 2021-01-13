<?php
include('../dbcon.php');
$custid=$_GET['custid'];
$sql="SELECT * FROM `customer` WHERE `cid`='$custid'";
$result=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($result);
?>
<html>
<body bgcolor="gold">
<a href="customer.php"> BACK </a>
<center>
<h1>  Update Customer Details</h1>
<table>
<form action=" <?php $_SERVER['PHP_SELF']; ?> " method="get">
<tr> <td>Customer Id: </td><td> <input type="text" name="cid" value="<?php echo $data['cid'];?>" > </td> </tr>
<tr> <td>Name:</td><td> <input type="text" name="name" value="<?php echo $data['name'];?>" > </td> </tr>
<tr> <td>Address:  </td><td> <input type="text" name="add" value="<?php echo $data['address'];?>"> </td> </tr>
<tr> <td>Mobile No: </td><td> <input type="text" name="mbno" value="<?php echo $data['mobileno'];?> "> </td> </tr>
<tr> <td> Date-Of-Birth:</td><td> <input type="text" name="date" value="<?php echo $data['date'];?>"> </td> </tr>
<tr> <td>Email ID: </td><td> <input type="text" name="emailid" value="<?php echo $data['emailid'];?> "> </td> </tr>
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
$cid=$_GET['cid'];
$name=$_GET['name'];
$address=$_GET['add'];
$mobileno=$_GET['mbno'];
$date=$_GET['date'];
$email=$_GET['emailid'];
$qry= "UPDATE `customer`". "SET `name`='$name', `address`='$address', `mobileno`='$mobileno', `date`='$date',`emailid`='$email'"." WHERE `cid`='$cid'" ;
$r= mysqli_query($con,$qry);
if($r == true)
{
?>
<script>
alert('Data Updated Succesfully');
window.open('customer.php','_self');
</script>
<?php
}
}
?>  


