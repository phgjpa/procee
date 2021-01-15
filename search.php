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
        <?php
        require 'config.php';
        if(ISSET($_REQUEST['id'])){
        $query = mysqli_query($conn, "SELECT * FROM `orders` WHERE `orderId` LIKE '$_REQUEST[id]'") or die(mysqli_error());
        $fetch = mysqli_fetch_array($query);
        ?>
        <h3><?php echo $fetch['orderId']?></h3>
        <p><?php echo nl2br($fetch['data'])?></p>
        <?php
        }
        ?>
    </main>
    <footer>Copyright 2020. Ma'am Procee's Torta</footer>
</body>
</html>