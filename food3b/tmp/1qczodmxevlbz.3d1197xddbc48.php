<!doctype html>
<html lang="en">
<head>
    <title>Food Order</title>
    <?php echo $this->render('includes/header.htm',NULL,get_defined_vars(),0); ?>
</head>
<body>
    <div class="container">
        <h1>Food Order, Continued</h1>

        <form action="#" method="post" class="form-horizontal">

            <!-- get condiments -->
            <div class="form-group">
                <label class="col-sm-2 control-label">Select condiments</label>
                <div class="col-sm-4">
                    <?php foreach (($conds?:[]) as $cond): ?>
                        <label><input type="checkbox"
                                      name="conds[]"
                                      value="<?= ($cond) ?>"> <?= (ucfirst($cond)) ?></label><br>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="col-xs-3 ">
                <input class="form-control btn btn-default"
                       type="submit" value="Place Order">
            </div>
        </form>
    </div>
</body>
</html>