<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
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
    require "cart.php";
    session_start();
    $_SESSION['cname'] = $_POST['name'];
    $_SESSION['mobile'] = $_POST['mobile'];

    // $user_info = “INSERT INTO orders (name, mobile, quantityRegular, subtotalRegular, quantityCheese, subtototalCheese, total) VALUES ('$_POST[name]', '$_POST[mobile]', '$_POST[quantity_regular]', '$_POST[subtotal_regular]', '$_POST[quantity_cheese]', '$_POST[subtotal_chhese]', '$_POST[total]')”; if (!mysql_query($user_info, $connect)) { die('Error: ' . mysql_error()); }

    // echo “Your information was added to the database.”;

    // mysql_close($connect); 
    
    $query_insert = 'INSERT INTO orders (cname, mobile, quantityRegular, subtotalRegular, quantityCheese, subtotalCheese, total) VALUES ("'.$_SESSION['cname'].'","'.$_SESSION['mobile'].'","'.$_SESSION['quantity_regular'].'","'.$_SESSION['subtotal_regular'].'","'.$_SESSION['quantity_cheese'].'","'.$_SESSION['subtotal_cheese'].'","'.$_SESSION['order_total'].'");'; 
    $query_get_orderid = 'SELECT MAX orderId from orders';
    if($link->query($query_insert)=== TRUE){
        $msg = "<h2>New record created successfully.<br>Your order ID is: ".$link($query_get_orderid)."</h2>";
    }
    else{
        echo "Error: ". $query . "<br>" . $link->error;
    }
    $link->close();
    ?>


</body>
</html>