<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ma'am Procee's Torta</title>

    <link rel="stylesheet" href="resources/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="resources/font-awesome/css/font-awesome.min.css" />
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merienda+One">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="resources/css/custom.css">
    <link rel="stylesheet" href="resources/css/homepage.css">
    
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="resources/bootstrap/js/bootstrap.bundle.min.js"></script>

</head>
<body>
  <?php
  // Initialize the session
  session_start();
  
  // Check if the user is logged in, if not then redirect him to login page
  if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
      $_SESSION["username"] = "Login/Signup";
      exit;
  }
  ?>
  <header class="homepage">
    <nav class="navbar navbar-expand-xl navbar-light bg-light">
      <a href="#" class="navbar-brand"><img src="resources/images/logo.png" alt="Logo"></i>Dalaguete</a>
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
<!-- Collection of nav links, forms, and other content for toggling -->
      <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
        <div class="navbar-nav">
          <a href="index.html" class="nav-item nav-link active">Home</a>
          <a href="#" class="nav-item nav-link">Buy Now</a>
          <a href="about.html" class="nav-item nav-link">About</a>
          <a href="contact_us.html" class="nav-item nav-link">Contact Us</a>
        </div>
        <form class="navbar-form form-inline">
          <div class="input-group search-box">								
            <input type="text" id="search" class="form-control" placeholder="Search by Name">
            <span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
          </div>
        </form>
        <div class="navbar-nav ml-auto">
          <a href="#" class="nav-item nav-link notifications"><i class="fa fa-bell-o"></i><span class="badge">1</span></a>
          <a href="#" class="nav-item nav-link messages"><i class="fa fa-envelope-o"></i><span class="badge">10</span></a></a>
          <div class="nav-item dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action"><i class="fa fa-user" aria-hidden="true"></i> Login/Signup <b class="caret"></b></a>
            <div class="dropdown-menu">
              <a href="#" class="dropdown-item"><i class="fa fa-user-o"></i> Profile</a></a>
              <a href="#" class="dropdown-item"><i class="fa fa-calendar-o"></i> Calendar</a></a>
              <a href="#" class="dropdown-item"><i class="fa fa-sliders"></i> Settings</a></a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item"><i class="material-icons">&#xE8AC;</i> Logout</a></a>
            </div> 
          </div>
        </div>
      </div>
    </nav>
    <div class="card head col-md-4">
      <div class="card-body">
        <h1 class="card-title landing">It tastes home</h1>
        <h3 class="card-subtitle mb-2 text-muted">Wherever you are from</h3>
        <h6 class="card-text">Have a taste of Dalaguete's pride. Our very own delicacy is made with love. Perfect for pasalubong for your family and friends. </h6>
      </div>
      <button type = "button"> Buy Now!
      </button>
    </div>
  </header>
  <main role="main">
    <div class="row justify-content-md-center">
      <div class="card index col-md-3">
        <div class="card-body">
          <h2 class="card-title">Eggs straight from the farm</h2>
          <h6 class="card-text">Have a taste of Dalaguete's pride. Our very own delicacy is made with love. Perfect for pasalubong for your family and friends. </h6>
        </div>
      </div>
      <div class="card index col-md-3">
        <div class="card-body">
          <h2 class="card-title">Generations of chefs</h2>
          <h6 class="card-text">A delicious recipe passed through generations. Have a taste of the recipe that withstood time.</h6>
        </div>
      </div>
      <div class="card index col-md-3">
        <div class="card-body">
          <h2 class="card-title">A friendly face awaits you</h2>
          <h6 class="card-text">We take pride of our personel's hospitality in assisting our customers. We want you to feel at home.</h6>
        </div>
      </div>
    </div>
  </main>
  <section class="sitemap">
    <div class="row justify-content-md-center">
      <div class="col-md-6 banner">
        <img src="resources/images/banner.PNG" width=100% frameborder="0" style="border:0; height: -webkit-fill-available;" alt="banner">
      </div>
      <div class="col-md-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15727.844972748024!2d123.5329932!3d9.7693469!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33abb8d23ab3382b%3A0x7e7a5b3fec9cef90!2sMa&#39;am%20Procee&#39;s%20Torta!5e0!3m2!1sen!2sph!4v1607746216000!5m2!1sen!2sph" width=100% frameborder="0" style="border:0; height: -webkit-fill-available;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
    </div>
  </section>
  <footer>Copyright 2020. Ma'am Procee's Torta</footer>
</body>
</html>