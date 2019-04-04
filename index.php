<?php
$username = $_COOKIE["Username"];
$password = $_COOKIE["Password"];


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
     
    <title>UALR-Computer Science</title>
    

  </head>
  
  <!-- test -->

  
  
  <body>
   
   
      <!-- NAVBAR -->
   <nav class="navbar navbar-light" id="mainNav">
      <div class="container">
          <a href="#page-top"class="navbar-brand js-scroll-trigger"><img src="img/navualr.png"> Computer Science</a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fa fa-bars"></i></button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href ="Scholarship.php" class="nav-link js-scroll-trigger">Scholarship Opportunities</a></li>
              <li class="nav-item"><a href ="Housing.php" class="nav-link js-scroll-trigger">Housing Information</a></li>
              <li class="nav-item"><a href ="Login.php" class="nav-link js-scroll-trigger">Register/Login</a></li>
               <li class="nav-item"><a href ="Myprofile.php" class="nav-link js-scroll-trigger">My Profile</a></li>
                <li class="nav-item"><a href ="logout.php" class="nav-link js-scroll-trigger">Log out</a></li>
              <li class="nav-item"><a href ="Contact.php" class="nav-link js-scroll-trigger">Contact</a></li>
              </ul>
          </div><!-- END nabarResponsive -->
      </div><!-- END container -->
   </nav>
   <!-- NAVBAR --> 
   
       <!-- MASTHEAD -->
    <header class="masthead">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h1 class="brand-heading text-drop">UALR <span class="display-1 text-warning">CS</span></h1>
                        <p class="intro-text tag-line">College of Engineering and Information Technology (EIT) rated in the top 50 most innovative Computer Science programs in the nation. </p>
                        <a href="#bubblelinks" class="btn btn-circle js-scroll-trigger">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div><!-- end col-lg-8 -->
                </div><!-- end row -->
            </div><!-- end row -->
        </div><!-- end intro-body -->
    </header>
    <!-- END MASTHEAD -->
    

   <section id="bubblelinks">
    <div class="container">
        <div class="row mbr-justify-content-center">
            <div class ="row">
                <div class="col-lg-6 d-flex">
                    <a href ="Scholarship.php">
                        <div class="wrap">
                            <div class="ico-wrap">
                                <span class="mbr-iconfont fa-graduation-cap fa"></span>
                            </div>
                            <div class="text-wrap vcenter">
                                <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Scholarship <span>Information</span></h2>
                                <p class="mbr-fonts-style text1 mbr-text display-6">University of Arkansas Little Rock offers public and private scholarship opportunities for tutition and housing assistance.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 d-flex">
                    <a href ="Housing.php">
                        <div class="wrap">
                            <div class="ico-wrap">
                                <span class="mbr-iconfont fa-home  fa"></span>
                            </div>
                            <div class="text-wrap vcenter">
                                <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5"> University
                                    <span>Housing</span>
                                </h2>
                                <p class="mbr-fonts-style text1 mbr-text display-6">Living on campus at UA Little Rock is an opportunity to be in the middle of it all. View our housing options and application process today!  </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class ="row">
                <div class="col-lg-6 mbr-col-md-10">
                        <a href ="Login.php">
                            <div class="wrap">
                                
                                <div class="ico-wrap">
                                    <span class="mbr-iconfont fa-address-card fa"></span>
                                </div>
                                <div class="text-wrap vcenter">
                                    <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Register
                                        <span>or Login</span>
                                    </h2>
                                    <p class="mbr-fonts-style text1 mbr-text display-6">Register to gain exclusive access to computer science resources, university events, degree plans, and local interships or job openings. </p>
                                </div>
                            </div>
                        </a>
                </div>
                <div class="col-lg-6 mbr-col-md-10">
                    <a href = "Contact.php">
                        <div class="wrap">
                            <div class="ico-wrap">
                                <span class="mbr-iconfont fa-phone fa"></span>
                            </div>
                            <div class="text-wrap vcenter">
                                <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Contact <span>Us</span></h2>
                                <p class="mbr-fonts-style text1 mbr-text display-6">Do you have enrollment questions or want to speak to a university representive? Contact information can be found here.  </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


 <div class="card-deck">
  <div class="card">
    <img src="img/data.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Sector Job Growth</h5>
      <p class="card-text">The computer science industry is projected to grow faster than other industries for the next 10 years. Software development, cyber security and other CS Careers have growth outlooks exceeding 20 percent.</p>
    </div>

  </div>
  <div class="card">
    <img src="img/career.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Diverse Career Options</h5>
      <p class="card-text">Software developer, database administrator, artificial intelligence, web developer, and game programming are only a few of the career choices you have with an education in Computer Science. </p>
    </div>
  </div>
  <div class="card">
    <img src="img/classroom.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Creation Driven</h5>
      <p class="card-text">Problem solving, creation, and innovation are the core concepts of Computer Science. Learn to utilize computer systems to solve complex mathematics, design web applications, or bring new ideas to life. </p>
    </div>   
  </div>
</div> 
   
   
   
   
<div class="card-fluid ">
  <div class="row no-gutters">
    <div class="col-md-6 col-sm-12 col align-self-center ">
      <img src="img/eit-building.jpg" class="card-img" alt="...">
    </div>
    <div class="col-md-6 col align-self-center">
      <div class="card-body">
        <h2 class="card-title">Study Computer Science @ EIT</h2>
        <p class="card-text">The Donaghey College of Engineering and Information Technology (EIT) is a key partner with industry, research, and education in the capital region of Little Rock, Arkansas. EIT is a vital part of the eco-system of the region and is an active partner with its many constituents within the state and the region. We are a metropolitan university positioned in a community and region that is innovative and is collaborative with engineering and IT professionals. Now is an exciting time to be a part of UALR EIT.</p>
          <button type="button" class="btn btn-primary btn-lg btn-block">Click for Enrollment Information</button>
      </div>
    </div>
  </div>
</div>    
   
   
   
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      </body>
      
</html>



<!-- test -->
