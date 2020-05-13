<?php

include('connection.php');
if(!empty($_GET['did']))
{

$id=$_GET['did'];
$sql="delete from persons where id='$id'";

}
$res=mysqli_query($con,$sql);

header("location:manage.php?msz=your data is deleted");


?>