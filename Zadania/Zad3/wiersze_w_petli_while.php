<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petle</title>
<style>

	table{
		
		border-collapse: collapse;
	}
	td {
		border: 1px solid gray;
		padding: 10px;
		text-align: left;
        background-color: lightgray;
	}
</style>
</head>
<body>
<table>
<?php
$n=1;
while($n <= 5){
    echo "<tr><td>To jest wiersz numer ". $n."</tr></td>";
    $n++;
}
?>
<table>
</body>
</html>