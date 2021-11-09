<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Week 5</title>
</head>
<body>
<h1><?= ($title) ?></h1>
<h2>Can you believe it's week 5 already?</h2>
<h3>We're almost half-way there!</h3>
<p>You are logged in as <?= ($username) ?> with password <?= ($password) ?></p>

<h2>Temperature</h2>
<p>Fahrenheit: <?= ($temp) ?></p>
<p>Celsius: <?= (round(($temp-32) * (5/9), 2)) ?> degrees</p>

<h2>I like <?= ($color) ?></h2>
<h2>The radius is <?= ($radius) ?></h2>
<p>Circumference: <?= (round((2*3.14*$radius), 2)) ?></p>

<!-- display array: similar to foreach loop -->
<h2>Fruits</h2>
<?php foreach (($fruits?:[]) as $fruit): ?>
    <p><?= ($fruit) ?></p>
<?php endforeach; ?>

<h2>Bookmarks</h2>
<p>My first bookmark is <?= ($bookmarks[0]) ?></p>
<ul>
    <?php foreach (($bookmarks?:[]) as $bookmark): ?>
        <li><a href="<?= ($bookmark) ?>"><?= (str_replace('http://', '', $bookmark)) ?></a></li>
    <?php endforeach; ?>
</ul>

<!-- display associative array -->
<h2>Addresses</h2>
<p><?= ($addresses['primary']) ?></p>
<p><?= ($addresses['secondary']) ?></p>

<!-- looping over associative arrays -->
<?php foreach (($addresses?:[]) as $key=>$value): ?>
    <p><?= ($key) ?> - <?= ($value) ?></p>
<?php endforeach; ?>

<h2>Desserts</h2>
<?php foreach (($desserts?:[]) as $val=>$text): ?>
    <input type="checkbox" value="<?= ($val) ?>"><?= ($text) ?><br>
<?php endforeach; ?>

</body>
</html>