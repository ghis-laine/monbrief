<?php
$conn = mysqli_connect('localhost','spcom_userakoua','MGROY892CICG','spcom_akoua');
$type=$_POST['type'];
$id=$_POST['id'];
if($type=='like'){
	$sql="update publish set like_counter=like_counter+1 where id=$id";
}else{
	$sql="update publish set dislike_counter=dislike_counter+1 where id=$id";
}
$res=mysqli_query($conn,$sql);
?>