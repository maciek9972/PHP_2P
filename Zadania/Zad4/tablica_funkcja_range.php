<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tablica_funkcja_range</title>
</head>
<body>
<?php
$parzyste=range(0,12,2);
foreach($parzyste as $element){
    echo $element." ";
}
echo "<br>";
$dziesiatki=range(-10,100,10);
foreach($dziesiatki as $element){
    echo $element." ";
}
echo "<br>";
$polowki=range(-5.5,5.5,0.5);
foreach($polowki as $element){
    print_r ($element." ");
}
echo "<br>";
$litery_od_em=range("M","U",1);
foreach($litery_od_em as $element){
    echo $element." ";
}
echo "<br>";
$litery_wstecz=range("X","E",-1);
foreach($litery_wstecz as $element){
    echo $element." ";}
?>
</body>
</html>