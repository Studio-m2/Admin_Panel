<?php
$connection=mysqli_connect("localhost","root","","admindatabase");
$sel="select * from addstudent";
$result=mysqli_query($connection,$sel);

$data=array();
while($row=mysqli_fetch_assoc($result)){
	
	$data['data'][]=$row;
	
}
echo json_encode($data);
?>