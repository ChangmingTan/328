<!doctype html>
<html lang="en">
<head>
    <title>Welcome to My Pet Page</title>
    <?php echo $this->render('includes/header.htm',NULL,get_defined_vars(),0); ?>
</head>
<body>
<div class="container">
    <h1>Order Summary</h1>
    <p>Thank you for ordering a <?= ($SESSION['color']) ?> <?= ($SESSION['pet']) ?> </p>
</div>
</body>
</html>