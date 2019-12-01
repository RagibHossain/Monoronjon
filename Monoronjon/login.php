<?php 
include('connection.php');

if(isset($_POST['signUpBtn']))
{
    header('location: signup.php');
}

$_SESSION['success']=0;
$success=$_SESSION['success'];

if(isset($_POST['logInBtn']))
{
    $email=$_POST['lEmail'];
   $password=$_POST['lPass'];
    
    if($email!="" && $password!="")// checking if fields are empty or not--(1)
    {
        $encrypted = crypt($password,'$5$rounds=5000$kjkszpjforsalt$');
        echo "SHA-256: ".$encrypted."\n<br>"; 
         
        $sql="SELECT * FROM user WHERE email='$email' AND password='$encrypted'";
        $query=mysqli_query($link,$sql);
        if($query)
        {
            $rows=mysqli_num_rows($query);
            echo "Number of rows ".$rows;
            
            if($rows==1)
            {
                $data=mysqli_fetch_array($query);
                $_SESSION['fName'] = $data['fName'];
                $_SESSION['lName'] = $data['lName'];
                $_SESSION['u_id'] = $data['id'];
                $_SESSION['email']= $email;
                header('location: meme.php');
                
            }
            else echo "Email or Password incorrect";
            
        }
        else echo "query unsuccessfull <br>";
        
    }//(1)   
    else echo "Fill Up the form";
}



?>


<!DOCTYPE html>

<html>
<head>
    <title>Login</title>
<link rel="stylesheet" type = "text/css" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</head>
<body>
    
    <div class="container">
    
    <div id ="login-card" class="card m-auto">
       
        <div class="card-body">
        <img class="myImg " src="images/Capture.PNG" alt="Monoronjon Logo">
        <h5 class="card-title text-center mb-5">Login</h5>
        <div id="successDiv" ><?php 
            
                     if($success==1)
                        {
                        echo "Registration Successful";
  
    
                        $_SESSION['success']=0;
    
                        }
            ?></div>
         <form method="post">
         
          <label for="exampleInputEmail1">Email address</label>
         
           <div class="form-group"> 
            
              <input class="form-control" name="lEmail" type="email" placeholder="Enter Email">  
               
           </div>
          
            <div class="form-group"> 
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" name="lPass" type="password" placeholder="Enter Password"> </div>
            
             <div class="mt-5">
               
            <button class="btn btn-dark" name="logInBtn" type="submit">Login</button>
                  <button type="submit" name="signUpBtn" class="btn btn-danger float-right">Sign Up</button>
           </div>
        </form>
       
       </div>
    </div>
    
    
    </div>
        <!-- Button to Open the Modal -->

    
</body>    
</html>