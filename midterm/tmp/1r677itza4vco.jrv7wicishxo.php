<!DOCTYPE html>
<html lang="en">
<head>
    <title>Midterm Survey</title>
    <?php echo $this->render('includes/header.html',NULL,get_defined_vars(),0); ?>
</head>
<body>
<div class="container p-5">
    <h1 class="pb-3">Midterm Survey</h1>
    <h3>Thank you for taking the survey, <?= ($SESSION['name']) ?></h3>

    <?php if (isset($SESSION['option'])): ?>
        <h4>Your Answers:</h4>
        <p><?= ($SESSION['option']) ?></p>
    <?php endif; ?>
</div>
</body>
</html>