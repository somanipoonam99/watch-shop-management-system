<?php
include('../dbcon.php');
$cid=$_REQUEST['custid'];
$qry= "DELETE FROM `customer` WHERE `cid`='$cid'";
$r= mysqli_query($con,$qry);
if($r == true)
{
?>
<script>
alert('Data Deleted Succesfully');
window.open('customer.php','_self');
</script>
<?php
}
?>
