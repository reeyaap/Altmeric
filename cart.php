<?php
require_once ('config.php');
require_once ('header.php');

if($_SESSION['firstName']==NULL) {
    header("location: index.php");
}


if($_SERVER["REQUEST_METHOD"] == "POST") {
	if((!empty($_SESSION['cart'])) && (!empty($_SESSION['cartNames'])) && (!empty($_SESSION['cartURLs'])) && (!empty($_SESSION['cartPrices']))) {
	}
	else {
		$_SESSION['cart'] = array();
		$_SESSION['cartNames'] = array();
		$_SESSION['cartURLs'] = array();
		$_SESSION['cartPrices'] = array();
	}
	array_push($_SESSION['cart'], $_POST['cartItemId']);
	array_push($_SESSION['cartNames'], $_POST['cartItemName']);
	array_push($_SESSION['cartURLs'], $_POST['cartItemURL']);
	array_push($_SESSION['cartPrices'], $_POST['cartItemPrice']);
	foreach($_SESSION['cart'] as $result) {
    echo $result, '<br>';
}

}

?>


<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<link rel="stylesheet" type="text/css" href="cart.css">
<body>

<div id = "displayCart">
        <?php
        $i=0;
        foreach($_SESSION['cart'] as $result) {
            $url = "style=\"background-image: url('images/".$_SESSION['cartURLs'][$i]."')\"";
            ?><div class="cartItem">
                <div class="cartItemPhoto" <?php echo $url?>></div>
                <div class="cartItemPrice"><?php echo $_SESSION['cartNames'][$i]?><br><?php echo $_SESSION['cartPrices'][$i]?></div>
            </div>

        <?php $i+=1; }
        ?>
        <div id="total"><h3>Total Price: $<?php echo array_sum($_SESSION['cartPrices'])?></h3></div>
    </div>


<body>
</html>
