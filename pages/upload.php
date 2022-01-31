<?php
include('../db.php');
$db = connect('localhost', 'root', 'root', 'works');

if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {     
        $namefile = $_FILES["fileToUpload"]['name'];
        $sizefile = $_FILES["fileToUpload"]['size'];
        $pathfile = $_SERVER['DOCUMENT_ROOT']."/images/$namefile";

        $db->query("INSERT INTO pictures (name, size, imagepath) VALUES ('$namefile', $sizefile, '$pathfile')");
    } else {
        echo "Файл не является изображением.";
    }
}
?>
<!DOCTYPE html>
<html>
<body>

<form method="post" enctype="multipart/form-data">
    <label>Выберите изображение для загрузки:</label>  
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Загрузить изображение" name="submit">
</form>

<a href="../index.php">назад</a>

</body>
</html>