<?php
$conn = @mysql_connect("localhost","root","");
$db = mysql_select_db('school',$conn);

$delete_record =$_GET['del'];
$query="delete from marquee where id='$delete_record'";
if (mysql_query($query))
{
    echo "<script>window.open('mqdata.php?deleted=Record has been Deleted successfully!','_self')</script>";
}
?>