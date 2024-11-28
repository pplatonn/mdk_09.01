<?php
$cookie_name = 'theme';
$cookie_value = 'dark';
setcookie($cookie_name, $cookie_value, time() + 2592000);

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>кукес</title>
    <link rel="stylesheet" href='style.css'>
</head>
<body class="lightBody">
    <h1>выберите тему</h1>
    <form action="" name="buttons" method="post">
        <button name="light" id="light">светли</button>
        <button name="dark" id="dark">тёмни</button>
        <button name="delete" id="delete">удалить всё</button>
    </form>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['dark'])) {
        echo $cookie_name . " со значением " . $cookie_value;
    } elseif (isset($_GET['light'])) {
        $cookie_name = 'theme';
        $cookie_value = 'light';
        setcookie($cookie_name, $cookie_value, time() + 2592000);
        echo $cookie_name . " со значением " . $cookie_value;
    } elseif (isset($_GET['delete'])) {
        setcookie($cookie_name, $cookie_value, time() -2592000);
        echo "Куки " . $cookie_name . " со значением " . $cookie_value . " были удалены";
    }
    else {
        echo "Куки вообще не заданы, задайте";
    }
} else {
    if (isset($_POST['dark'])) {
        echo $cookie_name . " со значением " . $cookie_value;
    } elseif (isset($_POST['light'])) {
        $cookie_name = 'theme';
        $cookie_value = 'light';
        setcookie($cookie_name, $cookie_value, time() + 2592000);
        echo $cookie_name . " со значением " . $cookie_value;
    } elseif (isset($_GET['delete'])) {
        setcookie($cookie_name, $cookie_value, time() -2592000);
        echo "Куки " . $cookie_name . " со значением " . $cookie_value . " были удалены";
    }
    else {
        echo "Куки вообще не заданы, задайте";
    }
}



?>