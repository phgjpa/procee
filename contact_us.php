<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Contact Us</title>

    <link rel="stylesheet" href="resources/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="resources/font-awesome/css/font-awesome.min.css" />
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merienda+One">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="resources/css/custom.css">
    
    <!-- JS, Popper.js, and jQuery -->
    <script src="resources/jquery/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="resources/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <header>
    <nav class="navbar row navbar-expand-xl navbar-light bg-light">
      <a href="#" class="navbar-brand"><img src="resources/images/logo.png" alt="Logo"></i>Dalaguete</a>
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
<!-- Collection of nav links, forms, and other content for toggling -->
      <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
        <div class="navbar-nav col-md-8 justify-content-center">
          <a href="index.php" class="nav-item nav-link">Home</a>
          <a href="shop.php" class="nav-item nav-link">Buy Now</a>
          <a href="contact_us.php" class="nav-item nav-link active">Contact Us</a>
          <a href="about.php" class="nav-item nav-link">About Us</a>
        </div>
        <form class="navbar-form form-inline float-md-right col-md-4">
          <div class="input-group search-box">								
            <input type="text" id="search" class="form-control" placeholder="Enter Order ID to search">
            <span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
          </div>
        </form>
      </div>
    </nav>
  </header>
  <main role="main">
    <div id="after_submit" class="container col-md-6 justify-content-center">
      <form id="justify-content-center" action="submit.php" method="POST" enctype="multipart/form-data">
        <div class="row">
          <label class="required col-md-3" for="name">Name EDIT NA:</label>
          <input id="name" class="input col-md-9" name="name" type="text" value="" size="30">
          <span id="name_validation" class="error_message"></span>
        </div>
        <div class="row">
          <label class="required col-md-3" for="email">Email  :</label>
          <input id="email" class="input col-md-9" name="email" type="text" value="" size="30">
          <span id="email_validation" class="error_message"></span>
        </div>
        <div class="row">
          <label class="required col-md-3" for="message">Send Message  :</label>
          <textarea id="message" class="input col-md-9" name="message" rows="7" cols="30"></textarea>
          <span id="message_validation" class="error_message"></span>
        </div>
        <div class="row col-md-3">
          
        </div>
        <div class="row justify-content-center col-md-9 float-right">
          <input id="submit_button" type="submit" value="Send email">
        </div>      
      </form>
    </div>
  </main>
  <footer>Copyright 2020. Ma'am Procee's Torta</footer>
</body>
</html>