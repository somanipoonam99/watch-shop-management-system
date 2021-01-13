<html>
<body bgcolor="gold">
<center>
<h1> Customer Details</h1>
<table>
<form action=" <?php $_SERVER['PHP_SELF']; ?> " method="post">
<tr> <td>Customer Id: </td><td> <input type="text" name="cid"> </td> </tr>
<tr> <td>Name:</td><td> <input type="text" name="nm"> </td> </tr>
<tr> <td>Address:  </td><td> <input type="text" name="add"> </td> </tr>
<tr> <td>Mobile No: </td><td> <input type="text" name="mbno"> </td> </tr>
<tr> <td> Date-Of-Birth</td><td> <input type="text" name="dob" placeholder="yy-mm-dd"> </td> </tr>
<tr> <td>Email-Id </td><td> <input type="text" name="emailid"> </td> </tr>
</table>
<br>
<input type="reset" value="CLEAR" name="new">  &nbsp;&nbsp;<input type="submit" value="INSERT" name="insert">
<br>
<br>
</center>
</form>
<table align='center' border='1' >
<tr>
<th> Employee ID</th>
<th> Name</th>
<th>Address</th>
<th>Mobile No</th>
<th>Date-of-Birth</th>
<th>Email-Id</th>
<th> Update</th>
<th>Delete </th>
</tr>
</body>
</html>
<?php
//Grid
include ('../dbcon.php');
$sql="SELECT * FROM `customer`";
$run=mysqli_query($con,$sql);
while($data=mysqli_fetch_assoc($run)) 
{
?>
<tr>
<td><?php echo $data['cid']; ?></td>
<td><?php echo $data['name']; ?></td>
<td><?php echo $data['address']; ?></td>
<td><?php echo $data['mobileno']; ?></td>
<td><?php echo $data['date']; ?></td>
<td><?php echo $data['emailid']; ?></td>
<td><a href="updatecustomer.php?custid=<?php echo $data['cid']; ?>" target="frm"> Edit </a></td>
<td><a href="deletecustomer.php?custid=<?php echo $data['cid']; ?>"> Delete </a></td>
</tr>
<?php
}
?>
</table>
<?php
if(isset($_POST['insert']))
{
include('../dbcon.php');
$cid=$_POST['cid'];
$name=$_POST['nm'];
$address=$_POST['add'];
$mobileno=$_POST['mbno'];
$date=$_POST['dob'];
$email=$_POST['emailid'];
//validation
$name_valid = $mobileno_valid = $email_valid = false; 

//check name

if(preg_match('/[^a-zA-Z\s]/',$name))
{
?>
<script>
 alert('Only Alphabets are allowed in name');
 window.open('customer.php','_self');
</script>
<?php
}
else
{
$name_valid=true;
}
if(filter_var($email, FILTER_VALIDATE_EMAIL))
{
$email_valid=true;
}
else
{
?>
<script>
 alert('Invalid Email Address');
 window.open('customer.php','_self');
</script>
<?php
}
if(preg_match("/^[6789]{1}\d{9}$/",$mobileno))
{
$mobileno_valid=true;
}
else
{
?>
<script>
 alert('Invalid Mobile No');
 window.open('customer.php','_self');
</script>
<?php
}
if($name_valid && $mobileno_valid && $email_valid )
{
$qry="INSERT INTO `customer`(`cid`, `name`, `address`, `mobileno`, `date`, `emailid`) VALUES ('$cid','$name','$address','$mobileno','$date','$email')";
$run=mysqli_query($con,$qry);
if($run == true)
{
 ?>
<script>
 alert('Data Inserted Succesfully');
 window.open('customer.php','_self');
</script>
<?php
}
}
}
?>
