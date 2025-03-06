<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["adres"])) {
    $ip = trim($_POST["adres"]);
    $url = "http://ip-api.com/json/" .$ip;
    
    $json = file_get_contents($url);
    $dane = json_decode($json, true); 
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IP_json</title>
</head>
<body>
    <form method="POST">
        <p>Sprawdź przybliżoną lokalizacje adresu IP v.4</p>
        <label for="adres">http://ip-api.com/json/</label>
        <input type="text" id="adres" name="adres" required>
        <input type="submit" value="Sprawdź IP">
    </form>
    
    <?php if (isset($json)): ?>
        <p>Zwrócone dane (JSON):</p>
        <pre><?= htmlspecialchars($json); ?></pre>
        
        <p>Zwrócone dane (array)</p>
        <pre><?= print_r($dane); ?></pre>
    <?php endif; ?>
</body>
</html>