<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="get_au.php">
        <?php
            $collection = include('./dbconnection.php');
            $result = $collection->find([], ['au' => 1]);
            $au_hash = array();
            foreach($result as $obj) {
                $au_hash[$obj['au']] = true;
            }
            $au_set = array_keys($au_hash);
            echo "<select name='au'>";
            foreach ($au_set as $row) {
                echo "<option value={$row}>{$row}</option>";
            }
            echo '</select>';
        ?>
        <br>
        <input type="submit" value="Отправить">
    </form>
</body>
</html>