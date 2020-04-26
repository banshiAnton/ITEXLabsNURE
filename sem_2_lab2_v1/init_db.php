<?php
    $collection = include('./dbconnection.php');
    
    $today = new \MongoDB\BSON\UTCDateTime(strtotime('yesterday') * 1000);

    $lesson1 = ['date' => $today, 'para' => 2, 'au' => 101, 'dis' => 'C++', 'type' => 'lab', 'group' => 'kiuku1', 'pred' => 'pred1'];
    $lesson2 = ['date' => $today, 'para' => 3, 'au' => 101, 'dis' => 'Java', 'type' => 'lect', 'group' => 'kiuku2', 'pred' => 'pred2'];
    $lesson3 = ['date' => $today, 'para' => 4, 'au' => 106, 'dis' => 'JS', 'type' => 'pz', 'group' => 'kiuku2', 'pred' => 'pred2'];
    $lesson4 = ['date' => $today, 'para' => 5, 'au' => 107, 'dis' => 'C++', 'type' => 'lab', 'group' => 'kiuku3', 'pred' => 'pred3'];
    $lesson5 = ['date' => $today, 'para' => 1, 'au' => 108, 'dis' => 'History', 'type' => 'lect', 'group' => 'kiuku1', 'pred' => 'pred4'];
    $lesson6 = ['date' => $today, 'para' => 1, 'au' => 101, 'dis' => 'SQL', 'type' => 'pz', 'group' => 'kiuku3', 'pred' => 'pred1'];
    $lesson7 = ['date' => $today, 'para' => 2, 'au' => 103, 'dis' => 'MODS', 'type' => 'lect', 'group' => 'kiuku3', 'pred' => 'pred3'];
    $lesson8 = ['date' => $today, 'para' => 6, 'au' => 180, 'dis' => 'AK', 'type' => 'lect', 'group' => 'kiuku4', 'pred' => 'pred4'];


    $insert_result = $collection->insertMany([
        $lesson1,
        $lesson2,
        $lesson3,
        $lesson4,
        $lesson5,
        $lesson6,
        $lesson7,
        $lesson8,
    ]);

    var_dump($insert_result->getInsertedIds());
?>
