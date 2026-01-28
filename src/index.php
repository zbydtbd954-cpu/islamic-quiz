<?php include 'questions.php'; ?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>الاختبار الإسلامي</title>
</head>
<body>
<div class="container">
    <h1>🕌 الاختبار الإسلامي</h1>
    <p class="subtitle">اختبر معلوماتك الدينية</p>
    <form action="result.php" method="POST">
        <?php foreach ($questions as $i => $q): ?>
        <div class="card">
            <h3><?= $q['q'] ?></h3>
            <?php foreach ($q['options'] as $k => $opt): ?>
                <label class="option">
                    <input type="radio" name="q<?= $i ?>" value="<?= $k ?>" required>
                    <?= $opt ?>
                </label>
            <?php endforeach; ?>
        </div>
        <?php endforeach; ?>
        <button class="btn">إنهاء الاختبار</button>
    </form>
</div>
</body>
</html>


