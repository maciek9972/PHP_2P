<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    i{
        color:red;
    }
    </style>
</head>
<body>
    <fieldset><legend>lorem50</legend>
    <?php if($_SERVER['REQUEST_METHOD']==="POST"){
    ?><p>Oto wpisany tekst: </p>
    <p><i><?= $_POST["text"] ?></i></p>
   <?php }
    else{
    ?>
        <form method="POST">
        <textarea rows="5" cols="50" name="text" id="text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus reprehenderit dolorem minima quaerat consectetur voluptate officiis minus, rem soluta aut enim, porro ea eius voluptas sunt iusto nobis repudiandae pariatur?</textarea><br>
        <input type="submit" name="submit" value="Wyślij"></input>
        </form>
    </fieldset>
    <?php } ?>
   
</body>
</html>