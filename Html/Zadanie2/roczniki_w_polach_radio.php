<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<fieldset>
        <legend>Roczniki</legend>
<?php
for($i=2010;$i<2026;$i++){
?>
<input type="radio" id="Rok<?=$i;?>" name="Rocznik">
<label for="Rok<?=$i;?>"><?=$i;?><br></label>
<?php
}
?>
</fildset>
</body>
</html>
