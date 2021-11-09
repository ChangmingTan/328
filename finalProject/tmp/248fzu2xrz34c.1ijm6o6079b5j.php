<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Information</title>
    <?php echo $this->render('includes/header.html',NULL,get_defined_vars(),0); ?>
</head>
<body>
<div class="card container mb-5">
    <div class="card-body">

        <h1>Personal Information</h1>
        <hr>
        <form action="#" method="post" class="row" id="info">
            <div class="col-lg-8">

                <div class="form-group">
                    <label for="fName"><strong>First Name </strong><b class="err">*</b></label>
                    <input type="text" class="form-control" id="fName" name="fName" placeholder="First name"
                           value="<?= ($fName) ?>">

                    <?php if (isset($errors['fName'])): ?>
                        <div class="alert alert-danger alert-dismissible fade show mt-1">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <?= ($errors['fName'])."
" ?>
                        </div>
                    <?php endif; ?>

                </div>

                <div class="form-group">
                    <label for="lName"><strong>Last Name </strong><b class="err">*</b></label>
                    <input type="text" class="form-control" id="lName" name="lName" placeholder="Last name"
                           value="<?= ($lName) ?>">

                    <?php if (isset($errors['lName'])): ?>
                        <div class="alert alert-danger alert-dismissible fade show mt-1">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <?= ($errors['lName'])."
" ?>
                        </div>
                    <?php endif; ?>

                </div>

                <div class="form-group">
                    <label for="phone"><strong>Phone Number </strong><b class="err">*</b></label>
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="2223334444"
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
                    <label for="email"><strong>Email </strong><b class="err">*</b></label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="example@example.com"
                           value="<?= ($email) ?>">

                    <?php if (isset($errors['email'])): ?>
                        <div class="alert alert-danger alert-dismissible fade show mt-1">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <?= ($errors['email'])."
" ?>
                        </div>
                    <?php endif; ?>

                </div>

                <label><strong>Please check if you would like to build an SUV instead of a sedan</strong></label>
                <br>
                <input type="checkbox" id="suv" name="suv" value="suv">
                <label for="suv">Build a SUV</label>

            </div>

            <div class="col-lg-4">
                <div class="card mt-4">
                    <div class="card-body">
                        <p class="card-text"><b>Note:</b> All information entered is protected by our <a
                                href="https://en.wikipedia.org/wiki/Privacy_policy" target="_blank">privacy policy</a>.
                            Profile information can only be viewed by others with your permission.</p>
                        <p class="card-text"><b>Required:</b> Anything with a <b class="err">*</b> is required and needs
                            to be filled out.</p>
                    </div>
                </div>
            </div>

        </form>

        <div class="float-right p-2">
            <button type="submit" form="info" class="btn btn-dark">Next ></button>
        </div>

    </div>
</div>
</body>
</html>