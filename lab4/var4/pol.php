<?php
    include_once './db.php';

    $pol_result = htmlspecialchars($_POST['polResult']);

    if (!writeDB($pol_result)) {
        echo "Invalid data";
        exit;
    }

    switch($pol_result) {
        case "js":
            header('Location: https://developer.mozilla.org/ru/docs/Web/JavaScript');
            exit;
        case "python":
            header('Location: https://www.python.org/');
            exit;
        case "php":
            header('Location: https://www.php.net/manual/ru/intro-whatis.php');
            exit;
    }
?>