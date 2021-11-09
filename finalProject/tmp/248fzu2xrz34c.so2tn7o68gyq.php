<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SUV Options</title>
    <?php echo $this->render('includes/header.html',NULL,get_defined_vars(),0); ?>
</head>
<body>
<div class="card container mb-5">
    <div class="card-body">

        <h1>SUV Options</h1>
        <hr>
        <form action="#" method="post" class="row" id="suv">

            <div class="col-lg-8">

                <div class="form-group">
                    <label for="wheels"><strong>Select the number of wheels desired </strong><b
                            class="err">*</b></label>
                    <select class="form-control" id="wheels" name="wheels">
                        <option value="-- Please choose one --">-- Please choose one --</option>

                        <?php foreach (($wheels?:[]) as $wheel): ?>
                            <option value="<?= ($wheel) ?>"
                            <?php if ($wheel == $selectedWheel): ?>selected="selected"<?php endif; ?>
                            ><?= ($wheel) ?></option>
                        <?php endforeach; ?>

                    </select>

                    <?php if (isset($errors['wheels'])): ?>
                        <div class="alert alert-danger alert-dismissible fade show mt-1">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <?= ($errors['wheels'])."
" ?>
                        </div>
                    <?php endif; ?>

                </div>

                <div class="form-group">
                    <label for="seats"><strong>Select the number of seats </strong><b class="err">*</b></label>
                    <select class="form-control" id="seats" name="seats">
                        <option value="-- Please choose one --">-- Please choose one --</option>

                        <?php foreach (($seats?:[]) as $seat): ?>
                            <option value="<?= ($seat) ?>"
                            <?php if ($seat == $selectedSeat): ?>selected="selected"<?php endif; ?>
                            ><?= ($seat) ?></option>
                        <?php endforeach; ?>

                    </select>

                    <?php if (isset($errors['seats'])): ?>
                        <div class="alert alert-danger alert-dismissible fade show mt-1">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <?= ($errors['seats'])."
" ?>
                        </div>
                    <?php endif; ?>

                </div>

            </div>

            <div class="col-lg-4">
                <div class="card mt-4">
                    <div class="card-body">
                        <p class="card-text"><b>Note:</b> All information entered is protected by our <a
                                href="https://en.wikipedia.org/wiki/Privacy_policy" target="_blank">privacy policy</a>.
                            Profile information can only be viewed by others with your permission.</p>
                        <p class="card-text"><b>Required:</b> Anything with a <b class="err">*</b> is required and needs
                            to be filled out.
                        </p>
                    </div>
                </div>
            </div>

        </form>

        <div class="float-right p-2">
            <button type="submit" form="suv" class="btn btn-dark">Next ></button>
        </div>

    </div>
</div>
</body>
</html>