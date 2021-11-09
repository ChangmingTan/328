<!doctype html>
<html lang="en">
<head>
    <title>Food Order</title>
    <?php echo $this->render('includes/header.htm',NULL,get_defined_vars(),0); ?>
</head>
<body>
<div class="container">
    <h1>Display all Orders</h1>

    <table class="table">
        <thead>
        <tr>
            <td>OrderID</td>
            <td>Food</td>
            <td>Meal</td>
            <td>Date/Time</td>
            <td>Condiments</td>
        </tr>
        </thead>
        <tbody>
        <?php foreach (($orders?:[]) as $order): ?>
            <tr>
                <td><?= ($order['order_id']) ?></td>
                <td><?= ($order['food']) ?></td>
                <td><?= ($order['meal']) ?></td>
                <td><?= (date("M d, Y h:i a", strtotime($order['date_time']))) ?></td>
                <td>
                    <?php if (!empty($order['condiments'])): ?>
                        <?= ($order['condiments']) ?>
                        <?php else: ?>None
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

</div>
</body>
</html>