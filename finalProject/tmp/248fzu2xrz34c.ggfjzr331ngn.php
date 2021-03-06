<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BMW Display</title>
    <?php echo $this->render('includes/header.html',NULL,get_defined_vars(),0); ?>
</head>
<body>
<div class="">
    <h1>Display all BMW configurations</h1>

    <table class="table">
        <thead class="thead-light">
        <tr>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Phone Number</th>
            <th>Email Address</th>
            <th>Model</th>
            <th>Year</th>
            <th>Drive Train</th>
            <th>Rim Size</th>
            <th>Spinner</th>
            <th>Color</th>
            <th>Exhaust</th>
            <th>Engine</th>
            <th>Transmission</th>
            <th>Leather</th>
            <th>Stereo</th>
            <th>Navigation</th>
            <th>Heads Up Display</th>
            <th>Wheels</th>
            <th>Seats</th>
            <th>Addition</th>
        </tr>
        </thead>

        <tbody>
        <?php foreach (($BMWs?:[]) as $BMW): ?>
            <tr>
                <td>a<?= ($BMW['LastName']) ?></td>
                <td><?= ($BMW['FirstName']) ?></td>
                <td><?= ($BMW['Phone']) ?></td>
                <td><?= ($BMW['Email']) ?></td>
                <td><?= ($BMW['Model']) ?></td>
                <td><?= ($BMW['Year']) ?></td>
                <td><?= ($BMW['DriveTrain']) ?></td>
                <td><?= ($BMW['Rim_size']) ?></td>
                <td><?= ($BMW['Spinner']) ?></td>
                <td><?= ($BMW['Color']) ?></td>
                <td><?= ($BMW['Exhaust']) ?></td>
                <td><?= ($BMW['Engine']) ?></td>
                <td><?= ($BMW['Transmission']) ?></td>
                <td><?= ($BMW['Leather']) ?></td>
                <td><?= ($BMW['Stereo']) ?></td>
                <td><?= ($BMW['Navigation']) ?></td>
                <td><?= ($BMW['Display']) ?></td>
                <td><?= ($BMW['Wheels']) ?></td>
                <td><?= ($BMW['Seats']) ?></td>
                <td><?= ($BMW['Addition']) ?></td>

            </tr>
        <?php endforeach; ?>

        </tbody>
    </table>

</div>
</body>
</html>