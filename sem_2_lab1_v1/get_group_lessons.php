<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="post_group_lessons.php" method="post">
        <?php
            $dbh = include('./conn.php');
            $sql = "SELECT * FROM groups";
            $result = $dbh->query($sql);
            $leng = $result->rowCount();
            echo "<select size={$leng} name='group'>";
            foreach ($result as $row) {
                echo "<option value={$row['ID_Groups']}>{$row['title']}</option>";
            }
            echo '</select>';
        ?>
        <br>
        <input type="submit" value="Отправить">
    </form>
</body>
</html>