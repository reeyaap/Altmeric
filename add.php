<?php
require_once ('config.php');
require_once ('header.php');
?>

<html>
<body>

<div id="mainScreen">
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload"><br>
        Art Name:<input type="text" name="artName"><br>
        Painter Name:<input type="text" name="author"><br>
        Price:<input type="text" name="price"><br>
        Category: <select name="category">
            <option>modern</option>
            <option>pop art</option>
            <option>abstract</option>
            <option>misc</option>
        </select><br>
        Description:<input type="textarea" name="description"><br>
        <input type="submit" value="Upload Image" name="submit">

    </form>
</div>

</body>
</html>






