<?
    $user_name = htmlspecialchars($_POST["user_name"]);

    setcookie("user_name", $user_name, time()+3600);

    header('Location: name.php');
    exit;
?>