<?php
 include 'db_connect.php';  
 $showalert=false;
 $showerror=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
$inputslumname=$_POST["inputslumname"];
$inputvolunteername=$_POST["inputvolunteername"];
$inputvolunteerID=$_POST["inputvolunteerID"];
$inputdate=$_POST["inputdate"];
$inputclothes=$_POST["inputclothes"];
$inputblankets=$_POST["inputblankets"];
$inpututensils=$_POST["inpututensils"];
$inputmedicines=$_POST["inputmedicines"];
$inputbooks=$_POST["inputbooks"];
$inputED=$_POST["inputED"];
$inputOldAgeHelp=$_POST["inputOldAgeHelp"];

//$exists=false;
// $existsql="SELECT * FROM 'users' WHERE DiscordID='$DiscordID'";
// $result=mysqli_query($conn,$existsql);
// $numexistrows=mysqli_num_rows($result);
// if($numexistrows > 0){
//   $showaError="Username already exist";
// }
// else{
{
$sql="INSERT INTO `verification_form` (`inputslumname`, `inputvolunteername`, `inputdate`, `inputclothes`, `inputblankets`, `inpututensils`, `inputmedicines`, `inputbooks`, `inputED`, `inputOldAgeHelp`) VALUES ('$inputslumname', '$inputvolunteername', '$inputdate', '$inputclothes', '$inputblankets', '$inpututensils', '$inputmedicines','$PhoneNumber', '$inputbooks', '$inputED', '$inputOldAgeHelpd')";
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
<?php
    require 'navbar.php'
    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Verification !</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <link href="proj1.css" rel="stylesheet" />
  </head>
  <body>
    
    <div class="up_container">
    <div>
      <p>OFFICIAL OF THE SLUM PLEASE VERIFY PHILANTROPHY WORK DONE BY THE VOLUNTEER !!</p>
    </div>
    <div class="realslimshady">
        
    <form>
        <div class="form-group col-md-6">
            <label for="slumname">Slumname</label>
            <input type="text" class="form-control" name="inputslumname" placeholder="slumname">
          </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="username">Volunteer Name </label>
          <input type="text" class="form-control" name="inputvolunteername" placeholder="volunteer name">
        </div>
    </div>
      <div class="form-group col-md-6">
        <label for="username">VolunteerID </label>
        <input type="text" class="form-control" name="inputvolunteerID" placeholder="volunteerId">
      </div>
    
      <div class="form-group col-md-6">
        <label for="inputdate">Date</label>
        <input type="date" class="form-control" name="inputdate" placeholder="">
      </div>
      <div class="form-group col-md-6">
        <label for="inputclothes">Clothes</label>
        <input type="int " class="form-control" name="inputclothes" placeholder=" verify number of clothes donated">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputplankets">Blankets</label>
          <input type="int" class="form-control" name="inputblankets">
        </div>
        <div class="form-group col-md-6">
          <label for="inpututensils">Utensils</label>
          <input type="int" name="inpututensils" class="form-control" placeholder=" verify number of utensils donated">
            
          </input>
        </div>
        <div class="form-group col-md-6">
          <label for="inputmedicines">Medicines</label>
          <input type=" int " class="form-control" name="inputmedicines" placeholder=" verify number of medicines donated">
        </div>
      </div>
      <div class="form-group">
        <div class="form-group col-md-6">
          <label for="inputbooks">Books</label>
          <input type=" int " class="form-control" name="inputbooks" placeholder="number of books donated">
        </div>
      </div>
      <div class="form-group">
        <div class="form-group col-md-6">
          <label for="inputeduction">Education Drive </label>
          <input type=" int " class="form-control" name="inputED" placeholder="number of hours educated slum people">
        </div>
      </div>
      <div class="form-group">
        <div class="form-group col-md-6">
          <label for="inputOldAgeHelp"> Old Age Help</label>
          <input type=" int " class="form-control" name="inputOldAgeHelp" placeholder="number of hours helped old aged people in the slum">
        </div>
      </div>
      <br><br>
    
      <button type="submit" class="btn btn-primary" action="">Submit </button>
    </form>
  </div>
    </div>
  </div>
  </body>
</html>