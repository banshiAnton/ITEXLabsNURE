<?php
    $dbh = include('./conn.php');
    $group_id = (int)$_POST['group'];
    $sql = "SELECT * FROM lesson JOIN lesson_groups ON ID_Lesson=FID_Lesson2 JOIN groups ON FID_Groups=ID_Groups WHERE ID_Groups=$group_id";
    $result = $dbh->query($sql);

    $response = array();

    foreach ($result as $row) {
        foreach($row as $filed => $value ) {
            if (gettype($filed) == 'string') {
                $response[$filed] = $value;
            }
        }
    }

    header('Content-Type: application/json');
    
    echo json_encode($response)
?>
