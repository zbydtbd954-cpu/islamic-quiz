<?php
include 'questions.php';
$score = 0;
foreach ($questions as $i => $q) {
    if (isset($_POST["q$i"]) && $_POST["q$i"] == $q['answer']) {
        $score++;
    }
}
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>النتيجة</title>
</head>
<body>
<div class="container">
    <h1>📊 نتيجتك</h1>
    <p class="result"><?= $score ?> / <?= count($questions) ?></p>
    <a class="btn" href="index.php">إعادة المحاولة</a>
</div>
</body>
</html>
