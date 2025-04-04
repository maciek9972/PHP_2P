<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Quiz</title>
</head>
<body>
    <?php
        $json='{"response_code":0,"results":[{"type":"multiple","difficulty":"hard","category":"Entertainment: Japanese Anime &amp; Manga","question":"In the anime Initial D, how does Takumi Fujiwara describe a drift?","correct_answer":"&#039;. . . the front tires slide so the car won&#039;t face the inside&#039;","incorrect_answers":["&#039;. . . the wheels lose traction, making the car slide sideways&#039;","&#039;. . . the car oversteers through a curve, causing it to turn faster&#039;","&#039;. . . you turn a lot&#039;"]}]}';

        $data = json_decode($json, true);

        if ($data['response_code'] == 0) {
            $difficulty = $data['results'][0]['difficulty'];
            $category = $data['results'][0]['category'];
            $question = $data['results'][0]['question'];
            $correctAnswer = $data['results'][0]['correct_answer'];
            $answers = $data['results'][0]['incorrect_answers'];
            $answers[] = $correctAnswer;
            shuffle($answers); 
            $_SESSION['difficulty'] = $difficulty;
            $_SESSION['category'] = $category;
            $_SESSION['question'] = $question;
            $_SESSION['correct_answer'] = $correctAnswer;
        }
    ?>

    <div class="container">
        <form action="odpowiedzi.php" method="post">
            <h1>Prosty Quiz z OpenTDB</h1>
            <h3>Pytanie: <?= htmlspecialchars($question) ?></h3>

            <?php foreach ($answers as $answer): ?>
                <div class="answer-option">
                    <input type="radio" name="user_answer" id="user_answer_<?= htmlspecialchars($answer) ?>" value="<?= htmlspecialchars($answer) ?>" required>
                    <label for="user_answer_<?= htmlspecialchars($answer) ?>"><?= $answer ?></label>
                </div>
            <?php endforeach; ?>

            <button type="submit">Sprawdź</button>
        </form>
    </div>

</body>
</html>
