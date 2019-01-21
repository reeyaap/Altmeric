<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>

<html xmlns='http://www.w3.org/1999/xhtml'>

<?php require_once('header.php');
?>

<body>

<div id="buttons">
    <form action="add.php">
        <input type="submit" name="add" value="Add a new art">
    </form>
</div>
<div id="display">
    <?php

  require_once ('config.php');

    $stmt = $mysqli->prepare("SELECT itemName, price, imageURL, artId FROM items WHERE owner=?");
    $stmt->bind_param("s", $_SESSION['email']);
    $stmt->execute();
    $stmt->bind_result($itemName,$price, $imageURL, $artId);
    ?>
    <div id="container">
        <table>
            <tr>

                <?php
                $i=0;
                while($row = $stmt->fetch()) {
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
                            </form>
                        <form action="update.php" method="POST">
                            <input type="hidden" name="artId" value=<?php echo $artId?>>
                            <input type="submit" value="Update" class="buyButton" name="update">
                        </form>
                        <form action="delete.php" method="POST">
                            <input type="hidden" name="artId" value=<?php echo $artId?>>
                            <input type="submit" value="Delete" class="buyButton">
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

