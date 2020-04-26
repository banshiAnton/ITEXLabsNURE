<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="get_labs.php">
        <?php
            $collection = include('./dbconnection.php');
            $result = $collection->find([], ['group' => 1, '_id'=>0]);
            $group_hash = array();
            foreach($result as $obj) {
                $group_hash[$obj['group']] = true;
            }
            $groups_set = array_keys($group_hash);
            echo "<select name='group'>";
            foreach ($groups_set as $row) {
                echo "<option value={$row}>{$row}</option>";
            }
            echo '</select>';
        ?>
        <br>
        <input type="submit" value="Отправить">
    </form>
</body>
</html>