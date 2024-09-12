<!DOCTYPE html>
<html>
<head>
    <title>Szachownica</title>
    <style>
        table { border-collapse: collapse; }
        td { width: 50px; height: 50px; }
        .black { background-color: black; }
        .white { background-color: white; }
    </style>
</head>
<body>
    <table border="1">
        <?php
        for ($row = 0; $row < 8; $row++) {
            echo "<tr>";
            for ($col = 0; $col < 8; $col++) {
                $class = ($row + $col) % 2 == 0 ? "white" : "black";
                echo "<td class='$class'></td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
