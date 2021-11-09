<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Make/Model of BMW</title>
    <?php echo $this->render('includes/header.html',NULL,get_defined_vars(),0); ?>
</head>
<body>
<div class="card container mb-5">
    <div class="card-body">

        <h1>Pick your BMW</h1>
        <hr>
        <form action="#" method="post" class="row" id="car">
            <div class="col-lg-8">

                <div class="form-group">
                    <label for="makeDrop"><strong>Please select the model of your dream BMW </strong><b
                            class="err">*</b></label>
                    <select class="form-control" id="makeDrop" name="makeDrop">
                        <option value="-- Please choose one --">-- Please choose one --</option>

                        <?php foreach (($models?:[]) as $model): ?>
                            <option value="<?= ($model) ?>"
                            <?php if ($model == $selectedModel): ?>selected="selected"<?php endif; ?>
                            ><?= ($model) ?></option>
                        <?php endforeach; ?>

                    </select>

                    <?php if (isset($errors['makeDrop'])): ?>
                        <div class="alert alert-danger alert-dismissible fade show mt-1">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <?= ($errors['makeDrop'])."
" ?>
                        </div>
                    <?php endif; ?>

                </div>

                <div class="form-group">
                    <label for="yearDrop"><strong>Please select a year </strong><b class="err">*</b></label>
                    <select class="form-control" id="yearDrop" name="yearDrop">
                        <option value="-- Please choose one --">-- Please choose one --</option>

                        <?php foreach (($years?:[]) as $year): ?>
                            <option value="<?= ($year) ?>"
                            <?php if ($year == $selectedYear): ?>selected="selected"<?php endif; ?>
                            ><?= ($year) ?></option>
                        <?php endforeach; ?>

                    </select>

                    <?php if (isset($errors['yearDrop'])): ?>
                        <div class="alert alert-danger alert-dismissible fade show mt-1">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <?= ($errors['yearDrop'])."
" ?>
                        </div>
                    <?php endif; ?>

                </div>

                <div class="form-group">
                    <label><strong>Drive-train </strong><b class="err">*</b></label>

                    <?php foreach (($driveTrains?:[]) as $driveTrain): ?>
                        <br>
                        <input type="radio" id="<?= ($driveTrain) ?>" name="driveTrain" value="<?= ($driveTrain) ?>"
                        <?php if ($driveTrain == $selectedDriveTrain): ?>checked="checked"<?php endif; ?>
                        >
                        <label for="<?= ($driveTrain) ?>"><?= ($driveTrain) ?></label>
                    <?php endforeach; ?>
                    <br>

                    <?php if (isset($errors['driveTrain'])): ?>
                        <div class="alert alert-danger alert-dismissible fade show mt-1">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <?= ($errors['driveTrain'])."
" ?>
                        </div>
                    <?php endif; ?>

                </div>
            </div>

            <div class="col-lg-4">
                <div class="card mt-4">
                    <div class="card-body">
                        <p class="card-text"><b>Note:</b> All information entered is protected by our <a
                                href="https://en.wikipedia.org/wiki/Privacy_policy" target="_blank">privacy
                            policy</a>.
                            Profile information can only be viewed by others with your permission.</p>
                        <p class="card-text"><b>Required:</b> Anything with a <b class="err">*</b> is required and needs
                            to be filled out.
                        </p>
                    </div>
                </div>
            </div>
        </form>

        <div class="float-right p-2">
            <button type="submit" form="car" class="btn btn-dark">Next ></button>
        </div>


    </div>
</div>
</body>
</html>