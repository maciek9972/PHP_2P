<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$json='{"response_code":0,"results":[{"type":"multiple","difficulty":"hard","category":"Entertainment: Japanese Anime &amp; Manga","question":"In the anime Initial D, how does Takumi Fujiwara describe a drift?","correct_answer":"&#039;. . . the front tires slide so the car won&#039;t face the inside&#039;","incorrect_answers":["&#039;. . . the wheels lose traction, making the car slide sideways&#039;","&#039;. . . the car oversteers through a curve, causing it to turn faster&#039;","&#039;. . . you turn a lot&#039;"]}]}';

//$json=file_get_contents($response);
if($json){
    $dane=json_decode($json,true);
    if($dane['response_code'] == 0){
        $difficulty = $dane['results'][0]['difficulty'];
        $category = $dane['results'][0]['category'];
        $question = $dane['results'][0]['question'];
        $correctAnswer = $dane['results'][0]['correct_answer'];
        $answers = $dane['results'][0]['incorrect_answers'];
        $answers[] = $correctAnswer;
        shuffle($answers);
        $_SESSION['difficulty'] = $difficulty;
        $_SESSION['category'] = $category;
        $_SESSION['question'] = $question;
        $_SESSION['correct_answer'] = $correctAnswer;
    }
}
?>
<h1>Pytanie</h1>
<h3>Kategoria: <?= $category?>
<h3>Trudność: <?= $difficulty?></h3>
<form action="odpowiedzi.php" method="post">
    <?php
        foreach($answers as $as){
    ?>
        <input type="radio" name="answer" id="answer<?=$as?>" required>
        <label for="answer<?=$as?>"><?= $as?></label><Br>
    <?php
        }
    ?>
    <Br>
    <input type="submit">
</form>
</body>
</html>