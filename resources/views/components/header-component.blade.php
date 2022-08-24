<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="/assets/mohive.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
    {{-- font-awsome link --}}
    <link rel="stylesheet" href="/assets/libaries/fontawesome-free-6.0.0-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="/assets/libaries/fontawesome-free-6.0.0-web/css/all.min.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Le-yurt</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/faveicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/faveicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/faveicons/favicon-16x16.png">
    <link rel="manifest" href="/assets/faveicons/site.webmanifest">
    <link rel="mask-icon" href="/assets/faveicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <style>
        .alert {
            width: 30%;
            padding: 20px;
            background-color: #1819158f;
            color: rgb(33, 195, 90);
            position: absolute;
            top: 80px;
            opacity: 0.5;
        }

        .closebtn {
            margin-left: 15px;
            color: rgb(33, 195, 90);
            font-weight: bold;
            float: right;
            font-size: 22px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
        }

        .closebtn:hover {
            color: black;
        }
    </style>
</head>

<body id="text">
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
                        <a href="about" class="nav-link {{ request()->is('about') ? 'active-nav' : '' }}">About Us</a>
                    </li>
                    <li>
                        <a href="{{ url('Ourservice') }}" class="nav-link">Our Services</a>
                    </li>
                    <li>
                        <a href="yurts" class="nav-link {{ request()->is('Yurts') ? 'active-nav' : '' }}">Yurts</a>
                    </li>
                    <li>
                        <a href="experiences"
                            class="nav-link {{ request()->is('experiences') ? 'active-nav' : '' }}">Experience</a>
                    </li>
                    <li>
                        <a href="news" class="nav-link {{ request()->is('news') ? 'active-nav' : '' }}">News</a>
                    </li>
                    <li>
                        <a href="blog" class="nav-link {{ request()->is('blog') ? 'active-nav' : '' }}">Blog</a>
                    </li>
                    <li>
                        <a href="contectUs"
                            class="nav-link {{ request()->is('contectUs') ? 'active-nav' : '' }}">Contact Us</a>
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
                        <a href="about" class="nav-link {{ request()->is('about') ? 'active-nav' : '' }}">About
                            Us</a>
                    </li>
                    <li>
                        <a href="{{ 'Ourservice' }}"
                            class="nav-link {{ request()->is('Ourservice') ? 'active-nav' : '' }}">Our Services</a>
                    </li>
                    <li>
                        <a href="yurts" class="nav-link {{ request()->is('yurts') ? 'active-nav' : '' }}">Yurts</a>
                    </li>
                    <li>
                        <a href="experiences"
                            class="nav-link {{ request()->is('experiences') ? 'active-nav' : '' }}">Experience</a>
                    </li>
                </ul>
            </div>
            <div class="logo_icon">
                <a href="/"><img src="{{ asset('assets/images/footer-logo.jpg') }}" alt="" /></a>
            </div>
            <div class="second_list">
                <ul>
                    <li>
                        <a href="news" class="nav-link {{ request()->is('news') ? 'active-nav' : '' }}">News</a>
                    </li>
                    <li>
                        <a href="blog" class="nav-link {{ request()->is('blog') ? 'active-nav' : '' }}">Blog</a>
                    </li>
                    <li>
                        <a href="contectUs" class="nav-link {{ request()->is('contectUs') ? 'active-nav' : '' }}">Contact
                            Us</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
