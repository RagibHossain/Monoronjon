<?php 
include('connection.php');
$_SESSION['exists'] = false ; 
$evil=false;
if(isset($_POST['signUpBtn']))
{
   $fName=$_POST['fName'];
   $lName=$_POST['lName'];
   $email=$_POST['email'];
   $password=$_POST['password'];
   $cPassword=$_POST['cPassword'];
   
 if($fName!="" && $lName!="" && $email!="" && $password!="" && $cPassword!="")//checking if the fields are empty or not ---- (1)
 {
     $view="SELECT email FROM user";
     $result=mysqli_query($link,$view);
     
     while($row=mysqli_fetch_array($result))
     {
         if($row['email']==$email){
             $_SESSION['exists']=true;
         }
     }
     
     if(!$_SESSION['exists']){// checking if email already taken or not ---(3)
     if($password==$cPassword)// checking if password and confirm password is the same------(2)
     {
             
        $encrypted = crypt($password,'$5$rounds=5000$kjkszpjforsalt$');
        echo "SHA-256: ".$encrypted."\n<br>"; 
        
       $sql = "INSERT INTO user(email,fName,lName,follower,password,image)
               VALUES('$email','$fName','$lName',0,'$encrypted','')";
        $query=mysqli_query($link,$sql);
         
    if($query)
    {
        $_SESSION['success']=1;
        header('location:login.php');
    }
    else  echo "Could upload information to database";
                

   // header('location: signup.php');
    }//(2) ends
     else echo "Password Missmatches";
 }// --- (3) ends
     
 }// (1) finishes
 else
 {
     
     echo "please fill up all the fields of the form <br>";
 }
 }



?>




<!DOCTYPE html>


<html>
<head>
   
   <title>
       signup
   </title>
    
    <link rel="stylesheet" type = "text/css" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

</head>    
<body>
    
        <div class="container">
    
    <div id ="signup-card" class="card m-auto t-5">
       
        <div class="card-body">
        <img class="myImg " src="images/Capture.PNG" alt="Monoronjon Logo">
        <h5 class="card-title text-center mb-5">Sign Up</h5>
        <div id="errorDiv" style="color:red;" ><?php 
                    
                          if($_SESSION['exists'])
                      {
                        echo "Email already is in use <br>";
  
    
                        $_SESSION['exists']=false;
    
                      }
                    else if($evil){echo "Sorry Evil peoples are not allowed to open account in this prestigious application .";}
            ?></div>    
         <form method="post">
         
           <div class="form-group"> 
           <label for="exampleInputFirstName">First Name</label>
            
              <input required class="form-control" type="text" name="fName" placeholder="First Name">  
               
           </div>
           <div class="form-group">
               <label for="exampleInputLastName">Last Name</label>
            
              <input required class="form-control" name="lName" type="text" placeholder="Last Name">  
           </div>
           <div class="form-group"> 
           <label for="exampleInputEmail1">Email address</label>
            
              <input required class="form-control" name="email" type="email" placeholder="Enter Email">  
               
           </div>
          
            <div class="form-group"> 
            <label for="exampleInputPassword1">Password</label>
            <input required class="form-control" name="password" type="password" placeholder="Enter Password"> </div>
            
            <div class="form-group"> 
            <label for="exampleInputPassword2">Confirm Password</label>
            <input required class="form-control" name="cPassword" type="password" placeholder="Enter Confirm Password"> </div>
            
             <div class="mt-5">
               
            <button class="btn btn-danger" name="signUpBtn"type="submit">Sign Up</button>
                 <a href="login.php" class="btn btn-dark float-right" >Back to Login</a>    
                 
             </div>
          </form>
           <div id="errorDiv"></div>
       </div>
    </div>
    
    
    </div>
    
    
</body>    
</html>