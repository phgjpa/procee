$(document).ready(function(){
    const checkout = document.getElementById("checkout");
    
    $("#quantity_regular").change(function(){
        $baseprice = 20;
        $quantity = $("#quantity_regular").val();
        $("#subtotal_regular").text($baseprice*$quantity);
        verify();
        calcutate_total();
    });
    $("#quantity_cheese").change(function(){
        $baseprice = 25;
        $quantity = $("#quantity_cheese").val();
        $("#subtotal_cheese").text($baseprice*$quantity);
        verify();
        calcutate_total();
    });
    function calcutate_total(){
        $x = parseInt($("#subtotal_regular").text());
        $y = parseInt($("#subtotal_cheese").text());
        
        $("#total").text($x+$y);
        $("#total-hidden").val($x+$y);
    }
    function verify(){
        if($("#quantity_regular").val()>0 || $("#quantity_cheese").val()>0 ){
            checkout.disabled = false;
        }else{
            checkout.disabled = true;
        }
    }
});