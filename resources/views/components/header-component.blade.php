<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Merriweather:wght@300&display=swap"
            rel="stylesheet">
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300&family=Merriweather:wght@300&family=Mohave:wght@300;700&display=swap"
            rel="stylesheet">
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300&family=Merriweather:wght@300&family=Mohave:wght@500&display=swap"
            rel="stylesheet">
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300&family=Merriweather:wght@300&family=Mohave:ital,wght@0,300;0,700;1,300&display=swap"
            rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300&family=Merriweather:wght@300&display=swap"
            rel="stylesheet">
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300&family=Merriweather:wght@300&family=Mohave:wght@300;400;700&display=swap"
            rel="stylesheet">
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300&family=Merriweather:wght@300&family=Mohave:ital,wght@0,700;1,300&display=swap"
            rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" href="assets/css/nav.css" />
        <link rel="stylesheet" href="assets/css/front.css" />
        <link rel="stylesheet" href="assets/css/welcome.css" />
        <link rel="stylesheet" href="assets/css/navbar.css">
        <link rel="stylesheet" href="assets/css/slider.css">
        <link rel="stylesheet" href="assets/css/great_pics.css">
        <link rel="stylesheet" href="assets/css/footer.css">
        <link rel="stylesheet" href="assets/css/style.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <title>Le-yurt</title>
        <link rel="apple-touch-icon" sizes="180x180" href="/assets/faveicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/assets/faveicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/faveicons/favicon-16x16.png">
        <link rel="manifest" href="/assets/faveicons/site.webmanifest">
        <link rel="mask-icon" href="/assets/faveicons/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">


    </head>

    <body>
        <div class="navbar">
            <section class="Second_navbar">
                <nav>
                    <a href="#">
                        <img src="{{ asset('assets/images/footer-logo.jpg') }}" alt="">
                    </a>
                    <input type="checkbox" id="click">
                    <label for="click">
                        &#9776;
                    </label>
                    <ul>
                        <li>
                            <a href="/" class="nav-link {{ request()->is('/') ? 'active-nav' : '' }}">Home</a>
                        </li>
                        <li>
                            <a href="#" class="nav-link ">About Us</a>
                        </li>
                        <li>
                            <a href="#" class="nav-link">Our Services</a>
                        </li>
                        <li>
                            <a href="#" class="nav-link">News</a>
                        </li>
                        <li>
                            <a href="#" class="nav-link">Blog</a>
                        </li>
                        <li>
                            <a href="#" class="nav-link">Contact Us</a>
                        </li>
                    </ul>
                </nav>
            </section>
            <nav class="navbar_container">
                <div class="first_list">
                    <ul>
                        <li>
                            <a href="/" class="nav-link  {{ request()->is('/') ? 'active-nav' : '' }}">Home</a>
                        </li>
                        <li>
                            <a href="#" class="nav-link">About Us</a>
                        </li>
                        <li>
                            <a href="#" class="nav-link">Our Services</a>
                        </li>
                    </ul>
                </div>
                <div class="logo_icon">
                    <img src="{{ asset('assets/images/footer-logo.jpg') }}" alt="" />
                </div>
                <div class="second_list">
                    <ul>
                        <li>
                            <a href="#">News</a>
                        </li>
                        <li>
                            <a href="blog">Blog</a>
                        </li>
                        <li>
                            <a href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>