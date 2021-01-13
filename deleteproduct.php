<?php
include('../dbcon.php');
$pid=$_REQUEST['pdid'];
$qry= "DELETE FROM `product` WHERE `pid`='$pid'";
$r= mysqli_query($con,$qry);
if($r == true)
{
?>
<script>
alert('Data Deleted Succesfully');
window.open('product.php','_self');
</script>
<?php
}
?>
