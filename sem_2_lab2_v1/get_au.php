<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./cache.js"></script>
</head>
<body>
    <div id="content">
        <?php
            $collection = include('./dbconnection.php');
            $au = $_GET['au'];
            $result = $collection->find(['au' => (int)$au]);
            foreach($result as $row) {
                echo "<p>Type = {$row['type']} Date = {$row['date']} Group = {$row['group']} Pre = {$row['pred']} Dis = {$row['dis']}</p>";
            }
        ?>
    </div>
</body>
</html>