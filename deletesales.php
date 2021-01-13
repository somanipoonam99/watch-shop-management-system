<?php
include('../dbcon.php');
$sid=$_REQUEST['slid'];
$qry= "DELETE FROM `sales` WHERE `sid`='$sid'";
$r= mysqli_query($con,$qry);
if($r == true)
{
?>
<script>
alert('Data Deleted Succesfully');
window.open('sales.php','_self');
</script>
<?php
}
?>
