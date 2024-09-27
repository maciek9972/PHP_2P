<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dni_tyg</title>
    <style>
        table{
		
		border-collapse: collapse;
	}
	tn {
		
	}
    </style>
</head>
<body>
<table>
<?php
$tab[1]="pon";
$tab[2]="wto";
$tab[3]="śro";
$tab[4]="czw";
$tab[5]="pią";
$tab[6]="sob";
$tab[7]="nie";
$n=1;
foreach($tab as $element){
while($n <= 7){
    echo "<tr><tn>".$tab[$n]."</tr></tn>";
    $n++;
}
}
?>
<table>
</body>
</html>