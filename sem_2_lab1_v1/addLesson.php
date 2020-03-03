<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="addLessonPost.php" method="post">
        <input type="number" placeholder="lesson id" name="lesson_id">
        <input type="text" placeholder="disciple" name="disciple">
        <input type="text" placeholder="lesson number" name="lesson_number">
        <input type="text" placeholder="auditorium" name="auditorium">
        <input type="text" placeholder="week_day" name="week_day">
        <br>
        <select size="3" name='type'>
            <option value="Lecture">Lecture</option>
            <option value="Practical">Practical</option>
            <option value="Laboratory">Laboratory</option>
        </select>
        <br>
        <?php
            $dbh = include('./conn.php');
            $sqlT = "SELECT * FROM teacher";
            $resultT = $dbh->query($sqlT);
            $lengT = $resultT->rowCount();
            echo "<select size={$lengT} name='teacher'>";
            foreach ($resultT as $row) {
                echo "<option value={$row['ID_Teacher']}>{$row['name']}</option>";
            }
            echo '</select>';

            echo '<br>';

            $sqlG = "SELECT * FROM groups";
            $resultG = $dbh->query($sqlG);
            $lengG = $resultG->rowCount();
            echo "<select size={$lengG} name='group'>";
            foreach ($resultG as $row) {
                echo "<option value={$row['ID_Groups']}>{$row['title']}</option>";
            }
            echo '</select>';
        ?>
        <br>
        <input type="submit" value="Отправить">
    </form>
</body>
</html>