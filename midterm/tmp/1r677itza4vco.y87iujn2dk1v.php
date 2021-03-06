<!DOCTYPE html>
<html lang="en">
<head>
    <title>Midterm Survey</title>
    <?php echo $this->render('includes/header.html',NULL,get_defined_vars(),0); ?>
</head>
<body>
<div class="container p-5">
    <h1 class="pb-3">Midterm Survey</h1>

    <form action="#" method="post">
        <div class="form-group mb-4 col-sm-3">
            <label for="name">Name &nbsp;&nbsp;</label>
            <input type="text" class="form-control" id="name" name="name" value="<?= ($name) ?>">
            <span class="err">
                <?php if (isset($errors['name'])): ?>
                    <?= ($errors['name'])."
" ?>
                <?php endif; ?>
            </span>
        </div>

        <div class="form-group col-sm-4">
            <label class="control-label pb-2">Check all that apply: </label>

            <?php foreach (($options?:[]) as $option): ?>
                <div class="form-check">
                    <label class="form-check-label" for="<?= ($option) ?>">
                        <input type="checkbox" class="form-check-input" id="<?= ($option) ?>"
                               name="option[]" value="<?= ($option) ?>"
                        <?php if ($option == $selectedOption): ?>
                            checked="checked"
                        <?php endif; ?>
                        >
                        <?= ($option)."
" ?>
                    </label>
                </div>
            <?php endforeach; ?>

            <span class="err">
                <?php if (isset($errors['option'])): ?>
                    <?= ($errors['option'])."
" ?>
                <?php endif; ?>
            </span>

        </div>
        <div class="col-sm-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

</body>
</html>