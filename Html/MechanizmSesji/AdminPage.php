<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona administracyjna</title>
</head>
<style>
    h1, p{
        text-align: center;
        font-family: Papyrus;
    }
    #status{
        text-align: center;
        font-family: Courier New;   
    }
</style>
<body>
<?php include 'MenuBar.php'; ?>
<h1>Panel administracyjny</h1>
<p id="status">Status: <?php echo isset($_SESSION['login']) ? "Zalogowany jako " . $_SESSION['login'] : "Niezalogowany"; ?></p>
<?php include 'FooterBar.php'; ?>

</body>
</html>
