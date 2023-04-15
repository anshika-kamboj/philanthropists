<?php
 include 'db_connect.php';  
 $login =false;
 $showerror=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
$EnrollmentNumber=$_POST["EnrollmentNumber"];
$password=$_POST["password"];
$sql="select * from users where EnrollmentNumber='$EnrollmentNumber' and password='$password'";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
if($EnrollmentNumber=='' || $password=''){
  $showerror=true;
}
if($num==1){
  $login=true;
  session_start();
  $_SESSION['loggedin']=true;
  $_SESSION['PhoneNumber']=$PhoneNumber;
  header("location:home.php");
}
else{
  $showerror=true;
  $login=false;
}
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <?php
    require 'navbar.php'
    ?>
  <body>
    <!-- <img src=https://images.unsplash.com/photo-1645423660753-74c9121fe6dc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1000&q=80 alt="jiit image"> -->
    
    <?php
    if($login){
    echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>WELCOME AGAIN!!</strong>
  <hr>
  <button type="button" class="close" data-dismiss="alert" aria-label="close">
<span aria-hidden="true">&times;</span>
</button>
</div>';
}
if($showerror){
  echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong> RETRY!!</strong>Invalid Credentials.
<hr>
<button type="button" class="close" data-dismiss="alert" aria-label="close">
<span aria-hidden="true">&times;</span>
</button>
</div>';}
?>
    <div class="container">
    <h1 class="text-center">Login</h1>
  
    <form action="/proj/login.php" method="post">
  <div class="row ">
    <div class="col mb-3 ">
    <label for="inputAddress">PhoneNumber</label>
    <input type="text" class="form-control" name="PhoneNumber" id="inputAddress">
    </div>
    </div>

  
  <!-- <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Emailadress">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div> -->
  <div class="mb-3">
    <label for="Password" class="form-label">Password</label>
    <input type="password" class="form-control"  id="exampleInputPassword" name="password">
  </div>
 
  <div class="mb-3 md-4">
    <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1">-->
    <label class="form-have-account-login" for="havingaccount">Don't have an Account?</label> 
    <a href="/bitproj/signup.php">Signup</a>

   
    <label class="form-have-account-login" for="havingaccount"><b> | </b>Is official here? </label> 
    <a href="login-official.php">Login-official</a>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@widgetbot/crate@3" async defer>
  new Crate({
    server: '1096673971145035800',
    channel: '1096673972000653344'
  })
</script>  </body>
</html>