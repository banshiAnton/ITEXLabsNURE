<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $dbh = include('./conn.php');
        $group_id = (int)$_POST['group'];
        $sql = "SELECT * FROM lesson JOIN lesson_groups ON ID_Lesson=FID_Lesson2 JOIN groups ON FID_Groups=ID_Groups WHERE ID_Groups=$group_id";
        $result = $dbh->query($sql);
        foreach ($result as $row) {
            echo '<br>';
                foreach($row as $filed => $value ) {
                    if (gettype($filed) == 'string') {
                        echo "<span>$filed = $value</span><br>";
                    }
                }
            echo '<br>';
        }
    ?>
</body>
</html>