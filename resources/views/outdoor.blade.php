<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Simplified Woodcrafting Solution</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="/css/home.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/swiper.css">


        <!-- ***** Header Area Start ***** -->
        <header class="header-area header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="main-nav">
                            <!-- ***** Logo Start ***** -->
                            <div class="row">
                                <div class="col-2">
                                    <img src="assets/images/logo.png" alt="Simplified Woodcrafting Solution" style="width: 150px;height: 105px">
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
    </head>
    <body>
        <!-- ***** Main Banner Area Start ***** -->
        <div class="main-banner" id="top">
            <video autoplay muted loop id="bg-video">
                <source src="assets/videoplayback.mp4" type="video/mp4" />
            </video>

            <div class="video-overlay header-text">
                <div class="caption">
                    <h6>Chair Times</h6>
                    <div class="main-button scroll-to-section">
                        <a href="#features">To THE VIDEO</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Main Banner Area End ***** -->    
        <script type="text/javascript" src="{{ url('js/bootstrap.min.js-preloader')}}"></script>
        <!-- Modal -->
        <div id="my" class="modal fade bd-example-modal-lg" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <!-- <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div> -->
              <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="row" id="myTable">
                    <input class="form-control" id="myInput" type="text" placeholder="Search..">
                    <table style="width:100%">
                        <tr>
                            <td class="dropdown-item" href="#">Lounge Chairs </td>
                            <td class="dropdown-item" href="#">Dining Tables </td>
                            <td class="dropdown-item" href="#">Sofas & Daybeds </td>
                            <td class="dropdown-item" href="#">Coffee Tables </td>
                        </tr>
                        <tr>
                            <td class="dropdown-item" href="#">Footrests & Stools </td>
                            <td class="dropdown-item" href="#">Desks </td>
                            <td class="dropdown-item" href="#">Bookcases & Cabinets </td>
                            <td class="dropdown-item" href="#">Children's Furniture </td>
                        </tr>
                        <tr>
                            <td class="dropdown-item" href="#">Furniture Accessories </td>
                            <td class="dropdown-item" href="#">Accessories </td>
                        </tr>
                    </table>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div> 
        <!-- ***** Features Item Start ***** -->
            <section class="section" id="features">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3">
                            <div class="section-heading">
                                <h2>Collection</h2>
                                <img src="assets/images/line-dec.png" alt="waves">
                                <p>jdbjkfbsakjfbbjkbdjf bdsb adbfabdfbab. You are allowed to use this layout for your business website.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ul class="features-items">
                                <li class="feature-item">
                                    <div class="left-icon">
                                        <img class="w-50" src="assets/images/features-first-icon.jpg" alt="First One">
                                    </div>
                                    <div class="right-content">
                                        <h4>Home Stories</h4>
                                        <p>Please do not re-distribute this template ZIP file on any template collection website. This is not allowed.</p>
                                        <a href="#" class="text-button">Discover More</a>
                                    </div>
                                </li>
                                <li class="feature-item">
                                    <div class="left-icon">
                                        <img class="w-50" src="assets/images/features-first-icon.jpg" alt="second one">
                                    </div>
                                    <div class="right-content">
                                        <h4> Solitary Lines</h4>
                                        <p>If you wish to support TemplateMo website via PayPal, please feel free to contact us. We appreciate it a lot.</p>
                                        <a href="#" class="text-button">Discover More</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="features-items">
                                <li class="feature-item">
                                    <div class="left-icon">
                                        <img class="w-50" src="assets/images/features-first-icon.jpg" alt="fourth muscle">
                                    </div>
                                    <div class="right-content">
                                        <h4>Autumn 2020</h4>
                                        <p>You may want to browse through <a rel="nofollow" href="https://templatemo.com/tag/digital-marketing" target="_parent">Digital Marketing</a> or <a href="https://templatemo.com/tag/corporate">Corporate</a> HTML CSS templates on our website.</p>
                                        <a href="#" class="text-button">Discover More</a>
                                    </div>
                                </li>
                                <li class="feature-item">
                                    <div class="left-icon">
                                        <img class="w-50" src="assets/images/features-first-icon.jpg" alt="training fifth">
                                    </div>
                                    <div class="right-content">
                                        <h4>Simplified Woodcrafting Solution Original</h4>
                                        <p>This template is built on Bootstrap v4.3.1 framework. It is easy to adapt the columns and sections.</p>
                                        <a href="#" class="text-button">Discover More</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ***** Features Item End ***** -->

            <!-- Swiper -->
              <div class="swiper-container" style="height: 60%;">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="card" style="width: 18rem;">
                      <img src="assets/images/5911.jpg" alt="" style="height: 250px;">
                    </div>  
                  </div>
                  <div class="swiper-slide" style="width: 232px;">
                    <div class="card" style="width: 18rem;">
                      <img src="assets/images/Cam_1.RGB.jpg" alt="" style="height: 250px;">
                    </div>
                  </div>
                  <div class="swiper-slide" style="width: 232px;">
                    <div class="card" style="width: 18rem;">
                      <img src="assets/images/Deck_Chair.jpg" alt="" style="height: 250px;">
                    </div>
                  </div>
                  <div class="swiper-slide" style="width: 232px;">
                    <div class="card" style="width: 18rem;">
                      <img src="assets/images/features-first-icon.jpg" alt="" style="height: 250px;">
                    </div>
                  </div>
                  <div class="swiper-slide" style="width: 232px;">
                    <div class="card" style="width: 18rem;">
                      <img src="assets/images/king_chair.png" alt="" style="height: 250px;">
                    </div>
                  </div>
                  <div class="swiper-slide" style="width: 232px;">
                    <div class="card" style="width: 18rem;">
                       <img src="assets/images/plastic-stackable.jpg" alt="" style="height: 250px;">
                    </div>
                  </div>
                  <div class="swiper-slide" style="width: 232px;">
                    <div class="card" style="width: 18rem;">
                        <img src="assets/images/wooden-chair.jpg" alt="" style="height: 250px;">
                    </div>
                  </div>
                  <div class="swiper-slide" style="width: 232px;">
                    <div class="card" style="width: 18rem;">
                      <img src="assets/images/Cam_1.RGB.jpg" alt="" style="height: 250px;">
                    </div>
                  </div>
                  <div class="swiper-slide" style="width: 232px;">
                    <div class="card" style="width: 18rem;">
                      <img src="assets/images/features-first-icon.jpg" alt="" style="height: 250px;">
                    </div>
                  </div>
                  <div class="swiper-slide" style="width: 232px;">
                    <div class="card" style="width: 18rem;">
                      <img src="assets/images/king_chair.png" alt="" style="height: 250px;">
                    </div>
                  </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
              </div>
            <!-- ***** Call to Action Start ***** -->
                <section class="section" id="call-to-action" style="background-image: url('../assets/images/cta-bg.jpg')">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <div class="cta-content">
                                    <h2>Don’t <em>think</em>, begin <em>today</em>!</h2>
                                    <p>Ut consectetur, metus sit amet aliquet placerat, enim est ultricies ligula, sit amet dapibus odio augue eget libero. Morbi tempus mauris a nisi luctus imperdiet.</p>
                                    <div class="main-button scroll-to-section">
                                        <a href="/outdoor">Outdoor Collection</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <!-- ***** Call to Action End ***** -->
            <!-- ***** Our Classes Start ***** -->
            <section class="section" id="our-classes">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3">
                            <div class="section-heading">
                                <h2>Back <em>to the Office</em></h2>
                                <img src="assets/images/line-dec.png" alt="">
                                <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
                            </div>
                        </div>
                    </div>
                    <section class="section" id="call-to-action" style="background-image: url('../assets/images/cta-bg.jpg')">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1">
                                    <div class="cta-content">
                                        <h2>Don’t <em>think</em>, begin <em>today</em>!</h2>
                                        <p>Ut consectetur, metus sit amet aliquet placerat, enim est ultricies ligula, sit amet dapibus odio augue eget libero. Morbi tempus mauris a nisi luctus imperdiet.</p>
                                        <div class="main-button scroll-to-section">
                                            <a href="#our-classes">Outdoor Collection</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- <div class="row" id="tabs">
                      <div class="col-lg-4">
                        <ul>
                          <li><a href='#tabs-1'><img src="assets/icon/sofa.jpg" alt="">Products for homes</a></li>
                          <li style="font-size: 15px"><a href='#tabs-2'>Products for Professionals</a></a></li>
                          <li><a href='#tabs-3'>New Products</a></a></li>
                          <li><a href='#tabs-4'>Designers & Architects</a></a></li>
                        </ul>
                      </div>
                      <div class="col-lg-8">
                        <section class='tabs-content'>
                          <article id='tabs-1'>
                            <img src="assets/images/maxresdefault.jpg" alt="First Class">
                            <h4>Professionals</h4>
                            <p>Phasellus convallis mauris sed elementum vulputate. Donec posuere leo sed dui eleifend hendrerit. Sed suscipit suscipit erat, sed vehicula ligula. Aliquam ut sem fermentum sem tincidunt lacinia gravida aliquam nunc. Morbi quis erat imperdiet, molestie nunc ut, accumsan diam.</p> -->
 <!--                            <div class="main-button">
                                <a href="#">View Schedule</a>
                            </div> -->
                          <!-- </article>
                        </section>
                      </div>
                    </div> -->
                </div>
            </section>
            <!-- ***** Our Classes End ***** -->
        

            <!-- ***** Testimonials Starts ***** -->
            <section class="section" id="trainers">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3">
                            <div class="section-heading">
                                <h2>We carefully select every product to create a catalog.</h2>
                                <img src="assets/images/line-dec.png" alt="">
                                <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="trainer-item">
                                <div class="image-thumb">
                                    <img src="assets/images/scandinavian.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <span>Strength Trainer</span>
                                    <h4>Bret D. Bowers</h4>
                                    <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                                    <ul class="social-icons">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="trainer-item">
                                <div class="image-thumb">
                                    <img src="assets/images/scandinavian-sofa.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <span>Muscle Trainer</span>
                                    <h4>Hector T. Daigl</h4>
                                    <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                                    <ul class="social-icons">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="trainer-item">
                                <div class="image-thumb">
                                    <img src="assets/images/ddcc0.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <span>Power Trainer</span>
                                    <h4>Paul D. Newman</h4>
                                    <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                                    <ul class="social-icons">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ***** Testimonials Ends ***** -->
            
            <!-- ***** Contact Us Area Starts ***** -->
            <section class="section" id="contact-us">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-xs-12">
                            <div id="map">
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.8671589833157!2d77.60179831413528!3d12.980347218199974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae16633d8614dd%3A0x4278e5b14a028fb5!2sFurniture%20Shops!5e0!3m2!1sen!2sin!4v1591815639175!5m2!1sen!2sin" width="100%" height="600px" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-xs-12">
                            <div class="contact-form">
                              @if(count($errors) > 0)
                                <div class="alert alert-danger">
                                  <ul>
                                    @foreach($errors->all() as $error)
                                      <li>{{$error}}</li>
                                    @endforeach
                                  </ul>
                                </div>
                              @endif
                              @if(\Session::has('success'))
                                <div class="alert alert-success">
                                  <p>{{ \Session::get('success') }}</p>
                                </div>  
                              @endif
                              <form id="contact" action="{{url('customerInfo')}}" method="post">
                                <!-- {{csrf_field()}} -->
                                <div class="row">
                                  <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                      <input name="customer_first_name" type="text" id="name" placeholder="First Name*" required="">
                                    </fieldset>
                                  </div>
                                  <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                      <input name="customer_last_name" type="text" id="name" placeholder="customer_last_name Name*" required="">
                                    </fieldset>
                                  </div>
                                  <div class="col-md-6 col-sm-12">
                                    <fieldset>    
                                      <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email*" required="">
                                    </fieldset>
                                  <span id="error_email"></span>
                                  </div>
                                  <div class="col-md-12 col-sm-12">
                                    <fieldset>
                                      <input name="numbers" type="text" id="MobileNo" placeholder="Mobile No">
                                    </fieldset>
                                  </div>
                                  <div class="col-md-12 col-sm-12">
                                    <fieldset>
                                      <input name="product_id" type="text" id="productId" placeholder="Product Id">
                                    </fieldset>
                                  </div>
                                  <div class="col-lg-12">
                                    <fieldset>
                                      <textarea name="description" rows="6" id="message" placeholder="Message" required=""></textarea>
                                    </fieldset>
                                  </div>
                                  <div class="col-lg-12">
                                    <fieldset>
                                      <button type="submit" id="form-submit" class="main-button" name="register">Send Message</button>
                                    </fieldset>
                                  </div>
                                  {{ csrf_field() }}
                                </div>
                              </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ***** Contact Us Area Ends ***** -->

        <!-- Swiper JS -->
        <script type="text/javascript" src="assets/js/swiper.js"></script>

        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper('.swiper-container', {
              slidesPerView: 'auto',
              slidesPerView: 3,
              spaceBetween: 30,
              navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
              },
              pagination: {
                el: '.swiper-pagination',
                clickable: true,
              },
              autoplay: {
                delay: 5000,
              },
            });
        </script>
            
            <!-- ***** Footer Start ***** -->
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <p>Copyright &copy; 2020 Simplified Woodcrafting Solution Pvt LTD</p>
                        </div>
                    </div>
                </div>
            </footer>

            <!-- jQuery -->
            <script src="assets/js/jquery-2.1.0.min.js"></script>

            <!-- Bootstrap -->
            <script src="assets/js/popper.js"></script>
            <script src="assets/js/bootstrap.min.js"></script>

            <!-- Plugins -->
            <script src="assets/js/scrollreveal.min.js"></script>
            <script src="assets/js/waypoints.min.js"></script>
            <script src="assets/js/jquery.counterup.min.js"></script>
            <script src="assets/js/imgfix.min.js"></script> 
            <script src="assets/js/mixitup.js"></script> 
            <script src="assets/js/accordions.js"></script>
            
            <!-- Global Init -->
            <script src="assets/js/custom.js"></script>
         
<!--         <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div> -->
    </body>
</html>

<script>
    $(document).ready(function() {
    $('#email').keyup(function(){
        var error_email = "";
        var email = $('#email').val();
        var _token = $('input[name="_token"]').val();

        if(_token) {
            $.ajax({
                url:"{{ route('email_available.check') }}",
                method:"POST",
                data:{email:email, _token:_token},
                success:function(result) {
                    if (result == 'unique') {                   
                        $('#error_email').html('<lable class="text-success">Email  Available</lable>');
                        $('#email').removeClass('has-error');
                        $('#form-submit').attr('disabled',false)
                    } else {
                        $('#error_email').html('<lable class="text-danger">Email id already registered </lable>');
                        $('#email').addClass('has-error');
                        $('#form-submit').attr('disabled','disabled')
                    }
                }

            })
        }
    });
});

    $(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });    
</script>
