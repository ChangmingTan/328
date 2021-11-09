<?php echo $this->render('includes/header.html',NULL,get_defined_vars(),0); ?>
<div class="card container">
    <div class="card-body">
        <h1>Personal Information</h1>
        <hr>

        <form id="pinfo" action="#" method="post" class="row">
            <div class="col-lg-8">

                <div class="form-group">
                    <label for="fname" class="font-weight-bold">First Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="fname" name="fname" value="<?= ($fname) ?>">
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon2"><i class="fas fa-address-card"></i></span>
                        </div>
                    </div>

                    <?php if (isset($errors['fname'])): ?>
                        <div class="alert alert-danger alert-dismissible fade show mt-1">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <?= ($errors['fname'])."
" ?>
                        </div>
                    <?php endif; ?>

                </div>

                <div class="form-group">
                    <label for="lname" class="font-weight-bold">Last Name</label>
                    <input type="text" class="form-control" id="lname" name="lname" value="<?= ($lname) ?>">

                    <?php if (isset($errors['lname'])): ?>
                        <div class="alert alert-danger alert-dismissible fade show mt-1">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <?= ($errors['lname'])."
" ?>
                        </div>
                    <?php endif; ?>

                </div>

                <div class="form-group">
                    <label for="age" class="font-weight-bold">Age</label>
                    <input type="text" class="form-control" id="age" name="age" value="<?= ($age) ?>">

                    <?php if (isset($errors['age'])): ?>
                        <div class="alert alert-danger alert-dismissible fade show mt-1">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <?= ($errors['age'])."
" ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Gender</label><br>
                    <div class="form-check form-check-inline">
                        <?php foreach (($genders?:[]) as $gender): ?>
                            <input class="form-check-input" type="radio" name="gender" id="<?= ($gender) ?>"
                                   value="<?= ($gender) ?>"
                            <?php if ($gender == $selectedGender): ?>
                                checked="checked"
                            <?php endif; ?>
                            >
                            <label for="<?= ($gender) ?>" class="form-check-label"> <?= (ucfirst($gender)) ?>&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="phone" class="font-weight-bold">Phone Number</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="1234567890"
                           value="<?= ($phone) ?>">

                    <?php if (isset($errors['phone'])): ?>
                        <div class="alert alert-danger alert-dismissible fade show mt-1">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <?= ($errors['phone'])."
" ?>
                        </div>
                    <?php endif; ?>

                </div>

                <div class="form-group">

                    <label for="phone" class="font-weight-bold">Premium Membership</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="premium" name="premium" value="premium"
                        <?php if (isset($premium)): ?>
                            checked="checked"
                        <?php endif; ?>
                        >
                        <label class="form-check-label" for="premium">Sign me up for a Premium Account!</label>
                    </div>

                </div>

            </div>

            <div class="col-lg-4">
                <div class="card mt-4">
                    <div class="card-body">
                        <p class="card-text"><b>Note:</b> All information entered is protected by our <a
                                href="https://en.wikipedia.org/wiki/Privacy_policy" target="_blank">privacy policy</a>.
                            Profile information can only be viewed by others with your permission.</p>
                    </div>
                </div>
            </div>
        </form>

        <div class="float-right p-2">
            <button type="submit" form="pinfo" class="btn btn-primary">Next ></button>
        </div>

    </div>
</div>