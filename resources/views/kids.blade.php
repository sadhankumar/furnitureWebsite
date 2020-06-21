<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Classic Spaces And Products</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="/css/home.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/swiper.css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Gotham';
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .kids-session {
                width: 100%;
                height: 100vh;
                background: url(assets/images/kids/background.jpg);
                background-attachment: fixed;
            }
        </style>

        <!-- ***** Preloader Start ***** -->
<!--             <div id="js-preloader" class="js-preloader">
              <div class="preloader-inner">
                <span class="dot"></span>
                <div class="dots">
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
              </div>
            </div> -->
            <!-- ***** Preloader End ***** -->

        <!-- ***** Header Area Start ***** -->
            <header class="header-area header-sticky">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <nav class="main-nav">
                                <!-- ***** Logo Start ***** -->
                                <div class="row">
                                    <div class="col-2">
                                        <img src="assets/images/logo.png" alt="Classic Spaces And Products" style="width: 150px;height: 105px">
                                    </div>
                                    <div class="col-7 header-links">
                                        <a id="" class="sub-header" title="Products" id="dropdownMenuButton" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">Products</a>
                                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <div class="row" id="myTable">
                                                <div class="col-3">
                                                    <h5 class="px-4"> Chairs </h5>
                                                    <a class="dropdown-item" href="#">Lounge Chairs </a>
                                                    <a class="dropdown-item" href="#">Dining Tables </a>
                                                    <a class="dropdown-item" href="#">Sofas & Daybeds </a>
                                                    <a class="dropdown-item" href="#">Coffee Tables </a>
                                                </div>
                                                <div class="col-5">
                                                    <h5 class="px-4"> Outdoor Furniture  </h5>
                                                    <a class="dropdown-item" href="#">Footrests & Stools </a>
                                                    <a class="dropdown-item" href="#">Desks </a>
                                                    <a class="dropdown-item" href="#">Bookcases & Cabinets </a>
                                                    <a class="dropdown-item" href="#">Children's Furniture </a>
                                                </div>
                                                <div class="col-4 pl-0">
                                                    <h5 class="px-4"> Lighting </h5>
                                                    <a class="dropdown-item" href="#">Furniture Accessories </a>
                                                    <a class="dropdown-item" href="#">Accessories </a>
                                                </div>   
                                            </div>
                                          </div>
                                        <a id="" class="sub-header" target="" href="#features" title="Products">Living</a> 
                                        <a id="" class="sub-header" target="" href="#top" title="Products">Professionals</a> 
                                        <a id="" class="sub-header" target="" href="#top" title="Products">About Us</a>
                                        <a id="" class="sub-header" target="" href="#top" title="Products">Magazine</a>
                                    </div>
                                    <!-- Trigger the modal with a button -->
                                    <div class="col-3 header-icons">
                                        <i class="fa fa-search fa-6 icons" data-toggle="modal" data-target="#my">
                                        </i>
                                        <a class="fa fa-map-marker-alt fa-6 icons" aria-hidden="true"
                                            target="" href="#contact-us"></a>
                                        <i class="fa fa-phone fa-6 icons" aria-hidden="true"></i>
                                    </div>    
                                </div>     
                                <!-- <a href="index.html" class="logo"><em>Classic Spaces And Products</em></a> -->
                                <!-- ***** Logo End ***** -->
                                <!-- ***** Menu Start ***** -->
                                <!-- <ul class="nav"> -->
                                    <!-- <li class="scroll-to-section"><a href="#top" class="active">Products</a></li> -->
                                    <!-- <li class="scroll-to-section"><a href="#features">Living</a></li> -->
                                    <!-- <li class="scroll-to-section"><a href="#our-classes">Classes</a></li> -->
                                    <!-- <li class="scroll-to-section"><a href="#schedule">Schedules</a></li> -->
                                    <!-- <li class="scroll-to-section"><a href="#contact-us">Contact</a></li>  -->
                                    <!-- <li class="main-button"><a href="#">Sign Up</a></li> -->
                                <!-- </ul>         -->
                                <a class='menu-trigger'>
                                    <span>Menu</span>
                                </a>
                                <!-- ***** Menu End ***** -->
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
        <!-- ***** Header Area End ***** -->    
    </head>
    <body>
        <div class="container kids-session" style="margin-top: 6%;">
            <ul id="scene">
                <li class="layer" data-depth="1">
                    <img style="width: 100%;" src="assets/images/kids/planet2.png">
                </li>
                <li class="layer" data-depth="0.2">
                    <img style="width: 100%;" src="assets/images/kids/rocket.png">
                </li>
                <li class="layer" data-depth="2">
                    <img style="width: 100%;" src="assets/images/kids/astronaut.png">
                </li>
                <li class="layer" data-depth="0.5">
                    <img style="width: 100%;" src="assets/images/kids/planet1.png">
                </li>
            </ul>    
        </div>    
        <script type="text/javascript" src="assets/js/parallax.js"></script>
        <script type="text/javascript">
            var scene = document.getElementById('scene');
            var parallax =  new Parallax(scene);
        </script>
    </body>
</html>
