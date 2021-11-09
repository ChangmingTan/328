<?php echo $this->render('includes/header.html',NULL,get_defined_vars(),0); ?>
<div class="card container">
    <div class="card-body">
        <h1>Interests</h1>
        <hr>
        <form id="interests" action="#" method="post" class="row">
            <div class="container">
                <label class="font-weight-bold">In-door Interests</label><br>

                <?php if (isset($errors['indoor'])): ?>
                    <div class="alert alert-danger alert-dismissible fade show mt-1">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <?= ($errors['indoor'])."
" ?>
                    </div>
                <?php endif; ?>

                <div class="row">
                    <?php foreach (($indoors?:[]) as $indoor): ?>
                        <div class="col-6 col-sm-3">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="<?= ($indoor) ?>"
                                       name="indoor[]" value="<?= ($indoor) ?>"
                                <?php if ($indoor == $selectedIndoor): ?>
                                    checked="checked"
                                <?php endif; ?>
                                >
                                <label class="custom-control-label" for="<?= ($indoor) ?>"><?= ($indoor) ?></label>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>

            <div class="container">
                <label class="font-weight-bold mt-4">Out-door Interests</label><br>

                <?php if (isset($errors['outdoor'])): ?>
                    <div class="alert alert-danger alert-dismissible fade show mt-1">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <?= ($errors['outdoor'])."
" ?>
                    </div>
                <?php endif; ?>

                <div class="row">
                    <?php foreach (($outdoors?:[]) as $outdoor): ?>
                        <div class="col-6 col-sm-3">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="<?= ($outdoor) ?>"
                                       name="outdoor[]" value="<?= ($outdoor) ?>"
                                <?php if ($outdoor == $selectedOutdoor): ?>
                                    checked="checked"
                                <?php endif; ?>
                                >
                                <label class="custom-control-label" for="<?= ($outdoor) ?>"><?= ($outdoor) ?></label>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </form>

        <div class="float-right p-2">
            <button type="submit" form="interests" class="btn btn-primary">Next ></button>
        </div>

    </div>
</div>
