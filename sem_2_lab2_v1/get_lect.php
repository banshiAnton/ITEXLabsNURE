<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="content">
        <?php
            $collection = include('./dbconnection.php');
            $pred = $_GET['pred'];
            $dis = $_GET['dis'];
            $result = $collection->find(['pred' => $pred, 'dis' => $dis, 'type' => 'lect']);
            foreach($result as $row) {
                echo "<p>Type = {$row['type']} Date = {$row['date']} Group = {$row['group']} Pre = {$row['pred']} Dis = {$row['dis']}</p>";
            }
        ?>
    </div>
    <script src="/cache.js"></script>
</body>
</html>