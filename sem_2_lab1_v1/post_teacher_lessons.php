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
        $teacher_id = (int)$_POST['teacher'];
        $sql = "SELECT * FROM lesson JOIN lesson_teacher ON ID_Lesson=FID_Lesson1 JOIN teacher ON ID_Teacher=FID_Teacher WHERE ID_Teacher=$teacher_id";
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