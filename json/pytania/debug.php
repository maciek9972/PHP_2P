<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$response = '{"response_code":0,"results":[{"type":"multiple","difficulty":"hard","category":"Entertainment: Japanese Anime &amp; Manga","question":"In the anime Initial D, how does Takumi Fujiwara describe a drift?","correct_answer":"&#039;. . . the front tires slide so the car won&#039;t face the inside&#039;","incorrect_answers":["&#039;. . . the wheels lose traction, making the car slide sideways&#039;","&#039;. . . the car oversteers through a curve, causing it to turn faster&#039;","&#039;. . . you turn a lot&#039;"]}]}';
$json = json_decode($response, true);
?>
<pre>
<?php
print_r($json);
?>
</pre>  
</body>
</html>
