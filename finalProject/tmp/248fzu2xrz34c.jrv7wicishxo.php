<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Summary</title>
    <?php echo $this->render('includes/header.html',NULL,get_defined_vars(),0); ?>
</head>
<body>
<div class="card container mb-5">
    <div class="card-body">

        <h1 class="pb-4 text-center">Summary</h1>

        <ul class="list-group mb-5">
            <li class="list-group-item active bg-dark border-dark">Information</li>
            <li class="list-group-item">Name: <?= ($SESSION['car']->getFName()) ?> <?= ($SESSION['car']->getLName()) ?></li>
            <li class="list-group-item">Phone: <?= ($SESSION['car']->getPhone()) ?></li>
            <li class="list-group-item">Email: <?= ($SESSION['car']->getEmail()) ?></li>
        </ul>

        <ul class="list-group mb-5">
            <li class="list-group-item active bg-dark border-dark">Car</li>
            <li class="list-group-item">Model/Make: <?= ($SESSION['car']->getModel()) ?></li>
            <li class="list-group-item">Make year: <?= ($SESSION['car']->getYear()) ?></li>
            <li class="list-group-item">Drivetrain: <?= ($SESSION['car']->getTransmission()) ?></li>
        </ul>

        <ul class="list-group mb-5">
            <li class="list-group-item active bg-dark border-dark">Exterior</li>
            <li class="list-group-item">Rim: <?= ($SESSION['car']->getRim()) ?></li>
            <li class="list-group-item">Spinner: <?= ($SESSION['car']->getSpinners()) ?></li>
            <li class="list-group-item">Color: <?= ($SESSION['car']->getColor()) ?></li>
            <li class="list-group-item">Exhaust: <?= ($SESSION['car']->getExhaust()) ?></li>
            <li class="list-group-item">Engine: <?= ($SESSION['car']->getEngine()) ?></li>
            <li class="list-group-item">Transmission: <?= ($SESSION['car']->getTransmission()) ?></li>

            <?php if (!empty($SESSION['car']->getExterior())): ?>
                <li class="list-group-item">Costume Exterior: <?= ($SESSION['car']->getExterior()) ?></li>
            <?php endif; ?>

        </ul>

        <ul class="list-group mb-5">
            <li class="list-group-item active bg-dark border-dark">Interior</li>
            <li class="list-group-item">Leather: <?= ($SESSION['car']->getLeather()) ?></li>
            <li class="list-group-item">Stereo: <?= ($SESSION['car']->getStereo()) ?></li>
            <li class="list-group-item">Navigation: <?= ($SESSION['car']->getNavigation()) ?></li>
            <li class="list-group-item">Heads Up Display: <?= ($SESSION['car']->getheadsUp()) ?></li>
        </ul>

        <?php if ($SESSION['car'] instanceof SUV): ?>
            <ul class="list-group mb-5">
                <li class="list-group-item active bg-dark border-dark">SUV</li>
                <li class="list-group-item">Number of Wheels: <?= ($SESSION['car']->getSeats()) ?></li>
                <li class="list-group-item">Seats: <?= ($SESSION['car']->getNumOfWheels()) ?></li>
            </ul>
        <?php endif; ?>

        <div class="text-center">
            <a href="display" class="btn btn-dark align-content-center mt-3">Display BMWs</a>
        </div>

        <div class="text-center">
            <a href="<?= ($BASE) ?>" class="btn btn-dark align-content-center mt-3">Home Page</a>
        </div>

    </div>
</div>
</body>
</html>