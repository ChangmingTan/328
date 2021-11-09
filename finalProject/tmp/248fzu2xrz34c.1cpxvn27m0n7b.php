<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exterior of Car</title>
    <?php echo $this->render('includes/header.html',NULL,get_defined_vars(),0); ?>
</head>
<body>
<div class="card container mb-5">
    <div class="card-body">

        <h1>Design the exterior of your BMW</h1>
        <hr>
        <form action="#" method="post" class="row" id="exterior">
            <div class="col-lg-8">

                <div class="form-group">
                    <label for="rimDrop"><strong>Select the size of the rims </strong><b class="err">*</b></label>
                    <select class="form-control" id="rimDrop" name="rimDrop">
                        <option value="-- Please choose one --">-- Please choose one --</option>

                        <?php foreach (($rims?:[]) as $rim): ?>
                            <option value="<?= ($rim) ?>"
                            <?php if ($rim == $selectedRim): ?>selected="selected"<?php endif; ?>
                            ><?= ($rim) ?></option>
                        <?php endforeach; ?>

                    </select>

                    <?php if (isset($errors['rimDrop'])): ?>
                        <div class="alert alert-danger alert-dismissible fade show mt-1">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <?= ($errors['rimDrop'])."
" ?>
                        </div>
                    <?php endif; ?>

                </div>

                <div class="form-group">
                    <label><strong>Add spinners to the rim? </strong><b class="err">*</b></label>

                    <?php foreach (($spinners?:[]) as $spinner): ?>
                        <br>
                        <input type="radio" id="<?= ($spinner) ?>" name="spinners" value="<?= ($spinner) ?>"
                        <?php if ($spinner == $selectedSpinner): ?>checked="checked"<?php endif; ?>
                        >
                        <label for="<?= ($spinner) ?>"><?= ($spinner) ?></label>
                    <?php endforeach; ?>
                    <br>

                    <?php if (isset($errors['spinners'])): ?>
                        <div class="alert alert-danger alert-dismissible fade show mt-1">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <?= ($errors['spinners'])."
" ?>
                        </div>
                    <?php endif; ?>

                </div>

                <div class="form-group">
                    <label for="colorCar"><strong>Select color of the vehicle </strong><b class="err">*</b></label>
                    <select class="form-control" id="colorCar" name="colorCar">
                        <option value="-- Please choose one --">-- Please choose one --</option>

                        <?php foreach (($colors?:[]) as $color): ?>
                            <option value="<?= ($color) ?>"
                            <?php if ($color == $selectedColor): ?>selected="selected"<?php endif; ?>
                            ><?= ($color) ?></option>
                        <?php endforeach; ?>

                    </select>

                    <?php if (isset($errors['colorCar'])): ?>
                        <div class="alert alert-danger alert-dismissible fade show mt-1">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <?= ($errors['colorCar'])."
" ?>
                        </div>
                    <?php endif; ?>

                </div>

                <div class="form-group">
                    <label for="exhaust"><strong>Select exhaust type </strong><b class="err">*</b></label>
                    <select class="form-control" id="exhaust" name="exhaust">
                        <option value="-- Please choose one --">-- Please choose one --</option>

                        <?php foreach (($exhausts?:[]) as $exhaust): ?>
                            <option value="<?= ($exhaust) ?>"
                            <?php if ($exhaust == $selectedExhaust): ?>selected="selected"<?php endif; ?>
                            ><?= ($exhaust) ?></option>
                        <?php endforeach; ?>

                    </select>

                    <?php if (isset($errors['exhaust'])): ?>
                        <div class="alert alert-danger alert-dismissible fade show mt-1">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <?= ($errors['exhaust'])."
" ?>
                        </div>
                    <?php endif; ?>

                </div>

                <div class="form-group">
                    <label for="engine"><strong>Select the type of engine </strong><b class="err">*</b></label>
                    <select class="form-control" id="engine" name="engine">
                        <option value="-- Please choose one --">-- Please choose one --</option>

                        <?php foreach (($engines?:[]) as $engine): ?>
                            <option value="<?= ($engine) ?>"
                            <?php if ($engine == $selectedEngine): ?>selected="selected"<?php endif; ?>
                            ><?= ($engine) ?></option>
                        <?php endforeach; ?>

                    </select>

                    <?php if (isset($errors['engine'])): ?>
                        <div class="alert alert-danger alert-dismissible fade show mt-1">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <?= ($errors['engine'])."
" ?>
                        </div>
                    <?php endif; ?>

                </div>

                <div class="form-group">
                    <label><strong>Transmission </strong><b class="err">*</b></label>

                    <?php foreach (($transmissions?:[]) as $transmission): ?>
                        <br>
                        <input type="radio" id="<?= ($transmission) ?>" name="transmission"
                               value="<?= ($transmission) ?>"
                        <?php if ($transmission == $selectedTransmission): ?>checked="checked"<?php endif; ?>
                        >
                        <label for="<?= ($transmission) ?>"><?= ($transmission) ?></label>
                    <?php endforeach; ?>
                    <br>

                    <?php if (isset($errors['transmission'])): ?>
                        <div class="alert alert-danger alert-dismissible fade show mt-1">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <?= ($errors['transmission'])."
" ?>
                        </div>
                    <?php endif; ?>

                </div>

                <label for="costumeExterior"><strong>Is there any thing else you want to add to the
                    car?</strong></label>
                <textarea class="form-control" id="costumeExterior" rows="5" name="costumeExterior"
                          placeholder="(optional)"><?= ($costumeExterior) ?></textarea>

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
            <button type="submit" form="exterior" class="btn btn-dark">Next ></button>
        </div>

    </div>


</div>
</div>
</body>
</html>