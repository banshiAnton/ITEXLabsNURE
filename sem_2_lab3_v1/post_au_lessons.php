<?php
    $dbh = include('./conn.php');
    $au = (int)$_POST['au'];
    $sql = "SELECT * FROM lesson WHERE auditorium=$au";
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