<?php
 include 'db_connect.php';  
 $showalert=false;
 $showerror=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
$Firstname=$_POST["Firstname"];
$Lastname=$_POST["Lastname"];
$DiscordID=$_POST["DiscordID"];
$dob=$_POST["dob"];
$City=$_POST["City"];
$ZIP=$_POST["ZIP"];
$State=$_POST["State"];
$PhoneNumber=$_POST["PhoneNumber"];
$Emailadress=$_POST["Emailadress"];
$password=$_POST["password"];
$cpassword=$_POST["cpassword"];
//$exists=false;
// $existsql="SELECT * FROM 'users' WHERE DiscordID='$DiscordID'";
// $result=mysqli_query($conn,$existsql);
// $numexistrows=mysqli_num_rows($result);
// if($numexistrows > 0){
//   $showaError="Username already exist";
// }
// else{
if($password==$cpassword){
$sql="INSERT INTO `users` (`Firstname`, `Lastname`, `DiscordID`, `dob`, `City`, `ZIP`, `State`, `PhoneNumber`, `Emailadress`, `password`, `cpassword`) VALUES ('$Firstname', '$Lastname', '$DiscordID', '$dob', '$City', '$ZIP', '$State','$PhoneNumber', '$Emailadress', '$password', '$cpassword')";
$result=mysqli_query($conn,$sql);
if($result){
  $showalert=true;
}

else{
  $showerror=true;
}
}
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
  </head>
  <body>
    <!-- <img src=https://images.unsplash.com/photo-1645423660753-74c9121fe6dc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1000&q=80 alt="jiit image"> -->
    <?php
    require 'navbar.php'
    ?>
    <?php
    if($showalert){
    echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong> AWWW YEAH!!</strong>Your account is created.Now you can Login.
  <hr>

</div>';
}
if($showerror){
  echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong> RETRY!!</strong>Password do not match.
<hr>

</div>';}
?>
    <div class="container">
    <h1 class="text-center">Signup</h1>
  
    <form action="/proj/signup.php" method="post">
    <div class="row ">
    <div class="col ">
    <label for="inputFirstName">First Name</label>
      <input type="text" required class="form-control" name="Firstname">
    </div>
    <div class="col mb-3" >
    <label for="inputLastName">Last Name</label>
      <input type="text" required class="form-control" name="Lastname">
    </div>
  </div>
  <div class="form-row ">
  </div>
  <div class="row ">
    <div class="col ">
    <label for="inputAddress">Discord ID</label>
    <input type="text" required  class="form-control" name="DiscordID" id="inputAddress">
    </div>
    <div class="col mb-3" >
    <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker" inline="true">
    <label for="example">Enter your Date of Birth</label>
  <input placeholder="Select date" type="date" id="example" class="form-control" name="dob">
  <i class="fas fa-calendar input-prefix"></i>
</div>
    </div>
  </div>
  <div class="form-row ">
  </div>
  <div class="row md-4 ">
    <div class="col md-4">
    <label for="City">City</label>
      <input type="text" required  class="form-control" id="inputCity" name="City" >
    </div>
    <div class="col mb-3" >
    <label for="zip">ZIP Code</label>
    <input type="text" class="form-control" id="inputZip" name="ZIP">
    </div>
  </div>
  <div class="row md-4 ">
    <div class="col md-4">
  <div class="form-group mb-3">
      <label for="inputState">State</label>
      <select id="inputState" required class="form-control" name="State">
        <option selected>Choose...</option>
        <option value="Andhra Pradesh	">Andhra Pradesh	</option>
        <option value="Arunachal	Pradesh	">Arunachal	Pradesh	</option>
        <option value="Assam		">	Assam		</option>
        <option value="Bihar	">	Bihar		</option>
        <option value="Chhattisgarh			">		Chhattisgarh		</option>
        <option value="Arunachal	Pradesh	">		Goa			</option>
        <option value="Arunachal	Pradesh	">		Gujarat			</option>
        <option value="Arunachal	Pradesh	">			Haryana			</option>
        <option value="Arunachal	Pradesh	">			Himachal Pradesh	</option>
        <option value="Arunachal	Pradesh	">			  Karnataka		</option>
        <option value="Arunachal	Pradesh	">		  Jharkhand		</option>
        <option value="Arunachal	Pradesh	">				Kerala		</option>
        <option value="Arunachal	Pradesh	">		Madhya Pradesh		</option>
        <option value="Arunachal	Pradesh	">				Maharashtra		</option>
        <option value="Arunachal	Pradesh	">			Manipur		</option>
        <option value="Arunachal	Pradesh	">			Meghalaya		</option>
        <option value="Arunachal	Pradesh	">			Mizoram	</option>
        <option value="Arunachal	Pradesh	">				Nagaland	</option>
        <option value="Arunachal	Pradesh	">			Odisha		</option>
        <option value="Arunachal	Pradesh	">			Punjab	</option>
        <option value="Arunachal	Pradesh	">				Rajasthan		</option>
        <option value="Arunachal	Pradesh	">				Sikkim	</option>
        <option value="Arunachal	Pradesh	">			Tamil Nadu	</option>
        <option value="Arunachal	Pradesh	">			Telangana		</option>
        <option value="Arunachal	Pradesh	">				Tripura		</option>
        <option value="Uttar Pradesh			">				Uttar Pradesh		</option>
        <option value="Uttarakhand">			Uttarakhand		</option>
        <option value="West Bengal	">				West Bengal>	</option>
</option>
      </select>
    </div>
    </div>
    <div class="col mb-3" >
    <label for="PhoneNumber" class="form-label">Phone Number</label>
    <input type="number" required  class="form-control" id="inputPhoneNumber"  name="PhoneNumber">
    </div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" required  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Emailadress">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="Password" class="form-label">Password</label>
    <input type="password" required  class="form-control" id="exampleInputPassword" name="password">
  </div>
  <div class="mb-3">
    <label for="confirmPassword" class="form-label">Confirm Password</label>
    <input type="password" required  class="form-control" id="confirmPassword1" name="cpassword">
    <div id="cpassword" class="form-text">Make sure to enter the same Password.</div>

  </div>
  <div class="mb-3 md-4">
    <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1">-->
    <label class="form-have-account-login" for="havingaccount">Already have Account? </label> 
    <a href="http://localhost/proj/login.php">Login</a>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>