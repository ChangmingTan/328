<?php echo $this->render('includes/header.html',NULL,get_defined_vars(),0); ?>
<div class="card container">
    <div class="card-body">
        <h1>Profile</h1>
        <hr>
        <form id="profile" action="#" method="post" class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="email" class="font-weight-bold">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?= ($email) ?>">

                    <?php if (isset($errors['email'])): ?>
                        <div class="alert alert-danger alert-dismissible fade show mt-1">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <?= ($errors['email'])."
" ?>
                        </div>
                    <?php endif; ?>

                </div>

                <div class="form-group">
                    <label for="state" class="font-weight-bold">State</label>
                    <select class="form-control" id="state" name="state">
                        <?php foreach (($states?:[]) as $state): ?>
                            <option value="<?= ($state) ?>"

                            <?php if ($state == $selectedState): ?>
                                selected="selected"
                            <?php endif; ?>

                            > <?= ($state) ?></option>
                        <?php endforeach; ?>
                    </select>

                    <?php if (isset($errors['state'])): ?>
                        <div class="alert alert-danger alert-dismissible fade show mt-1">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <?= ($errors['state'])."
" ?>
                        </div>
                    <?php endif; ?>

                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Seeking</label><br>
                    <div class="form-check form-check-inline">
                        <?php foreach (($sexes?:[]) as $sex): ?>
                            <input class="form-check-input" type="radio" name="sex" id="<?= ($sex) ?>" value="<?= ($sex) ?>"

                            <?php if ($sex == $selectedSex): ?>
                                checked="checked"
                            <?php endif; ?>

                            >
                            <label for="<?= ($sex) ?>" class="form-check-label"> <?= (ucfirst($sex)) ?>&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>

            <div class="col-lg-6">

                <div class="form-group">
                    <label class="font-weight-bold">You can upload an image of yourself</label><br>
                    <div class="card-body border">
                        <form action="upload.php" method="post" enctype="multipart/form-data">
                            Select image to upload:
                            <input type="file" name="fileToUpload" id="fileToUpload">
                            <input type="submit" value="Upload Image" name="submit">
                        </form>



                    </div>
                </div>

                <div class="form-group">
                    <label for="biography" class="font-weight-bold">Biography</label>
                    <textarea class="form-control" rows="5" id="biography" name="biography"><?= ($biography) ?></textarea>
                </div>
            </div>

        </form>

        <div class="float-right p-2">
            <button type="submit" form="profile" class="btn btn-primary">Next ></button>
        </div>

    </div>
</div>
