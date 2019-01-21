<?php 
require_once('header.php');
?>

<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
    <link rel="stylesheet" type="text/css" href="painting.css">
</head>
<body>
<div id="display">
    <?php

  require_once ('config.php');
    global $mysqli;
    $stmt = $mysqli->prepare("SELECT itemName, price, imageURL, description, author FROM items WHERE artId=?");
    
    $artId = $_POST['artId'];
    $stmt->bind_param("i", $_POST['artId']);
    $stmt->execute();
    $stmt->bind_result($itemName,$price, $imageURL, $description, $author);
    $stmt->fetch();
    $url = "style=\"background-image: url('images/".$imageURL."')\"";
    ?>
    
       <div id="bottom">
        <div id="side"></div>
        <div id="art" <?php echo $url?>></div>
        <div id="properties">
            <h1><?php echo $itemName?></h1>
            
            <h3 id="author">by: <?php echo $author?></h3>
            <h3>Price: $<?php echo $price?></h3>
            <h3>Description:</h3>
            <?php echo $description?>
            <br><br>
            <form action="cart.php" method="post"><input type="submit" name="add" value="add">
            <input type="hidden" name="cartItemId" value=<?php echo $artId?>>
                <input type="hidden" name="cartItemName" value=<?php echo $itemName?>>
                <input type="hidden" name="cartItemURL" value=<?php echo $imageURL?>>
                <input type="hidden" name="cartItemPrice" value=<?php echo $price?>>
            </form>
        </div>
        </div>
    </div> 
    </div>
</body>

</html>

