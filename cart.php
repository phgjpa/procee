<?php
    require "config.php";

    if( isset( $_SESSION['counter'] ) ) {
        $_SESSION['counter'] += 1;
     }else {
        $_SESSION['counter'] = 1;
     }
      
     $msg = "You have visited this page ".  $_SESSION['counter'];
     $msg .= "in this session.";


    function insert_data(){
        $query = 'INSERT INTO orders (cname, mobile, quantityRegular, subtotalRegular, quantityCheese, subtototalCheese, total) VALUES ("'.$GLOBALS['cname'].'","'.$GLOBALS['mobile'].'","'.$GLOBALS['quantity_regular'].'","'.$GLOBALS['subtotal_regular'].'","'.$GLOBALS['quantity_cheese'].'","'.$GLOBALS['subtotal_cheese'].'","'.$GLOBALS['order_total'].'");'; 
        if($link->query($query)=== TRUE){
            echo "<h2>New record created successfully<?>";
            unset($_POST);
            unset($_SESSION);
        }
        else{
            echo "Error: ". $query . "<br>" . $link->error;
        }
        $link->close();
    }
?>