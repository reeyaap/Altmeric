<?php

require_once ('config.php');
require_once('header.php');


?>


<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>

<html xmlns='http://www.w3.org/1999/xhtml'>

<body>
<?php
    
$stmt=NULL;

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(!empty($_POST['category'])) {
        global $mysqli;
        $GLOBALS['stmt'] = $mysqli->prepare("SELECT itemName, price, imageURL, artId FROM items WHERE category=?");
        $GLOBALS['stmt']->bind_param("s", $_POST['category']);
        $GLOBALS['stmt']->execute();
        $GLOBALS['stmt']->bind_result($itemName, $price, $imageURL, $artId);
    }
}
else {
    global $mysqli;
    $GLOBALS['stmt'] = $mysqli->prepare("SELECT itemName, price, imageURL, artId FROM items");
    $GLOBALS['stmt']->execute();
    $GLOBALS['stmt']->bind_result($itemName,$price, $imageURL, $artId);
}
?>

<div style="float:left" width="10%">
<form action="" method="post">
    <br>
    Filter<br><br>
    Price:<br>
    Min: <input type="text" name="minPrice"><br>
    Max: <input type="text" name="maxPrice"><br>

    <br>

    Category<br>
    <input type="radio" name="category" value="modern">modern<br>
    <input type="radio" name="category" value="popart">popart<br>
    <input type="radio" name="category">abstract<br>
    <input type="radio" name="category">misc<br>

    <br>

<input type="submit" name="filter" value="submit">
</form>
</div>
<div id="container">
    <table>
        <tr>
            <?php
            $i=0;
            while($row = $GLOBALS['stmt']->fetch()) {
            $url = "style=\"background-image: url('images/".$imageURL."')\"";
            ?>
            <td>
                <div class="cell">

                    <div class="painting" <?php echo $url?>></div>
                    <div class="artName"><?php echo $itemName?><br><?php echo $price ?></div>
                    <form action="painting.php" method="POST">
                        <input type="hidden" name="cartItemName" value=<?php echo $itemName?>>
                        <input type="hidden" name="cartItemURL" value=<?php echo $imageURL?>>
                        <input type="hidden" name="cartItemPrice" value=<?php echo $price?>>
                        <input type="hidden" value="<?php echo $artId?>" name="artId">
                        <input type="submit" value="buy" class="buyButton">
                    </form>
                </div>
            </td>
            <?php
            $i+=1;
            if($i%4==0) {
            ?></tr><tr><?php
            }
            }
            ?>
        </tr>
    </table>
</div>
</div>
</body>

</html>










