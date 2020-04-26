<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="get_lect.php">
        <?php
            $collection = include('./dbconnection.php');
            $result = $collection->find([], ['pred' => 1, 'dis' => 1, '_id' => 0]);
            $prep_hash = array();
            $dis_hash = array();
            foreach($result as $obj) {
                $prep_hash[$obj['pred']] = true;
                $dis_hash[$obj['dis']] = true;
            }
            $prep_set = array_keys($prep_hash);
            $dis_set = array_keys($dis_hash);

            echo "<select name='pred'>";
            foreach ($prep_set as $row) {
                echo "<option value={$row}>{$row}</option>";
            }
            echo '</select>';

            echo "<select name='dis'>";
            foreach ($dis_set as $row) {
                echo "<option value={$row}>{$row}</option>";
            }
            echo '</select>';
        ?>
        <br>
        <input type="submit" value="Отправить">
    </form>
</body>
</html>