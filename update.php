<?php 

require_once('config.php');

	global $mysqli;
	$stmt = $mysqli->prepare("SELECT itemName, price, author, category, description, imageURL FROM items WHERE artId=?");
    $stmt->bind_param("i", $_POST['artId']);
    $stmt->execute();
    $stmt->bind_result($itemName, $price, $author, $category, $description, $imageURL);
    $stmt->fetch();
    require_once('header.php');
?>


<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>

<html xmlns='http://www.w3.org/1999/xhtml'>
<body>

    <div id="mainScreen">
    	<div id="bottom">
    	<div id="side"></div>
    	<?php $url = "style=\"background-image: url('images/".$imageURL."')\"";?>
    	<div id="art" <?php echo $url?>></div>
    	<div id="properties">
    		<form action="processUpdate.php" method="POST">
    		Art Name:<input type="text" name="itemName" value="<?php echo $itemName?>"><br>
    		Painter Name:<input type="text" name="author" value=<?php echo $author?>><br>
    		Price:<input type="text" name="price" value=<?php echo $price?>><br>
    		Category: <select name="category" value="<?php echo $category?>">
    			<option>modern</option>
    			<option>pop art</option>
    			<option>abstract</option>
    			<option>misc</option>
    		</select><br>
    		Description:<input type="textarea" name="description" value="<?php echo $description?>">
    		<input type="hidden" name="artId" value=<?php echo $_POST['artId']?>>
    		<input type="submit" name="update">
    		<br><br>
    		<div id="shoppingButton">
      	</div>
      </form>
    	</div>
	</div>
    </div>
</body>
</html>

