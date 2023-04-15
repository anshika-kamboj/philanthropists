

<?php
    require 'navbar.php'
    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Donation !</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <link  href="proj1.css" rel="stylesheet"/>
  </head>
  <body>
    
    <div class="up_container">
    <div>
      <p>HEY USER PLEASE FILL OUT THE ITEMS YOU ARE GOING TO DONATE !!</p>
    </div>
    <div class="realslimshady">
    <form>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="username">Username </label>
          <input type="text" class="form-control" name="inputusername" placeholder="username">
        </div>
        <div class="form-group col-md-6">
          <label for="slumname">SlumName</label>
          <input type="text" class="form-control" name="inputslumname" placeholder="slumname">
        </div>
      </div>
      <div class="form-group col-md-6">
        <label for="inputdate">Date</label>
        <input type="date" class="form-control" name="inputdate" placeholder="">
      </div>
      <div class="form-group col-md-6">
        <label for="inputclothes">Clothes</label>
        <input type="int " class="form-control" name="inputclothes" placeholder=" number of clothes donated">
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
          <input type=" int " class="form-control" name="inputbooks" placeholder="  verify number of books donated">
        </div>
      </div>
      <div class="form-group">
        <div class="form-group col-md-6">
          <label for="inputeducation">Education Drive </label>
          <input type=" int " class="form-control" name="inputeducation" placeholder=" verify  number of hours educated slum people">
        </div>
      </div>
      <div class="form-group">
        <div class="form-group col-md-6">
          <label for="inputOldAgeHelp"> Old Age Help</label>
          <input type=" int " class="form-control" name="inputOldAgeHelp" placeholder=" verify number of hours helped old aged people in the slum">
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