<!doctype html>
<html lang="en">
<head>
    <title>Food Order</title>
    <?php echo $this->render('includes/header.htm',NULL,get_defined_vars(),0); ?>
</head>
<body>
<div class="container">
    <h1>What would you like to order?</h1>

    <form action="#" method="post" class="form-horizontal">

        <!-- get food -->
        <div class="form-group">
            <label for="food" class="col-sm-2 control-label">What food would you like to order?</label>

            <div class="col-sm-4">
                <input class="form-control" type="text" name="food" id="food"
                       value="<?= ($food) ?>">
                <span class="err">
                        <?php if (isset($errors['food'])): ?>
                            <?= ($errors['food'])."
" ?>
                        <?php endif; ?>
                </span>
            </div>

        </div>

        <!-- get meal -->
        <div class="form-group">
            <label class="col-sm-2 control-label">Select a meal</label>
            <div class="col-sm-4">
                <?php foreach (($meals?:[]) as $meal): ?>
                    <label><input type="radio"
                                  name="meal"
                                  id="<?= ($meal) ?>"
                                  value="<?= ($meal) ?>"
                        <?php if ($meal == $selectedMeal): ?>
                            checked="checked"
                        <?php endif; ?>
                        > <?= (ucfirst($meal))."
" ?>
                        </input></label><br>
                <?php endforeach; ?>
                <span class="err">
                        <?php if (isset($errors['meal'])): ?>
                            <?= ($errors['meal'])."
" ?>
                        <?php endif; ?>
                </span>
            </div>
        </div>

        <div class="col-xs-3 ">
            <input class="form-control btn btn-default"
                   type="submit" value="Next">
        </div>
    </form>
</div>
</body>
</html>