<!DOCTYPE html>
<html>
<head>
    <title>Пропуск</title>
    <meta name="viewport" content="witdt=defice-width, initial-scale=1">
    <link rel="icon" href="title.png">
    <link href="css.css" rel="stylesheet" type="text/css">

</head>
<body>

<form method="POST" action="">
    <br class = "container">
    <h2>Заполните декларацию</h2>
    <p>Данные для получения пропуска.</p>
    <hr>
    <br><label for="login"><b>Ваш Позывной</b></label>
    <input name="login" type="text"  required>

    <br><label for ="email"><b>Ваш почтовый ящик</b></label>
    <input name="email" type="text"  required>

    <br><label for="password"><b>Секретное слово</b></label>
    <input name="password" type="password"  required>



    <input type="submit" value="Получение паспорта"/>
</form>

<?php
if (isset($_POST['login']) && isset($_POST['email']) && isset($_POST['password'])){


    $name = $_POST['login'];
    $text = $_POST['email'];
    $pass = $_POST['password'];



    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_base = 'register';
    $db_table = "register";


    $mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);


    if ($mysqli->connect_error) {
        die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
    }

    $result = $mysqli->query("INSERT INTO ". $db_table ." (login,email,password) VALUES ('$name','$text','$pass')");

    if ($result == true){
        echo "Добро пожаловать в убежище";
    }else{
        echo "Извини,убежище переполнено";
    }
}
?>

</body>

</html>