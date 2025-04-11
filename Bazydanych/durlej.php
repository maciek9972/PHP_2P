<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "durlej";
$password = "korale1313";
$db = "durlej";

try{
    $conn = mysqli_connect($servername, $username, $password, $db);
    ?> <p>Połączono</p><?php
}
catch(mysqli_sql_exception){
    ?><p>Wystąpił błąd</p><?php
}
?>
</body>
</html>