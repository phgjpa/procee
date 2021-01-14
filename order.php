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
            <form class="navbar-form form-inline float-md-right col-md-4" style="margin: auto;">
            <div class="input-group search-box">								
                <input type="text" id="search" class="form-control" placeholder="Enter Order ID to search">
                <span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
            </div>
            </form>
        </div>
        </nav>
    </header>

    <main role="main"> 

        <?php  
            require "cart.php";
            session_start();
            $_SESSION['cname'] = $_POST['name'];
            $_SESSION['mobile'] = $_POST['mobile'];

            // $user_info = “INSERT INTO orders (name, mobile, quantityRegular, subtotalRegular, quantityCheese, subtototalCheese, total) VALUES ('$_POST[name]', '$_POST[mobile]', '$_POST[quantity_regular]', '$_POST[subtotal_regular]', '$_POST[quantity_cheese]', '$_POST[subtotal_chhese]', '$_POST[total]')”; if (!mysql_query($user_info, $connect)) { die('Error: ' . mysql_error()); }

            // echo “Your information was added to the database.”;

            
            $query_insert = 'INSERT INTO orders (cname, mobile, quantityRegular, subtotalRegular, quantityCheese, subtotalCheese, total) VALUES ("'.$_SESSION['cname'].'","'.$_SESSION['mobile'].'","'.$_SESSION['quantity_regular'].'","'.$_SESSION['subtotal_regular'].'","'.$_SESSION['quantity_cheese'].'","'.$_SESSION['subtotal_cheese'].'","'.$_SESSION['order_total'].'");'; 
            // $query_get_orderid = 'SELECT MAX orderId from orders';
            // $result = $link->query($query_get_orderid);
            if($link->query($query_insert)=== TRUE){
                $last_id = $link->insert_id;
                echo "<h2>New record created successfully. Last inserted ID is: " . $last_id."</h2>";
            }
            else{
                echo "Error: ". $query . "<br>" . $link->error;
            }
            $link->close();

        ?>

    </main>

</body>
</html>