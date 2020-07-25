<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SIMPLIFIED WOODCRAFTING SOLUTION PVT LTD</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="/css/home.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/swiper.css">

        <!-- ***** Header Area Start ***** -->
        <header class="header-area header-sticky px-3 background-header">
            <div class="header">
                <div class="container-header">
                    <div class="row">
                        <div class="col-12">
                            <nav class="main-nav">
                                <!-- ***** Logo Start ***** --> 
                                <div class="row">
                                    <div class="col-10 col-sm-3">
                                        <!-- <a href="{{URL::to('/')}}">
                                            <img class="classic-logo" src="assets/images/logo.png" alt="Simplified Woodcrafting Solution">
                                        </a> -->
                                        <a href="index.html" class="logo">Simplified <em> Woodcrafting </em></a>   
                                    </div>
                                    <a class='menu-trigger'>
                                        <span>Menu</span>
                                    </a>
                                    <!-- <ul class="nav">
                                        <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                                        <li class="scroll-to-section"><a href="#features">About</a></li>
                                        <li class="scroll-to-section"><a href="#our-classes">Classes</a></li>
                                        <li class="scroll-to-section"><a href="#schedule">Schedules</a></li>
                                        <li class="scroll-to-section"><a href="#contact-us">containerct</a></li> 
                                        <li class="main-button"><a href="#">Sign Up</a></li>
                                    </ul>  -->
                                    <div class="col-sm-9 header-links nav px-0">
                                        <div class="d-block d-sm-none">
                                            @include('header.mob-index')
                                            @include('header.mobile-header')
                                        </div>
                                        <div class="col-sm-9 d-none d-sm-block" style="    position: static;">    
                                                @include('header.nav-bar')
                                            </div>
                                            <div class="col-sm-3 d-none d-sm-block">
                                                @include('header.index')
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ***** Menu End ***** -->
                            </nav>
                        </div>
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

