<?php 
include('connection.php');

echo "hurra";
$m_id=$_GET['m_id'];
if($_GET['c']=='1')
$com=$_GET['com'];
$u_id=$_GET['u_id'];
$_SESSION['img']=$_GET['img'];
$_SESSION['caption']=$_GET['caption'];
$_SESSION['m_id']=$m_id;
$_SESSION['u_id']=$u_id;

echo $m_id." ".$com." ".$u_id;
echo "<br>".$_SESSION['img'];
date_default_timezone_set('Asia/Dhaka');
$currentTime = date('Y-m-d H:i:s');
if($_GET['c']=='1'){
$sql="INSERT INTO comments(u_id,m_id,time,comment) VALUES('$u_id','$m_id','$currentTime','$com')";
$query=mysqli_query($link,$sql);
if($query) echo "successful";
else echo "unsuccessful";

echo $com;
}
$_SESSION['mId']=$m_id;

header('location:particularMeme.php');

?>