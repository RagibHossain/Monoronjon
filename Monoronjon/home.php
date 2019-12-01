<?php 
include('connection.php');

?>



<!DOCTYPE html>
<html>
    <head>
        <title>
            Home
        </title>
 <link rel="stylesheet" type = "text/css" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    </head>
 <body>
  <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
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
               
                    <a class="nav-link" href="#contact">Profile</a>
               
               </li>
                <div class="dropdown dropdown-dark show">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <?php echo $_SESSION['fName']." ".$_SESSION['lName'];?>
                          </a>

                        <div class="dropdown-menu dropItem" aria-labelledby="dropdownMenuLink">
                           <a class="dropdown-item dropItem" href="#">Profile</a>
                            <a class="dropdown-item dropItem" href="#">Logout</a>
                          
                          </div>
                      </div>
             
              </ul>
              
              
               
          
          </div>
      </nav>
     <img  style="width:800px; height:100%;" alt="meme" src="images/Roll-Safe-1485964928-compressed.jpg">
 </body>    
</html>