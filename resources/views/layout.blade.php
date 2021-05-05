<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Inget.In</title>
        <link rel="icon" type="image/x-icon" href="assets/assets/img/logo-ingetin.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="assets/css/styles.css" rel="stylesheet" />
        <style>
        h2 {
            display: flex;
            align-items: center;
            font-weight: bold;
            margin-bottom:2rem;
            margin-top:2rem;
        }

        h2::after {
            content: '';
            flex: 1;
            margin-left: 1rem;
            height: 1px;
            background-color: #000;
        }

        .schedule{
            margin-bottom: 3rem;
        }

        input[type=number]{
            width: 50px;
        } 
</style>
    </head>
    <body>
        <!-- Navigation-->
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:#48c072" id="mainNav">
            <div class="container">
                <img src="assets/assets/img/logo-ingetin.png" alt="" class="navbar-brand" width=50px height=50px>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto" style="align-items:center">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Home</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Assignment</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Schedule</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Calendar</a></li>
                        <li class="nav-item">
                    <!-- <ul class="profile-wrapper">
                        <li>
                        user profile 
                        <div class="profile">
                            <img src="http://gravatar.com/avatar/0e1e4e5e5c11835d34c0888921e78fd4?s=80" />
                            <a href="http://swimbi.com" class="name">swimbi.com</a>
                            
                             more menu 
                            <ul class="menu">
                                <li><a href="#">Edit</a></li>
                                <li><a href="#">Change Password</a></li>
                                <li><a href="#">Log out</a></li>
                            </ul>
                        </div>
                    </li>
                </ul> -->
                        <a class="nav-link js-scroll-trigger" href="#team"><img src="assets/assets/img/user.png" alt="" width=50px height=50px></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        </div>
        <br><br><br><br><br>
        @yield('content')
        <!-- Footer-->
        <div class="position-sticky">
            <footer class="footer py-4">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 text-lg-left">Copyright © Inget.In 2021</div>
                        <div class="col-lg-6 text-lg-right">
                            <a class="mr-3" href="#!">Privacy Policy</a>
                            <a href="#!">Terms of Use</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="assets/js/scripts.js"></script>
    </body>
</html>