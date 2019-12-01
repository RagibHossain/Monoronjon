<?php 

include('connection.php');
$uId=$_SESSION['u_id'];
// photo up
 if (isset($_POST['upload'])) {
     
     //User Info
     $id='';
     $email=$_SESSION['email'];
     echo $email;
    $userQuery="SELECT id FROM user WHERE email='$email'";
     $userRes=mysqli_query($link,$userQuery);
       if($userRes)
        {
            $rows=mysqli_num_rows($userRes);
            echo "Number of rows ".$rows;
            
            if($rows==1)
            {
                $data=mysqli_fetch_array($userRes);
                $id= $data['id'];
                echo $id;
                
            }
            else echo "Email or Password incorrect";
            
        }
      
     
  	// Get image name
  	$imageLocation = $_FILES['fileToUpload']['name'];
  	// Get text
  	$imageText = mysqli_real_escape_string($link, $_POST['caption']);

  	// image file directory
  	$target = "images/".basename($imageLocation);

  	$sql = "INSERT INTO meme (u_id,imageLocation, caption) VALUES ('$id','$imageLocation','$imageText')";
  	// execute query
  	mysqli_query($link,$sql);

  	if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
        header('location:meme.php');
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($link,"SELECT * FROM meme ORDER BY m_id DESC");//taking all the memes from database and later will be added in the card
  
   

?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            MEME
        </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/devicons/1.8.0/css/devicons.min.css">

<link rel="stylesheet" href="style.css">



  
    </head>
 <body >
    
  <nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top">
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
          <span class="navbar-toggler-icon">
             
             </span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarResponsive">
              <img class="myImg " src="images/Capture.PNG" alt="Monoronjon Logo">
           <ul class="navbar-nav m-auto">
             
               <li class="nav-item mr-5">
               
                    <a class="nav-link" href="meme.php">Memes</a>
               
               </li>
               
               <li class="nav-item mr-5">
               
                    <a class="nav-link" href="#contact">Help and Support</a>
               
               </li>
               <li class="nav-item mr-5">
               
                    <a class="nav-link" href="#">About</a>
               
               </li>
                      <div class="dropdown dropdown-dark show">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <?php echo $_SESSION['fName']." ".$_SESSION['lName'];?>
                          </a>

                        <div class="dropdown-menu dropItem" aria-labelledby="dropdownMenuLink">
                           <a class="dropdown-item dropItem" href="profile.php">Profile</a>
                            <a class="dropdown-item dropItem" href="logout.php">Logout</a>
                          
                          </div>
                      </div>
               
              <button class="btn btn-primary my-2 ml-5 tootltip-test"  title="Upload Meme" data-toggle="modal" data-target="#myModal" id="myBtn" >Upload +</button>
              </ul>
              
               
          
          </div>
      </nav>

     <br><br><br><br>
     
        
        
         <!-- Button to Open the Modal -->
  <div class="container">
      
      <?php $i=0;  while($row=mysqli_fetch_array($result)){  $i++; ?>
      <div class="card" style="width: 820px;">
          <div class="card-body" >
         
              <h4 class="header"><?php 
                $userId=$row['u_id']; 
                //echo $userId+1;
                //THis query is for the first name and the last name of user who posted the meme                                           
                $userSql="SELECT * FROM user WHERE id=$userId"; 
                //echo $userSql;                                      
                $userNameQuery=mysqli_query($link,$userSql);
                if($userNameQuery){                                    
                $uNRow=mysqli_fetch_array($userNameQuery);
                echo $uNRow['fName']." ".$uNRow['lName'];                                      
                }
                else echo "unsuccessful";                                      
                  ?></h4>
        <h5 class="header"><?php echo $row['caption'];?></h5>     
              <!-- checking if the memes are already liked by the user or not -->
              <?php 
               $meme_id=$row['m_id'];
               $likeQuery= mysqli_query($link,"SELECT * FROM likes WHERE m_id='$meme_id' AND u_id='$uId' ");
               
            $numRows = mysqli_num_rows($likeQuery);
                echo $numRows;                                           
                                                           
                                                           
                                                           
              ?>
              
      <img id="memeImage" style="width:800px; height:100%;" src="images/<?php echo $row['imageLocation'];  ?>">
         
          </div>
            <div class="card-footer">
                <div id="like<?php echo $row['m_id'];?>"><?php echo $row['likes']; ?> </div>
                
                
                <button class="btn" id="btnLike" onclick="like('<?php echo $row['m_id'];?>',<?php echo $row['likes'];?>,<?php echo $_SESSION['u_id'] ?>)"><i style="color:<?php if($numRows==1) echo 'blue'; else echo 'black';?>" id="likeBtn<?php echo $row['m_id'];?>" class="fas fa-thumbs-up"></i></button>
                
                
                <a href="#" id="viewCom<?php echo $_SESSION['m_id'] ?>" onclick="viewComment(<?php echo $row['m_id'] ?>,<?php echo $_SESSION['u_id'] ?>,'<?php echo $row['m_id'] ?>','<?php echo $row['imageLocation'];  ?>','<?php echo $row['caption'];?>')"> View Comments</a>
                
                <button class="btn btn-dark float-right" id="commentBtn<?php echo $row['m_id'];?>" onclick="displayCommentSection('commentSection<?php echo $row['m_id'];?>','commentBtn<?php echo $row['m_id'];?>')">Comment</button>
                
                <div class="commentSection mt-2 mb-2" id="commentSection<?php echo $row['m_id'];?>" style="display:none">
                <form method="post"><input type="text" autocomplete="off" class="form-control" required id="commentTxt<?php echo $row['m_id'];?>" placeholder="Type your Comment">
              
                    <a href="#" id="commentSubmit<?php echo $_SESSION['m_id'] ?>" onclick="comment(<?php echo $row['m_id'] ?>,<?php echo $_SESSION['u_id'] ?>,'<?php echo $row['m_id'] ?>','<?php echo $row['imageLocation'];  ?>','<?php echo $row['caption'];?>')" class="btn btn-danger mt-2 float-right" name="commentSubmitBtn<?php echo $row['m_id'];?>">Submit</a>
                    
                </form>
                </div>
            
          </div>
          
    </div>
     
      <?php } // while ends here?>
  </div> <!-- container end -->
    
<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Upload Your Meme</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       <form  class="" method="post" enctype="multipart/form-data">
           <div class="form-group"> 
            <label for="exampleInputCaption">Caption</label>
            <input required class="form-control" autocomplete="off" name="caption" type="text" placeholder="Enter Caption"> </div>
      <div class="form-group">
      <input type="file" name="fileToUpload" id="fileToUpload">
      </div>
           <div> <input class="btn btn-dark" type="submit" value="Upload Image" name="upload"></div>
      </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
         
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

    <div>
     
     
     </div> 
     
<script>
      
   
    
     function displayCommentSection(cs,cb)
    {
        
        
      //  alert("in");
       // alert(cs+" "+cb);
       if(document.getElementById(cs).style.display=='block') {
           console.log(cs);
           document.getElementById(cs).style.display='none';
           document.getElementById(cb).innerHTML='comment';                                                                  
        }
        else 
        {
            console.log(cs);
            document.getElementById(cs).style.display='block';
            document.getElementById(cb).innerHTML='cancel';
        }
        
        
    }
    var count = 0;
    function like(id,likes,u_id)
    {
      
        count++;
        var curLikes = $('#like'+id).val();
        
        console.log(curLikes+ " count");
        console.log(likes);
        var iconId =document.getElementById('likeBtn'+id);
      // like condition  
      if(iconId.style.color=="black") 
      {
          iconId.style.color="blue";
          $(document).ready(function(){
          $('#like'+id).load("loadLikes.php",{
                totLikes : likes+1,
                meme_id : id,
                u_id : u_id,
                liked: 1
                
            });
      });
      }
        //unlike condition 
        else 
        {
          iconId.style.color="black";
          $(document).ready(function(){
          $('#like'+id).load("loadLikes.php",{
                totLikes : likes,
                meme_id : id,
               u_id : u_id,
                liked : 0
                
            });
            });  
            
        }
                  
        
            
           
        
        
        
    }
     function comment(m_id,u_id,m_input,img,caption)
    {
        var com= $("#commentTxt"+m_input).val();
        console.log(com+" by "+m_input);
        console.log("#commentTxt"+m_input);
        console.log(img);
        var link='comment.php?m_id='+m_id+'&com='+com+'&u_id='+u_id+'&img='+img+'&caption='+caption+'&c='+'1';
        console.log(link);
     // $("#commentSubmit"+m_input).attr("href",link);
      //  $("#commentSubmit"+m_input).click='on';
        window.location.href=link;
    }
        function viewComment(m_id,u_id,m_input,img,caption)
    {
        //var com= $("#commentTxt"+m_input).val();
        //console.log(com+" by "+m_input);
        //console.log("#commentTxt"+m_input);
        //console.log(img);
        var link='comment.php?m_id='+m_id+'&u_id='+u_id+'&img='+img+'&caption='+caption+'&c='+'0';
        console.log(link);
     // $("#commentSubmit"+m_input).attr("href",link);
      //  $("#commentSubmit"+m_input).click='on';
        window.location.href=link;
    }
     
     </script>
       
   <!-- Script Source Files -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  
 <script src="https://use.fontawesome.com/releases/v5.11.2/js/all.js"></script>  
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     
 </body>    
</html>


