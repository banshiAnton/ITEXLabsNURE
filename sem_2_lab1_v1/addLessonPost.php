<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        try {
            $dbh = include('./conn.php');
            // var_dump($_POST);
            // Inseer To DB
            $lesson_id = (int)$_POST['lesson_id'];
            $lesson_type = $_POST['type'];
            $lesson_disciple = $_POST['disciple'];
            $lesson_number = (int)$_POST['lesson_number'];
            $lesson_auditorium = $_POST['auditorium'];
            $lesson_week_day = $_POST['week_day'];
    
            $teacherID = (int)$_POST['teacher'];
            $groupID = (int)$_POST['group'];
    
            $sqlLes = "INSERT INTO lesson (ID_Lesson,week_day,lesson_number,auditorium,disciple,type) VALUES ($lesson_id,'$lesson_week_day',$lesson_number,'$lesson_auditorium','$lesson_disciple','$lesson_type')";
            var_dump($sqlLes);
            echo '<br><br>';
            $dbh->query($sqlLes);

            $insertId=$dbh->lastInsertId();
    
            $sqlGroup = "INSERT INTO lesson_groups SET FID_Lesson2=$lesson_id,FID_Groups=$groupID";
            $dbh->query($sqlGroup);
    
            $sqlTeach = "INSERT INTO lesson_teacher SET FID_Lesson1=$lesson_id,FID_Teacher=$teacherID";
            $dbh->query($sqlTeach);
        } catch (PDOException $e) {
            var_dump($e);
        }
    ?>
</body>
</html>