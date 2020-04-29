<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="post_teacher_lessons.php" method="post">
        <?php
            $dbh = include('./conn.php');
            $sql = "SELECT * FROM teacher";
            $result = $dbh->query($sql);
            $leng = $result->rowCount();
            echo "<select size={$leng} name='teacher'>";
            foreach ($result as $row) {
                echo "<option value={$row['ID_Teacher']}>{$row['name']}</option>";
            }
            echo '</select>';
        ?>
        <br>
        <input type="submit" value="Отправить">
    </form>
    <script src="./get_teacher_lessons.js"></script>
</body>
</html>