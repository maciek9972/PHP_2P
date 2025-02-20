<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terminy</title>
    <style>
        body{
            background-color: #fff7d1;
            padding: 100px;
        }
        table{
            background-color: #ffecc8;
            border-collapse: collapse;
        }
        td{
            border: solid grey;
            padding: 10px;
            text-align: center;
            vertical-align: middle;
        }
        input{
            background-color: #ffd09b;
            border-color: #ffb0b0 ;
        }
        input[type=checkbox]{   
            accent-color: #ffd09b;
            outline-color: #ffb0b0;
            outline-offset: -1px;
        }
    </style>
</head>
<body>
    <table>
    <form>
    <td colspan="3">Terminy</td>
    <?php for($i=0;$i<5;$i++){ ?>
        <tr>
            <td><label for="box<?=$i+1?>">Termin <?=$i+1?></label></td>
            <td><input type="checkbox" name="box" id="box<?=$i+1?>"></td>
            <td><input type="month" name="date"></td>
        </tr>
    <?php } ?>
        <tr>
            <td colspan="3"><input type="submit" value="Zapisz" name="Zapisz"></td>
        </tr>
    </form>
    </table>
</body>
</html>
