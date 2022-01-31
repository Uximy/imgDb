<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>img</title>
</head>
<body>
    <a href="./pages/upload.php">выгрузка изображения</a>

    <br/>
    <br/>
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>size</th>
            <th>path</th>
        </tr>
            <?php
                include_once('./db.php');
                $db = connect('localhost', 'root', 'root', 'works');
                $count = 0;
                foreach ($db->query("SELECT * FROM pictures") as $row) {
                        echo
                        "<tr>"
                            ."<td>".
                                $row['id']
                            ."</td>".
                            "<td>".
                                $row['name']
                            ."</td>".
                            "<td>".
                                $row['size']." байт"
                            ."</td>".
                            "<td>".
                                $row['imagepath']
                            ."</td>".
                        "</tr>";
                        $count++;
                }
            ?>
    </table>
    
    <p>Общее кол-во элементов в таблице: <?php echo $count ?></p>

</body>
</html>
