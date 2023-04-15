<?php
if (isset($_SESSION['loggedin'])&&$_SESSION['loggedin']==true){
$loggedin=true;
}
else{
  $loggedin=false;

}


echo '<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/proj"><strong><h1>PHILANTHROPIST</h1></strong></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link"href="/bitproj/home.php">Home<span class=""sr-only></a>
        </li>';
        if(!$loggedin){
       echo ' <li class="nav-item">
          <a class="nav-link" href="/bitproj/login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/bitproj/signup.php">Signup</a>
        </li> ';}
        
        
        if($loggedin){
          echo 
         ' <li class="nav-item">
          <a class="nav-link" href="/bitproj/profile.php">Query/Complaint</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/proj/logout.php">Logout</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="/bitproj/slums.php">Donate here</a>
        </li>';
          }
  
     echo ' </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>';
?>
