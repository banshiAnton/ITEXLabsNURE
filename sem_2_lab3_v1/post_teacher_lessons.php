<?php
    $dbh = include('./conn.php');
    $teacher_id = (int)$_POST['teacher'];
    $sql = "SELECT * FROM lesson JOIN lesson_teacher ON ID_Lesson=FID_Lesson1 JOIN teacher ON ID_Teacher=FID_Teacher WHERE ID_Teacher=$teacher_id";
    $result = $dbh->query($sql);

    header('Content-Type: text/xml; charset=utf8');
    header("Cache-Control: no-cache, must-revalidate");

    echo '<?xml version="1.0" encoding="utf8" ?>';
    echo "<root>";

    foreach ($result as $row) {
        foreach($row as $filed => $value ) {
            if (gettype($filed) == 'string') {
                echo '<block>';
                    echo "<field>$filed</field>";
                    echo "<value>$value</value>";
                echo '</block>';
            }
        }
    }

    echo "</root>";
?>