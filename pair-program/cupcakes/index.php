<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Cupcake Fundraiser</title>
</head>
<body>

<div id="main" class="container mt-5">

    <h1>Cupcake Fundraiser</h1>

    <form action="validation.php" method="post">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <?php

        $options = array("The Grasshopper", "Whiskey Maple Bacon", "Carrot Walnut", "Salted Caramel Cupcake", "Red Velvet", "Lemon Drop", "Tiramisu");
        foreach ($options as $option) {
            echo "<div class=\"form-check\">
            <input class=\"form-check-input\" 
                   type=\"checkbox\" 
                   name=\"options[]\" 
                   id=\"$option\" 
                   value=\"$option\">
            <label class=\"form-check-label\" 
                   for=\"$option\">" . ucfirst($option) . "</label>
        </div>";    // ucfirst() — Make a string's first character uppercase
        }
        ?>

        <button type="submit" class="btn btn-primary mt-3">Order</button>
    </form>

</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>
</html>