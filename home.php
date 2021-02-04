<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}

?>


<!doctype html>
<html lang="en">

<head>
    <title>The Kitchen Cafe</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="home.css">
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <section>
        <div class="cover">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d-flex align-items-center">
                        <p class="mb-0 phone pl-md-2">
                            <a href="#" class="mr-2">
                                <i class="fas fa-phone mr-1"></i>
                                +91 91 0123 456
                            </a>
                            <a href="#"><i class="fas fa-paper-plane mr-1"></i>
                                thekitchencafe@email.com
                            </a>
                        </p>
                    </div>
                    <div class="col-md-6 d-flex justify-content-md-end">
                        <div class="social-icon mr-4">
                            <p class="mb-0 d-flex">
                                <a href="#" class="d-flex align-items-center 
                                    justify-content-center">
                                    <i class="fab fa-facebook"></i></a>
                                <a href="#" class="d-flex align-items-center
                                    justify-content-center">
                                    <i class="fab fa-instagram"></i></a>
                                <a href="#" class="d-flex align-items-center
                                    justify-content-center">
                                    <i class="fab fa-twitter"></i></a>
                            </p>
                        </div>
                        <div class="reg">
                            <a href="logout.php">Log out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--Nav-->
        <nav class="navbar navbar-expand-lg main-navbar bg-color main-navbar-color" id="main-navbar">
            <div class="container">
                <a class="navbar-brand" href="#hero">The Kitchen Cafe</a>
                <div class="order-lg-last btn-group">
                    <i class="fas fa-shopping-bag fa-2x"></i>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNav"
                    aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="myNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="#hero" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#variety" class="nav-link">Categories</a>
                        </li>
                        <li class="nav-item">
                            <a href="#book-section img" class="nav-link">Booking</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--End of Nav-->
    </section>
    <!---Hero Section-->
    <section id="hero">
        <div class="hero-container">
            <div class="hero-logo">
                <h1 class="font-weight-bold">Take Away</h1>
            </div>
            <h2 class="font-weight-bold">Get Food Delivered AT Your HOME</h2>
            <div class="actions">
                <a href="order.html" class="btn-get-started bg-warning">Order Now</a>
            </div>
        </div>
    </section>
    <!---End of Hero Section-->

    <!--Variety----->
    <section id="variety" class="variety pt-4">
        <div class="container">
            <div class="section-title">
                <h1 class="text-center font-weight-bold">Categories</h1></br></br></br>
                <h2>Main Course</h2>
            </div></br></br>
            <div class="row">
                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="card">
                        <div class="card-img">
                            <img src="Images/salad.jpg" alt="">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a>Salad Kinds</a>
                            </h5>
                            <p class="card-text">
                                A salad is a dish consisting of pieces of food in a mixture,
                                sometimes with at least one raw ingredient. It is often dressed,
                                and is typically served at room temperature or chilled,
                                though some can be served warm.
                            </p>
                        </div>
                    </div>
                </div>
                <!---->
                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="card">
                        <div class="card-img">
                            <img src="Images/nonv.jpg" alt="">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a>Non veg Dishes</a>
                            </h5>
                            <p class="card-text">
                                Here's presenting our best non-vegetarian dishes to help you get started.
                                From mutton and pork to chicken and fish, there's something for everyone.
                                you will get mouth-watering non-vegetarian dishes that are tasty.
                            <ul>
                                <li>Biryani : food that has so many types of tastes in it.</li>
                                <li>Chicken : If you want to taste something very spicy</li>
                                <li>Mutton : The dish is bursting with flavours</li>
                                <li>Fish : Authentic flavours of Goan cuisine</li>
                            </ul>


                            </p>
                        </div>
                    </div>

                </div>
                <!---->
                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="card">
                        <div class="card-img">
                            <img src="Images/berger.jpg" alt="">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a>Fast food</a>
                            </h5>
                            <p class="card-text">
                                Fast food menus are tricky when you’re watching your weight or your health.
                                Finding a healthy, well-balanced meal in most fast food restaurants is a challenge.
                                But there are always choices you can make that are healthier than others.
                            </p>
                        </div>
                    </div>

                </div>
                <!---->
                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="card">
                        <div class="card-img">
                            <img src="Images/curry.jpg" alt="">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a>Curry Dishes</a>
                            </h5>
                            <p class="card-text">
                                Try one of our best ever curry recipes.
                                Vegetables add great splashes of colour and create lighter and more interesting dishes.
                                Serve with some delicious stuffed naan on the side.

                            </p>
                        </div>
                    </div>
                    </br>
                </div>
                <!---->
            </div>
        </div>
    </section>
    <!---End of Variety-->





    <!--Blog Section-->
    <section id="blog-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 blog-heading text-center">
                    <h2>Desserts</h2>
                </div>
            </div>
            </br>
            <div class="row d-flex">
                <div class="col-lg-6 d-flex align-items-stretch">
                    <div class="blog-start d-flex">
                        <a href="#" class="block-20 img" style="background-image: url('Images/ice cream.jpg');">
                        </a>
                        <div class="text p-4 bg-light">
                            <div class="des">
                            </div>
                            <h3 class="heading mb-3">
                                <a href="#">
                                    Ice Cream
                                </a>
                            </h3>
                            <p>Our huge range of ice cream flavours are made with real, high quality ingredients.
                                All of our ice cream flavours are suitable for vegetarians,
                                and if you’re dairy-free then we always have a few sorbets available for you to enjoy.
                            </p>
                        </div>
                    </div>
                </div>
                <!----->
                <div class="col-lg-6 d-flex align-items-stretch">
                    <div class="blog-start d-flex">
                        <a href="#" class="block-20 img" style="background-image: url(Images/sweets.png);">
                        </a>
                        <div class="text p-4 bg-light">
                            <div class="des">
                            </div>
                            <h3 class="heading mb-3">
                                <a href="#">
                                    Sweets
                                </a>
                            </h3>
                            <p>Sweet desserts are fried foods made with sugar, milk or condensed milk. Ingredients or
                                preferred types of fruit
                                Many are flavoured with almonds and pistachios and decorated with nuts or with gold or
                                silver leaf.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </br></br></br></br>
    </section>

    <!---book--><br>
    <section id="book-section img" style="background:#FFFFF8">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-12 make-reservation px-md-5 pb-md-3">
                    <div class="heading-section mb-5 text-center">
                        <h1 class="mb-4">Make A Reservation</h1>
                    </div>
                </div>
                <div class="col-md-12 mt-3">
                    <div class="form-group text-center">
                        <div class="actions">
                            <a href="booking.html" class="btn-book">BOOK NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </br></br></br></br></br>


        <footer>
            <div class="center">
                Copyright &copy; www.kitchencafe.com All rights reserved!
            </div>
        </footer>

    </section>

</html>