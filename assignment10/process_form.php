<!DOCTYPE html>
<html>
<head>
	<title>Your Order</title>
</head>
<body>
    <h1>Your Order</h1>
    <?php 
        error_reporting(-1);
        ini_set('display_errors', 'On');
        set_error_handler("var_dump");

        $price0 = $_POST["quan0"] * 4.5;
        $price1 = $_POST["quan1"] * 6.25;
        $price2 = $_POST["quan2"] * 5.25;
        $price3 = $_POST["quan3"] * 6.5;
        $price4 = $_POST["quan4"] * 2.35;
    ?>
    <p>
       <?php echo $_POST["quan0"]; ?> Chicken Chop Suey 
       ($<?php echo number_format($price0, 2, '.', ''); ?>)
    </p>
    <p>
    	<?php echo $_POST["quan1"]; ?> Sweet and Sour Pork
        ($<?php echo number_format($price1, 2, '.', ''); ?>)
    </p>
    <p>
    	<?php echo $_POST["quan2"]; ?> Shrimp Lo Mein
        ($<?php echo number_format($price2, 2, '.', ''); ?>)
    </p>
    <p>
    	<?php echo $_POST["quan3"]; ?> Moo Shi Chicken
        ($<?php echo number_format($price3, 2, '.', ''); ?>)
    </p>
    <p>
    	<?php echo $_POST["quan4"]; ?> Fried Rice
        ($<?php echo number_format($price4, 2, '.', ''); ?>)
    </p>

    <br/>

    <h3>Subtotal   : $<?php echo number_format($_POST["subtotal"], 2, '.', '');?></h3>
    <h3>Tax (6.25%): $<?php echo number_format($_POST["tax"], 2, '.', '');?></h3>
    <h3>Total      : $<?php echo number_format($_POST["total"], 2, '.', '');?></h3>
    <p><?php echo $_POST["receive"];?></p>

    <?php
        $msg = "Hey, Mx. " . $_POST["lname"] . "!\n\n" . 
               "Thanks for your order! Here are the details:\n\n" .
               "\tSubtotal: $" . $_POST["subtotal"] .
               "\n\tTax: $" . $_POST["tax"] . "\n\tTotal: $" . $_POST["total"] .
               "\n\t" . $_POST["receive"] .
               "\n\nThe Team at Jade Delight";
        $subject = "Your Order";
        $from = "jade.delight@jade.com";
        $headers = "From:" . $from;

        mail($_POST["email"],$subject,$msg,$headers);
    ?>


</body>
</html>