<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <?php
            $dbh = include('./conn.php');
            $sql = "SELECT * FROM lesson";
            $result = $dbh->query($sql);
            $leng = $result->rowCount();
            echo "<select size={$leng} name='au'>";
            foreach ($result as $row) {
                $au_name = $row['auditorium'];
                echo "<option value={$au_name}>{$au_name}</option>";
            }
            echo '</select>';
        ?>
        <br>
        <input type="submit" value="Отправить">
    </form>
    <script src="./get_au_lessons.js"></script>
</body>
</html>