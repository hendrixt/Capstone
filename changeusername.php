<?php
include 'connect.php';
include 'Functions/userInit.php';

$username = $_COOKIE["Username"];
$password = $_COOKIE["Password"];

if (empty($username) || empty($password)) {
  echo "<script> alert('You are not logged in.')</script>";
  header('Location: Login.php');
} else {
        if (isset($_POST['oldusername']) && isset($_POST['newusername']) && isset($_POST['password']))
    {
       
        if (authenticate($_POST['oldusername'], $_POST['password']))
        {
            if (changeUsername($_POST['oldusername'], $_POST['newusername'], $_POST['password'])) {
            echo "<script> alert('Change username function success')</script>";    
            setCookie("New Username", $_POST['username']);
            setCookie("Password", $_POST['password']);
            header('Location: Myprofile.php');
            } else {
                echo "<script> alert('Username change unsuccessful')</script>";
            }
        }
        else
        {
            echo "<script> alert('Username change unsuccessful')</script>";
        }
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">    
    <link rel="stylesheet" href="styles.css">
    
    <title>UALR-My Profile</title>
  </head>
  
  
   <!-- NAVBAR -->
   <nav class="navbar navbar-light" id="mainNav">
      <div class="container">
          <a href="#page-top"class="navbar-brand js-scroll-trigger"><img src="img/navualr.png"> My Profile</a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fa fa-bars"></i></button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href ="index.php" class="nav-link js-scroll-trigger">Home Page</a></li>
              <li class="nav-item"><a href ="Scholarship.php" class="nav-link js-scroll-trigger">Scholarship Opportunities</a></li>
              <li class="nav-item"><a href ="index.php" class="nav-link js-scroll-trigger">Housing Information</a></li>
              <li class="nav-item"><a href ="Contact.php" class="nav-link js-scroll-trigger">Contact</a></li>
              <li class="nav-item"><a href ="Userhome.php" class="nav-link js-scroll-trigger">User Home</a></li>
              <li class="nav-item"><a href ="Events & Clubs.php" class="nav-link js-scroll-trigger">Events & Clubs</a></li>
              <li class="nav-item"><a href ="CS Resources.php" class="nav-link js-scroll-trigger">CS Resources</a></li>
              <li class="nav-item"><a href ="Class List & Degree Plan.php" class="nav-link js-scroll-trigger">Class List & Degree Plan</a></li>
              </ul>
          </div><!-- END nabarResponsive -->
      </div><!-- END container -->
   </nav><!-- NAVBAR --> 
  
  
  <body>
    <div class ="container">
      <div class="logForm col-md-2 offset-md-5 text-center">
        <form action="changeusername.php" method="post">
          <input type="text" name="oldusername" class="form-control" placeholder="Old Username"><br>  
          <input type="text" name="newusername" class="form-control" placeholder="New Username"><br>
          <input type="password" name="password" class="form-control" placeholder="Password"><br>
          <input type="submit" value="Submit" class="buttons btn btn-lg btn-primary btn-block">
        </form>
      </div>
    </div>    
    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>