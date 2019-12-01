<?php

include('connection.php');

$userName=$_SESSION['fName']." ".$_SESSION['lName'];
$fName=$_SESSION['fName'];
$lName=$_SESSION['lName'];
$id=$_SESSION['u_id'];

  	// execute query
 
$query=mysqli_query($link,"SELECT * FROM user WHERE id='$id'");
 if($query)
 {
     echo "success";
 }
else echo "failed";

if(mysqli_num_rows($query)==1)
{
    $data=mysqli_fetch_array($query);
    $email=$data['email'];
    $follower=$data['follower'];
    $img=$data['image'];
    $uName=$data['fName']." ".$data['lName'];
    echo $img;
}

  if(isset($_POST['Submit']))
  {
      $fn= $_POST['fName'];
      $ln=$_POST['lName'];
      $bio=$_POST['bio'];
        	// Get image name
  	$imageLocation = $_FILES['fileToUpload']['name'];
  	// Get text
  	$bio= mysqli_real_escape_string($link, $_POST['bio']);

  	// image file directory
  	$target = "images/".basename($imageLocation);
     
  	$sql = "UPDATE user SET fName='$fn',lName='$ln',image='$imageLocation',bio='$bio' WHERE id='$id'";
  	// execute query
  	mysqli_query($link,$sql);

  	if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target)) {
  		$msg = "Profile updated successfully";
       echo $msg;
        header('location:profile.php');
  	}else{
  		$msg = "Failed to upload image";
  	}
  }




?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="style.css">

    <title>Hello, world!</title>
  </head>
  <body>
      
        <nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top">
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
          <span class="navbar-toggler-icon">
             
             </span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarResponsive">
            
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
      
      
    <div class="container-fluit mt-5 bt-5 profile">
        <div class="row justify-content-center">
            <div class="row">
                <img src="images/<?php echo $img;?>" class="img-fluid ml-5 w-25 rounded-circle img-edit">
                <div class="ml-5">
                    <h1><?php echo $uName; ?></h1>
                    <p><?php echo $email?></p>
                     <p><?php echo $follower?> followers</p>
                </div>
                <button type="button" class="btn btn-dark ml-5 mt-3 tootltip-test" style="height: 40px;" data-toggle="modal" data-target="#myModal" id="myBtn">Edit Profile</button>
                <button type="button" class="btn btn-dark ml-5 mt-3" style="height: 40px; width: 150px">Follow</button>
            </div>
        </div>
        <div class="conttainer mt-5">
            <div class="row">
                <div class="col"></div>
                <div class="col-6">
                    <ul class="nav nav-tabs">
                      <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#">Posts</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#">Comments</a>
                      </li>
                    </ul>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </div>
      <div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Edit Profile</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       <form  class="" method="post" enctype="multipart/form-data">
           <div class="form-group"> 
            <label for="exampleInputCaption">First Name</label>
            <input required class="form-control" autocomplete="off" name="fName" value="<?php echo $fName;?>"type="text" placeholder="Enter Caption"> </div>
            <div class="form-group"> 
            <label for="exampleInputCaption">Last Name</label>
            <input required class="form-control" autocomplete="off" name="lName" value="<?php echo $lName;?>"type="text" placeholder="Enter Caption"> </div>
      <div class="form-group">
      <label for="exampleInputCaption">Profile Picture</label> <br>     
      <input type="file" name="fileToUpload" id="fileToUpload">
      </div>
       
         
               <div class="form-group mt-1">
      <label for="exampleInputCaption">Bio</label>      
      <input type="text" required class="form-control" autocomplete="off"  name="bio" id="bio">
      </div>
             <div class="mt-2"> <input class="btn btn-dark float-right " type="submit" value="Upload Image" name="Submit"></div>
      </form>
      </div>

      <!-- Modal footer -->
     
         
       <div class="m-4"><button type="button" class="btn btn-danger" data-dismiss="modal">Close</button></div> 
      

    </div>
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  
 <script src="https://use.fontawesome.com/releases/v5.11.2/js/all.js"></script>  
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  </body>
</html>