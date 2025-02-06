<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
    <?php    
        foreach(range("a","z") as $litera){
        }
        
    ?>
    <input type="checkbox" name="<?= $litera;?>">
    </fieldset>
</body>
</html>