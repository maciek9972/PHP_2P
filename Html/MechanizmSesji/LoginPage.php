<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<style>
    h1{
        text-align: center;
        font-family: Papyrus;
    }
    form{
    max-width: 400px;
    margin: 20px auto;
    padding: 20px;
    border-radius: 30px;
    box-shadow: 0px 8px 20px rgba(55, 2, 116, 0.6);
    background-color: #fafafa;
    font-family: Courier New;
    text-align: center;
    }
    input[type="submit"] {
    width: 100%;
    font-family: Courier New;
    padding: 12px;
    margin-top: 10px;
    border: none;
    border-radius: 20px;
    background-color:rgb(111, 72, 219);
    color: #fff;
    font-size: 20px;
    cursor: pointer;
    }
    p.error{
        color: red;
        font-family: Courier New;
        text-align: center; 
    }
    p.success{
        color: green;
        font-family: Courier New;
        text-align: center; 
    }
</style>
<body>
    <?php include 'MenuBar.php'; ?>
    <h1>Strona logowania</h1>
    <?php
        if($_SERVER["REQUEST_METHOD"] === "POST"){
            if(isset($_POST["wyloguj"])){
                $_SESSION["login_status"] = false;
                session_destroy();
            }

            if(isset($_POST["zaloguj"]))
            {
                if($_POST['login'] === 'admin' && $_POST['pass'] == 'admin'){
                    echo "<p class='success'>Udane logowanie</p>";
                    $_SESSION["login_status"] = true;
                    $_SESSION['login'] = $_POST['login'];
                    $_SESSION['pass'] = $_POST['pass'];
                }
                else{
                    echo "<p class='error'>Dane logowania są niepoprawne</p>";
                }
            }
        } 
        include 'FooterBar.php'; 
    ?>
    <form method="post">
        <?php
        if(isset($_SESSION["login_status"]) && $_SESSION["login_status"]){
            ?>
            <p>
                Jesteś zalogowany jako <?=$_SESSION['login']?>
            </p>
            <p>
                <input type="submit" name="wyloguj" value="Wyloguj się">
            </p>      
    <?php
        }else{
    ?>
        <p>
            <label for="imie">Podaj login</label><br>
            <input type="text" name="login" id="imie">
        </p>
        <p>
            <label for="has">Podaj hasło</label><br>
            <input type="password" name="pass" id="has">
        </p>
        <p>
            <input type="submit" name="zaloguj" value="Zaloguj się">
        </p>
        </form>
    <?php
        }
        ?>
</body>
</html>