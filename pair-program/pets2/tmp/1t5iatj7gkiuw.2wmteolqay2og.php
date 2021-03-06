<!doctype html>
<html lang="en">
<head>
    <title>Pet Order</title>
    <?php echo $this->render('includes/header.htm',NULL,get_defined_vars(),0); ?>
</head>
<body>
<div class="container">
    <h1>Order a Pet</h1>

    <form action="#" method="post" class="form-horizontal">

        <!-- get pet -->
        <div class="form-group">
            <label for="pet" class="col-sm-2 control-label">What kind of pet would you like to order?</label>

            <div class="col-sm-4">
                <input class="form-control" type="text" name="pet" id="pet">
            </div>
        </div>

        <!-- get color -->
        <div class="form-group">
            <label class="col-sm-2 control-label">Select a color</label>

            <label class="col-sm-4">
                <select class="col-sm-4" name="color">
                    <option id="none" value="none"> -select-</option>
                    <option id="purple" value="purple"> Purple</option>
                    <option id="black" value="black"> Black</option>
                    <option id="white" value="white"> White</option>
                </select>
            </label>
        </div>

        <div class="col-xs-3 ">
            <input class="form-control btn btn-default" type="submit" value="Place Order">
        </div>
    </form>
</div>
</body>
</html>