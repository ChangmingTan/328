<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Interior of BMW</title>
    <?php echo $this->render('includes/header.html',NULL,get_defined_vars(),0); ?>
</head>
<body>
<div class="card container mb-5">
    <div class="card-body">

        <h1>Design the interior of your BMW</h1>
        <hr>
        <form action="#" method="post" class="row" id="interior">

            <div class="col-lg-8">

                <div class="form-group">
                    <label for="leather"><strong>Select the type of leather desired </strong><b
                            class="err">*</b></label>
                    <select class="form-control" id="leather" name="leather">
                        <option value="-- Please choose one --">-- Please choose one --</option>

                        <?php foreach (($leathers?:[]) as $leather): ?>
                            <option value="<?= ($leather) ?>"
                            <?php if ($leather == $selectedLeather): ?>selected="selected"<?php endif; ?>
                            ><?= ($leather) ?></option>
                        <?php endforeach; ?>

                    </select>

                    <?php if (isset($errors['leather'])): ?>
                        <div class="alert alert-danger alert-dismissible fade show mt-1">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <?= ($errors['leather'])."
" ?>
                        </div>
                    <?php endif; ?>

                </div>

                <div class="form-group">
                    <label><strong>Stereo System </strong><b class="err">*</b></label>

                    <?php foreach (($stereos?:[]) as $stereo): ?>
                        <br>
                        <input type="radio" id="<?= ($stereo) ?>" name="stereo" value="<?= ($stereo) ?>"
                        <?php if ($stereo == $selectedStereo): ?>checked="checked"<?php endif; ?>
                        >
                        <label for="<?= ($stereo) ?>"><?= ($stereo) ?></label>
                    <?php endforeach; ?>
                    <br>

                    <?php if (isset($errors['stereo'])): ?>
                        <div class="alert alert-danger alert-dismissible fade show mt-1">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <?= ($errors['stereo'])."
" ?>
                        </div>
                    <?php endif; ?>

                </div>

                <div class="form-group">
                    <label><strong>Add navigation system </strong><b class="err">*</b></label>

                    <?php foreach (($navigations?:[]) as $navigation): ?>
                        <br>
                        <input type="radio" id="<?= ($navigation) ?>" name="nav" value="<?= ($navigation) ?>"
                        <?php if ($navigation == $selectedNavigation): ?>checked="checked"<?php endif; ?>
                        >
                        <label for="<?= ($navigation) ?>"><?= ($navigation) ?></label>
                    <?php endforeach; ?>
                    <br>

                    <?php if (isset($errors['nav'])): ?>
                        <div class="alert alert-danger alert-dismissible fade show mt-1">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <?= ($errors['nav'])."
" ?>
                        </div>
                    <?php endif; ?>

                </div>

                <div class="form-group">
                    <label><strong>Heads up display </strong><b class="err">*</b></label>

                    <?php foreach (($headsUps?:[]) as $headsUp): ?>
                        <br>
                        <input type="radio" id="<?= ($headsUp) ?>" name="head" value="<?= ($headsUp) ?>"
                        <?php if ($headsUp == $selectedHeadsUp): ?>checked="checked"<?php endif; ?>
                        >
                        <label for="<?= ($headsUp) ?>"><?= ($headsUp) ?></label>
                    <?php endforeach; ?>
                    <br>
                    <?php if (isset($errors['head'])): ?>
                        <div class="alert alert-danger alert-dismissible fade show mt-1">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <?= ($errors['head'])."
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
            <button type="submit" form="interior" class="btn btn-dark">Next ></button>
        </div>

    </div>
</div>
</body>
</html>