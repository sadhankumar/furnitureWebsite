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
        <link rel="stylesheet" href="/css/homeStories.css">
        <link rel="stylesheet" href="/css/grandRelax.css">

        <!-- ***** Header Area Start ***** -->
        <header class="header-area header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="main-nav">
                            <!-- ***** Logo Start ***** -->
                            <div class="row">
                                <div class="col-2">
                                    <a href="{{URL::to('/')}}">
                                        <img src="assets/images/logo.png" alt="Simplified Woodcrafting Solution" style="width: 150px;height: 105px">
                                    </a>    
                                </div>
                                <div class="col-7 header-links">
                                    <a id="" class="sub-header" title="Products" id="dropdownMenuButton" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Products</a>
                                    <div class="dropdown-menu flyout" aria-labelledby="dropdownMenuButton">
                                    <div class="row" id="myTable">
                                        <div class="col-3">
                                            <div class="product_header px-4"> Chairs </div>
                                            <a class="dropdown-item" href="#">Lounge Chairs </a>
                                            <a class="dropdown-item" href="#">Dining Tables </a>
                                            <a class="dropdown-item" href="#">Sofas & Daybeds </a>
                                            <a class="dropdown-item" href="#">Coffee Tables </a>
                                        </div>
                                        <div class="col-5">
                                            <div class="product_header px-4"> Outdoor Furniture </div>
                                            <a class="dropdown-item" href="#">Footrests & Stools </a>
                                            <a class="dropdown-item" href="#">Desks </a>
                                            <a class="dropdown-item" href="#">Bookcases & Cabinets </a>
                                            <a class="dropdown-item" href="#">Children's Furniture </a>
                                        </div>
                                        <div class="col-4 pl-0">
                                            <div class="product_header px-4"> Lighting </div>
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
                            </div>    
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
    </head>
    <body>
        <!-- ***** Main Banner Area Start ***** -->
        <div class="main-banner" id="home-top">
<!--             <div id="bg-banner">
                <img src="assets/images/homeStories.jpg">
            </div>  -->   
            <!-- <video autoplay muted loop id="bg-banner">
                <source src="assets/videoplayback.mp4" type="video/mp4" />
            </video> -->
            <section class="section" id="product-list">
                <div class="container">
                    <div class="right-content row">
                        <div class="col-4 text-left pt-5">
                            <h4>CH24 | WISHBONE CHAIR</h4>
                            <p>The very first model Hans J. Wegner designed exclusively for Carl Hansen & Søn in 1949, the CH24 or Wishbone Chair, has been in continuous production since its introduction in 1950.</p>
                        </div>
                        <div class="col-6">
                            <div class="left-icon">
                                <img class="w-100" src="assets/images/product/items/21065000.jpg" alt="First One">
                            </div>
                        </div>    
                    </div>
                </div>
            </section>
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
            <section class="section" id="items_list">
                <div class="container">
                    <div class="row">
                        <div class="section-heading">
                            <h4>During the summer months, a home transforms into a haven, a calm place to enjoy cooling breezes and balmy nights with friends and family, or even in blissful solitude. Throw open your windows and doors and let the season in!
                            </h4>
                            <img src="assets/images/line-dec.png" alt="waves">
                            <p>Home Stories for Summer presents a selection of products and accessories from the Vitra Home Collection that will help you make the most of summer by creating that holiday feeling in your own home. Brighten your interior with inviting sofas, graceful dining chairs and accessories in natural materials such as cork and marble.
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-3 product_list">
                                <div class="items_product">
                                    <a href="{{URL::to('/HomeStories')}}">
                                        <img class="w-100" src="assets/images/product/21064500_PREUNG120-04.jpg" alt="First One">
                                    </a>    
                                </div>
                                <p> Grand Relax & Ottoman </p>
                            </div>
                            <div class="col-3 product_list">
                                <div class="items_product">
                                    <a href="{{URL::to('/HomeStories')}}">
                                        <img class="w-100" src="assets/images/product/21065000.jpg" alt="First One">
                                    </a>    
                                </div>
                                <p> Chaise Tout Bois </p>
                            </div>
                            <div class="col-3 product_list">
                                <div class="items_product">
                                    <a href="{{URL::to('/HomeStories')}}">
                                        <img class="w-100" src="assets/images/product/21508904.jpg" alt="First One">
                                    </a>    
                                </div>
                                <p> Panton Chair </p>
                            </div>
                            <div class="col-3 product_list">
                                <div class="items_product">
                                    <a href="{{URL::to('/HomeStories')}}">
                                        <img class="w-100" src="assets/images/product/44003000.jpg" alt="First One">
                                    </a>    
                                </div>
                                <p> Mariposa Corner </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3 product_list">
                                <div class="items_product">
                                    <a href="{{URL::to('/HomeStories')}}">
                                        <img class="w-100" src="assets/images/product/44029800.jpg" alt="First One">
                                    </a>    
                                </div>
                                <p> Moca </p>
                            </div>
                            <div class="col-3 product_list">
                                <div class="items_product">
                                    <a href="{{URL::to('/HomeStories')}}">
                                        <img class="w-100" src="assets/images/product/GREAUS011.jpg" alt="First One">
                                    </a>    
                                </div>
                                <p> Classic Trays - Sea Things </p>
                            </div>
                            <div class="col-3 product_list">
                                <div class="items_product">
                                    <a href="{{URL::to('/HomeStories')}}">
                                        <img class="w-100" src="assets/images/product/MORUNG010.jpg" alt="First One">
                                    </a>    
                                </div>
                                <p> Vases Découpage, Disque </p>
                            </div>
                            <div class="col-3 product_list">
                                <div class="items_product">
                                    <a href="{{URL::to('/HomeStories')}}">
                                        <img class="w-100" src="assets/images/product/44003000.jpg" alt="First One">
                                    </a>    
                                </div>
                                <p> L'Oiseau </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ***** Features Item End ***** -->
            <!-- ***** Footer Start ***** -->
            <footer class="footer-section">
                 @include('footer.index')
            </footer>
    </body>
</html>