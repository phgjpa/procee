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
    <link rel="stylesheet" href="resources/css/checkout.css">
    
    <!-- JS, Popper.js, and jQuery -->
    <script src="resources/jquery/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="resources/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="resources/js/shop.js"></script>
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
            <a href="shop.php" class="nav-item nav-link active">Buy Now</a>
            <a href="contact_us.php" class="nav-item nav-link">Contact Us</a>
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
        
      
        
        <section class="col-md-6 mx-auto">
          <div class="row justify-content-center">
            <h2>CHECKOUT</h2>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <p>Note! You will receive a call from our team for further confirmation of your order.</p>
            </div>
            <div class="col-md-1"></div>
          </div>
          <form action="" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="row justify-content-center">
              <div class="col-md-2"></div>
              <div class="row col-md-8 form-proper">
                <div class="col-2">
                    <p>Name</p>
                </div>
                <div class="col-10">
                    <input type="text" id="name" name="name" placeholder="Type here">
                </div>
              </div>
              <div class="col-md-2"></div>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-2"></div>
              <div class="row col-md-8 form-proper">
                <div class="col-2">
                    <p>Mobile</p>
                </div>
                <div class="col-10">
                    <input type="text" id="mobile" name="mobile" placeholder="Type here">
                </div>
              </div>
              <div class="col-md-2"></div>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-2"></div>
              <div class="row col-md-8 form-proper">
                <div class="col-4">
                    <p>Regular Torta</p>
                </div>
                <div class="col-8">
                    <input type="text" id="mobile" name="mobile" disabled value="<?php echo $_POST["quantity_regular"]; ?>">
                </div>
              </div>
              <div class="col-md-2"></div>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-2"></div>
              <div class="row col-md-8 form-proper">
                <div class="col-4">
                    <p>Cheesy Torta</p>
                </div>
                <div class="col-8">
                    <input type="text" id="mobile" name="mobile" disabled value="<?php echo $_POST["quantity_cheese"]; ?>">
                </div>
              </div>
              <div class="col-md-2"></div>
            </div>



            <div class="row justify-content-center">
                <div class="col-md-2"></div>
                <div class="row col-md-8">
                    <div class="col-md-3">
                        <input type="button" value="cancel" onclick="window.location.href='shop.php';">
                    </div>
                    <div class="row col-md-6 total_box">
                        <div class="col-md-4">
                        <h5 style="float: right;">Total</h5>
                        </div>
                        <div class="col-md-5">
                        <h4 id="total" style="float: right;"><?php echo $_POST["total"] ?></h4>
                        </div>
                        <div class="col-md-3">
                        <p style="float: left;">Php</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <input type="submit" id="checkout" value="CHECKOUT" style="width: fit-content;">  
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>



          </form>
          
        </section>
    </main>
    <footer>Copyright 2020. Ma'am Procee's Torta</footer>
</body>
</html>