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
    <link rel="stylesheet" href="resources/css/contact_us.css">
    
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
  <section id="cover" class="min-vh-100">
    <div id="cover-caption">
      <div class="container">
        <div class="row text-white">
          <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
            <h1 class="display-4 py-2 text-truncate">Contact Us</h1>
            <div class="px-2">
              <form action="" class="justify-content-center"> 
                <div class="form-group">
                  <label class="sr-only">Name :</label>
                  <input type="text" class="form-control" placeholder="Your Name">
                </div>
                <div class="form-group">
                  <label class="sr-only">Email :</label>
                  <input type="text" class="form-control" placeholder="example@gmail.com">
                </div>
                <div class="form-group">
                  <label for="comment">Your Message :</label>
                  <textarea class="form-control" rows="5" id="comment"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-lg">Send Your Message</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
  <footer>Copyright 2020. Ma'am Procee's Torta</footer>
</body>
</html>