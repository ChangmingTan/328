<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Build Your Dream BMW</title>
    <?php echo $this->render('includes/header.html',NULL,get_defined_vars(),0); ?>
</head>
<body>

<div class="container bg-white">
    <div class="jumbotron">
        <h1 class="display-4">Welcome to Build your Dream BMW!</h1>
        <p class="lead">This is a Web Application that allows you to build the dream BMW with any modifications you would
            like!</p>
        <hr class="my-4">
        <p>This company was established in 2020 and has started with two people that love the way BMWs look and decided
            to make a company that allows their customer to build their dream BMW. It started with just an idea and just
            kept on growing ever since.</p>
        <div class="text-center">
            <a href="information" class="btn btn-dark align-content-center mt-5">Build your dream BMW now!</a>
        </div>
    </div>

    <div>
        <h4 class="text-center">Examples of our work</h4>
    </div>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/bmw_m6.jpg" alt="BMW M8">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/bmw_m4.jpg" alt="BMW M4">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/bmw_m5.jpg" alt="BMW M5">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <br>

    <!-- Footer -->
    <footer class="page-footer font-small">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="https://mdbootstrap.com/"> DreamBMW.com</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
</div>

</body>
</html>