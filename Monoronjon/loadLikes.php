<?php
include('connection.php');
$likes = $_POST['totLikes'];
$_SESSION['likes']=$likes;
$memeId = $_POST['meme_id'];
$liked = $_POST['liked'];
$u_id= $_POST['u_id'];
$sql= "UPDATE meme SET likes='$likes' WHERE m_id='$memeId'";

$query = mysqli_query($link,$sql);

if($liked == 1)
{
    
    mysqli_query($link,"INSERT INTO likes(u_id,m_id) VALUES('$u_id','$memeId')");
}
else if($liked==0) {
   
    mysqli_query($link,"DELETE FROM likes WHERE u_id='$u_id' AND m_id='$memeId'");
}

     echo $likes;


?>