/*            .swiper-slide {
                height: 25vh;
            }*/
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
        <!-- <div class="main-banner" id="top">
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
 -->        <!-- ***** Main Banner Area End ***** --> 
        <!-- Swiper -->
        <div id="top" class="product-banner" style="margin-top: 60px;">
         <!-- Swiper -->
          <div class="swiper-container-banner">
            <div class="swiper-wrapper">
              <div class="swiper-slide" id="call-to-action" style="background-image: url('../assets/banner/E1.JPG')">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <div class="cta-content">
                                    <h2>Play</h2>
                                    <div class="main-button scroll-to-section">
                                        <a href="/outdoor">Play Collection</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
              </div>
              <div class="swiper-slide" id="call-to-action" style="background-image: url('../assets/banner/A5.JPG')">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <div class="cta-content">
                                    <h2>Back <em> to School</em></h2>
                                    <div class="main-button scroll-to-section">
                                        <a href="/outdoor">School Collection</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
              </div>
              <div class="swiper-slide" id="call-to-action" style="background-image: url('../assets/banner/B1.JPG')">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <div class="cta-content">
                                    <h2>Work</h2>
                                    <div class="main-button scroll-to-section">
                                        <a href="/outdoor">Work</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
              </div>
              <div class="swiper-slide" id="call-to-action" style="background-image: url('../assets/banner/C3.JPG')">
              </div>
               <div class="swiper-slide" id="call-to-action" style="background-image: url('../assets/banner/D1.JPG')">
              </div>
            </div>       
            <!-- Add Arrows -->
            <div class="swiper-button-next slider-btn">
            </div>
            <div class="swiper-button-prev slider-btn"></div>
            <!-- Add Pagination -->
            <div class="swiper-pagination swiper-pagination-white"></div>
          </div>
        </div>  
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
            <!-- <section class="section" id="features">
                                <li class="feature-item">
                                    <div class="left-icon">
                                        <a href="{{URL::to('/Autumn')}}">
                                            <img class="w-50" src="assets/images/features-first-icon.jpg" alt="second one">
                                        </a>  -->
        <!-- ***** Features Item End ***** -->


            <!-- ***** Testimonials Starts ***** -->
            <section class="section" id="trainers">
                <div class="container mb-5">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3">
                            <div class="section-heading">
                                <h2>@lang('home.New Arrivals')</h2>
                                <img src="assets/images/line-dec.png" alt="">
                                <p>check out latest designs & styles online for best prices in India.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="trainer-item">
                                <div class="image-thumb">
                                    <a href="{{URL::to('/HomeStories')}}">
                                        <img src="assets/banner/new/A3.jpg" alt="">
                                    </a>    
                                </div>
                                <div class="down-content">
                                    <span>Strength Trainer</span>
                                    <h4>Bret D. Bowers</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="trainer-item">
                                <div class="image-thumb">
                                    <img src="assets/banner/new/B2.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <span>Muscle Trainer</span>
                                    <h4>Hector T. Daigl</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="trainer-item">
                                <div class="image-thumb">
                                    <img src="assets/banner/new/C2.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <span>Power Trainer</span>
                                    <h4>Paul D. Newman</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ***** Testimonials Ends ***** -->

            <!-- Swiper -->
              <div class="swiper-container" id="products-list" style="height: 40%;">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="card" style="width: 18rem;">
                      <img class="items" src="assets/banner/bg-removed/A1.png" alt="">
                    </div>  
                  </div>
                  <div class="swiper-slide" style="width: 232px;">
                    <div class="card" style="width: 18rem;">
                      <img class="items" src="assets/banner/bg-removed/C2.png" alt="">
                    </div>
                  </div>
                  <div class="swiper-slide" style="width: 232px;">
                    <div class="card" style="width: 18rem;">
                      <img class="items" src="assets/banner/bg-removed/D1.png" alt="">
                    </div>
                  </div>
                  <div class="swiper-slide" style="width: 232px;">
                    <div class="card" style="width: 18rem;">
                        <img class="items" src="assets/images/wooden-chair.jpg" alt="">
                    </div>
                  </div>
                  <div class="swiper-slide" style="width: 232px;">
                    <div class="card" style="width: 18rem;">
                      <img class="items" src="assets/banner/bg-removed/B8.png" alt="">
                    </div>
                  </div>
                  <div class="swiper-slide" style="width: 232px;">
                    <div class="card" style="width: 18rem;">
                      <img class="items" src="assets/banner/bg-removed/E1-removebg.png" alt="">
                    </div>
                  </div>
                </div>       
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
              </div>
            <!-- ***** Call to Action Start ***** -->
                <!-- <section class="section" id="call-to-action" style="background-image: url('../assets/banner/E1.JPG')">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <div class="cta-content">
                                    <h2>Play</h2>
                                    <div class="main-button scroll-to-section">
                                        <a href="/outdoor">Play Collection</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> -->
            <!-- ***** Call to Action End ***** -->
            <section class="section">
                <div>
                    <div class="col-lg-6 offset-lg-3">
                        <div class="section-heading">
                            <h2>Sample <em> 1 </em></h2>
                            <img src="assets/images/line-dec.png" alt="">
                            <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
                        </div>
                    </div>
                </div>
                <section class="section parallax" id="category" style="background-image: url('../assets/banner/A5.JPG')">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <div class="cta-content">
                                    <h2>sample 1</h2>
                                    <div class="main-button scroll-to-section">
                                        <a href="/outdoor">laoreet ut</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </section>    
            <!-- ***** Our Classes Start ***** -->
            <section class="section" id="our-classes">
                <div>
                    <div class="col-lg-6 offset-lg-3">
                        <div class="section-heading">
                            <h2>OFFICE <em> FURNITURE </em></h2>
                            <img src="assets/images/line-dec.png" alt="">
                            <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
                        </div>
                    </div>
                </div>
                <section class="section parallax" id="category" style="background-image: url('../assets/banner/work-B1.jpg')">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <div class="cta-content">
                                    <h2>Work</h2>
                                    <div class="main-button scroll-to-section">
                                        <a href="/outdoor">OFFICE Collection</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
            
            <!-- ***** Contact Us Area Starts ***** -->
            <section class="section" id="contact-us">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-4 col-xs-12 mb-2">
                            <div id="map">
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.8671589833157!2d77.60179831413528!3d12.980347218199974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae16633d8614dd%3A0x4278e5b14a028fb5!2sFurniture%20Shops!5e0!3m2!1sen!2sin!4v1591815639175!5m2!1sen!2sin" width="100%" height="305px" frameborder="0" style="border:0" allowfullscreen></iframe>
                              <div class="p-4">
                                  <p>Follow Us</p>
                                    <a href="" class="p-2"> 
                                        <img class="social-icons" src="assets/icon/facebook-100.png" alt="facebook">
                                    </a>
                                    <a href="" class="p-2"> 
                                        <img class="social-icons" src="assets/icon/instagram-old-100.png" alt="instagram">
                                    </a>
                                    <a href="" class="p-2">
                                        <img class="social-icons" src="assets/icon/linkedin-100.png" alt="linkedin">
                                    </a>
                                    <a href="" class="p-2"> 
                                        <img class="social-icons" src="assets/icon/twitter-100.png" alt="twitter">
                                    </a>
                                    <a href="" class="p-2">
                                        <img class="social-icons" src="assets/icon/youtube-100.png" alt="youtube">
                                    </a>
                               </div>     
                            </div>
                        </div>
                        <div class="offset-sm-1 col-lg-5 col-md-3 col-xs-12">
                            @include('customer.form-page')
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
              slidesPerView: window.innerWidth > 500 ? 6 : 1,
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
                delay: 2500,
              },
            });
        </script>

                <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper('.swiper-container-banner', {
              slidesPerView: 'auto',
              slidesPerView: window.innerWidth > 500 ? 1 : 1,
              spaceBetween: 30,
              navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
              },
              pagination: {
                el: '.swiper-pagination',
                clickable: true,
              },
            });
        </script>
            
            <!-- ***** Footer Start ***** -->
            <footer class="footer-section">
                <div class="d-none d-sm-block">
                    @include('footer.index')
                </div>
                <div class="d-block d-sm-none">
                    @include('footer.mobile-index')
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
    </body>
</html>

<script>
    $(document).ready(function() {
        // $('[data-toggle="tooltip"]').tooltip()    
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
