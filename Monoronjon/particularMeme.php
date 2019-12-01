<?php 
include('connection.php');

//query for finding the user who posted the meme
$id=$_SESSION['u_id'];
$mId=$_SESSION['m_id'];
$queryUser = mysqli_query($link,"SELECT * FROM user,meme where user.id=meme.u_id AND m_id='$mId'");

$user=mysqli_fetch_array($queryUser);

$fName=$user['fName'];
$lName=$user['lName']; 


// query for comments of the meme with info of meme and the users who commented
$m_id=$_SESSION['mId'];
$result = mysqli_query($link,"SELECT * FROM  meme,comments,user WHERE meme.m_id='$m_id' AND meme.m_id=comments.m_id AND comments.u_id=user.id");
if($result) echo "success";
else echo "unsuccess";
 $rows=mysqli_num_rows($result);
echo "Number of rows ".$rows;
$i=0;
//  while ($data=mysqli_fetch_array($result))
//  {
//     if($i==0) {
//        $caption= $data['caption'];
//        $img=$data['imageLocation']; 
//         
//     } 
//      echo "<br>".$data['fName']." ".$data['lName']." commented ".$data['comment']." on ".$data['caption'];
//      $i++;
//  }

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
 <body>
    
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
          <span class="navbar-toggler-icon">
             
             </span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarResponsive">
           <ul class="navbar-nav m-auto">
                <li class="nav-item mr-5">
               
                    <a class="nav-link" href="home.php">Home</a>
               
               </li>
               <li class="nav-item mr-5">
               
                    <a class="nav-link" href="meme.php">Memes</a>
               
               </li>
             
               <li class="nav-item mr-5">
               
                    <a class="nav-link" href="#contact">Help and Support</a>
               
               </li>
               <li class="nav-item mr-5">
               
                    <a class="nav-link" href="https://www.facebook.com/profile.php?id=100007721716044">Profile</a>
               
               </li>
                      <div class="dropdown dropdown-dark show">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <?php echo $_SESSION['fName']." ".$_SESSION['lName'];?>
                          </a>

                        <div class="dropdown-menu dropItem" aria-labelledby="dropdownMenuLink">
                           <a class="dropdown-item dropItem" href="#">Profile</a>
                            <a class="dropdown-item dropItem" href="logout.php">Logout</a>
                          
                          </div>
                      </div>
               
              <button class="btn btn-dark my-2 ml-5 tootltip-test"  title="Upload Meme" data-toggle="modal" data-target="#myModal" id="myBtn" >Upload +</button>
              </ul>
              
               
          
          </div>
      </nav>
     
     
       <div class="container">
     
      <div class="card mt-5 cardMod" style="width: 820px;">
          <div class="card-header">  <h4 class="header"><?php  echo $fName." ".$lName ; ?></h4>  </div>
          <div class="card-body">
         
              <h5 class="header"><?php  echo $_SESSION['caption']; ?></h5>
        
              
          <div>     
    
         <img   class="float-center" style="width:800px;" alt="meme" src="images/<?php echo $_SESSION['img']; ?>">
        
         </div> 
          </div>
            <div class="card-footer">
                <button class="btn btn-dark" onclick="hideComments()" id="hideCom"> Hide Comments</button>
                <button class="btn btn-dark float-right " id="commentBtn" onclick="displayCommentSection('commentSection','commentBtn')">Comment</button>
              <div class="commentSection" id="commentSection" style="display:none">
                <form method="post"><input autocomplete="off" type="text" class="form-control" id="commentTxt" placeholder="Type your Comment">
              <a href="#" id="commentSubmit" onclick="comment(<?php echo $_SESSION['m_id'] ?>,<?php echo $_SESSION['u_id'] ?>,'<?php echo $_SESSION['img']; ?>','<?php  echo $_SESSION['caption']; ?>')" class="btn btn-danger" name="commentSubmitBtn">Submit</a>
                </form>
             </div>
                 <div class="mt-1"id="comSection" style="display:block;">
                  <?php  while ($data=mysqli_fetch_array($result))
                { ?>
               
                
                   <div   style="background-color:#eaeddf;">
                   
                    <h6 class="header" style="color:blue"> <?php echo $data['fName']." ".$data['lName']; ?></h6>
                     <p> <?php echo $data['comment']; ?></p>
                    <hr style="border: 0.5px solid black;">   
                   </div>
                
                <?php }?>
                
         
          </div>
                
          </div>
          
    </div>
     <hr style="border: 0.5px solid black;">
      
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
         function hideComments()
         {
             var div= document.getElementById('comSection');
             if(div.style.display=='block')
                 {
                  
                     document.getElementById('hideCom').innerHTML='View Comments';
                     div.style.display='none';
                 }
             else 
                 {
                  
                     document.getElementById('hideCom').innerHTML='Hide Comments';
                     div.style.display='block';
                 }
             
         }
     function comment(m_id,u_id,img,caption)
    {
        var com= $("#commentTxt").val();
        console.log(com+" by ");
        console.log("#commentTxt");
        var link='comment.php?m_id='+m_id+'&com='+com+'&u_id='+u_id+'&img='+img+'&caption='+caption+'&c='+'1';
        console.log(link);
        console.log(com);
     // $("#commentSubmit"+m_input).attr("href",link);
        
      //  $("#commentSubmit"+m_input).click='on';
        window.location.href=link;
    }
     
     </script>
     
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  
 <script src="https://use.fontawesome.com/releases/v5.11.2/js/all.js"></script>  
     
    </body>
    
</html>