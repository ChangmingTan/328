<!doctype html>
<html lang="en">
<head>
    <title>Welcome to My Food Page</title>
    <?php echo $this->render('includes/header.htm',NULL,get_defined_vars(),0); ?>
</head>
<body>
    <div class="container">
        <h1>Order Summary</h1>
        <p>Thank you for ordering <?= ($SESSION['order']->getFood()) ?> for <?= ($SESSION['order']->getMeal()) ?></p>
        <?php if (!empty($SESSION['order']->getCondiments())): ?>
            <p>Condiments:  <?= (implode($SESSION['order']->getCondiments(), ", ")) ?></p>
        <?php endif; ?>

        <a href="order">Place another order</a><br>
        <a href="<?= ($BASE) ?>">Home page</a>
    </div>
</body>
</html>