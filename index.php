<?php get_header(); ?>
  <!--crousel-->
  <section class="crousel">
            <div id="carouselExampleDark" class="carousel carousel-dark slide carousel-fade" data-bs-ride="carousel">
                <div class="container">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-6 col-xl-6 col-xxl-6">
                            <div class="my-5 d-flex justify-content-center align-items-center">
                                <img class="img-fluid rounded-3 my-5" src="<?php bloginfo('template_directory'); ?>/imgs/salit.png" alt="..." />
                            </div>
                        </div>
                        <div class="col-xl-6 col-xxl-6 d-none d-xl-block">
                            <div class="my-5">
                                <h1>Pata deals poa za<br>
                                    <span>mafuta</span>
                                    apa  ivii chackstores</h1>
                                <button type="button" class="btn btn-primary shadow-lg"><a href="products.html">SHOP NOW</a></button>
                        </div>
                        </div>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-6 col-xl-6 col-xxl-6">
                            <div class="my-5 d-flex justify-content-center align-items-center">
                                <img class="img-fluid rounded-3 my-5" src="<?php bloginfo('template_directory'); ?>/imgs/222.jpg" alt="..." />
                            </div>
                        </div>
                        <div class="col-xl-6 col-xxl-6 d-none d-xl-block">
                            <div class="my-5">
                                <h1>Pata deals poa za<br>
                                    <span>maziwa</span>
                                    apa  ivii chackstores</h1>
                                <button type="button" class="btn btn-primary shadow-lg"><a href="products.html">SHOP NOW</a></button>
                        </div>
                        </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-6 col-xl-6 col-xxl-6">
                            <div class="my-5 d-flex justify-content-center align-items-center">
                                <img class="img-fluid rounded-3 my-5" src="<?php bloginfo('template_directory'); ?>/imgs/soko.jpg" alt="..." />
                            </div>
                        </div>
                        <div class="col-xl-6 col-xxl-6 d-none d-xl-block">
                            <div class="my-5">
                                <h1>Pata deals poa za<br>
                                    <span>unga</span>
                                    apa  ivii <br>chackstores</h1>
                                <button type="button" class="btn btn-primary shadow-lg"><a href="products.html">SHOP NOW</a></button>
                        </div>
                        </div>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
    </section>

    <!--3 cards-->
    <section class="highlights py-5 bg-light mt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="highlight-card d-flex  p-4 h-clr1">
                        <div class="img-side d-flex justify-content-center align-items-center">
                            <img src="<?php bloginfo('template_directory'); ?>/imgs/safi.png" class="img-fluid" alt="" srcset="">
                        </div>
                        <div class="details d-flex justify-content-center flex-column">
                            <h3>pata deals fiti fiti hii festive season</h3>
                            <a href="products.html">shop now</a>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="highlight-card d-flex p-4 h-clr2">
                        <div class="img-side d-flex justify-content-center align-items-center">
                            <img src="<?php bloginfo('template_directory'); ?>/imgs/ngano.png" class="img-fluid" alt="" srcset="">
                        </div>
                        <div class="details d-flex justify-content-center flex-column">
                            <h3>pata deals fiti fiti hii festive season</h3>
                            <a href="products.html">shop now</a>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="highlight-card d-flex p-4 h-clr3">
                        <div class="img-side d-flex justify-content-center align-items-center">
                            <img src="<?php bloginfo('template_directory'); ?>/imgs/jfgdhfkgg.png" class="img-fluid" alt="" srcset="">
                        </div>
                        <div class="details d-flex justify-content-center flex-column">
                            <h3>pata deals fiti fiti hii festive season</h3>
                            <a href="products.html">shop now</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--popular-->
    <section class="popular-products">
        <div class="container text-uppercase">
            <h3>popular products</h3>
        </div>
        <div class="container">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="product-card text-center">
                        <div class="product-img d-flex justify-content-center align-items-center">
                            <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/imgs/salit.png" alt="" srcset="" width="200">
                        </div>
                        <div class="details">
                            <h4>Menengai Bar Soap</h4>
                            <p class="quantity">800 gram</p>
                            <div class="prices d-flex justify-content-center align-items-center">
                                <p class="real-price">ksh 200</p>
                                <p class="old-price">ksh 250</p>
                            </div>

                            <button class="btn"><a href="cart.html">add to cart </a></button>


                            <p class="more"><a href="product-details.html">more details</a></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="product-card text-center">
                        <div class="product-img d-flex justify-content-center align-items-center">
                            <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/imgs/safi.png" alt="" srcset="">
                        </div>
                        <div class="details">
                            <h4>Menengai Bar Soap</h4>
                            <p class="quantity">800 gram</p>
                            <div class="prices d-flex justify-content-center align-items-center">
                                <p class="real-price">ksh 200</p>
                                <p class="old-price">ksh 250</p>
                            </div>

                            <button class="btn"><a href="cart.html">add to cart </a></button>


                            <p class="more"><a href="product-details.html">more details</a></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="product-card text-center">
                        <div class="product-img d-flex justify-content-center align-items-center">
                            <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/imgs/soko.jpg" alt="" srcset="">
                        </div>
                        <div class="details">
                            <h4>Menengai Bar Soap</h4>
                            <p class="quantity">800 gram</p>
                            <div class="prices d-flex justify-content-center align-items-center">
                                <p class="real-price">ksh 200</p>
                                <p class="old-price">ksh 250</p>
                            </div>

                            <button class="btn"><a href="cart.html">add to cart </a></button>


                            <p class="more"><a href="product-details.html">more details</a></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="product-card text-center">
                        <div class="product-img d-flex justify-content-center align-items-center">
                            <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/imgs/jhjhjhjh.jpg" alt="" srcset="">
                        </div>
                        <div class="details">
                            <h4>Menengai Bar Soap</h4>
                            <p class="quantity">800 gram</p>
                            <div class="prices d-flex justify-content-center align-items-center">
                                <p class="real-price">ksh 200</p>
                                <p class="old-price">ksh 250</p>
                            </div>

                            <button class="btn"><a href="cart.html">add to cart </a></button>


                            <p class="more"><a href="product-details.html">more details</a></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="product-card text-center">
                        <div class="product-img d-flex justify-content-center align-items-center">
                            <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/imgs/222.jpg" alt="" srcset="">
                        </div>
                        <div class="details">
                            <h4>Menengai Bar Soap</h4>
                            <p class="quantity">800 gram</p>
                            <div class="prices d-flex justify-content-center align-items-center">
                                <p class="real-price">ksh 200</p>
                                <p class="old-price">ksh 250</p>
                            </div>

                            <button class="btn"><a href="cart.html">add to cart </a></button>


                            <p class="more"><a href="product-details.html">more details</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!--hot deals-->
    <section class="hot-deals mt-4">
        <div class="container text-uppercase mb-4">
            <h3 class="heading">hot deals</h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="product-card p-4 mb-3 ">
                        <div class="row">
                            <div class="col-md-6 m-auto text-center">
                                <img src="<?php bloginfo('template_directory'); ?>/imgs/salit.png" alt="" srcset="" class="img-fluid">
                            </div>
                            <div class="col-md-6">
                                <div class="details text-center">

                                    <p class="save text-uppercase">save 40%</p>


                                    <h4>Menengai Bar Soap</h4>
                                    <p class="quantity">800 gram</p>
                                    <div class="prices ">
                                        <p class="real-price">ksh 250</p>
                                        <p class="old-price">ksh 200</p>
                                    </div>

                                    <button class="btn btn-primary"><a href="cart.html">add to cart </a></button>


                                    <p class="more"><a href="product-details.html">more details</a></p>
                                </div>
                            </div>
                        </div>

                    </div>




                </div>

                <div class="col-md-6">
                    <div class="product-card p-4 mb-3 ">
                        <div class="row">
                            <div class="col-md-6 m-auto text-center">
                                <img src="<?php bloginfo('template_directory'); ?>/imgs/kabras-sugar-1kg.png" alt="" srcset="" class="img-fluid">
                            </div>
                            <div class="col-md-6">
                                <div class="details text-center">

                                    <p class="save text-uppercase">save 40%</p>


                                    <h4>Menengai Bar Soap</h4>
                                    <p class="quantity">800 gram</p>
                                    <div class="prices ">
                                        <p class="real-price green-text">ksh 250</p>
                                        <p class="old-price">ksh 200</p>
                                    </div>

                                    <button class="btn btn-primary"><a href="cart.html">add to cart </a></button>


                                    <p class="more"><a href="product-details.html">more details</a></p>
                                </div>
                            </div>
                        </div>

                    </div>




                </div>



            </div>
        </div>

    </section>

    <!--recommended-products-->
    <section class="recommended-products">
        <div class="container text-uppercase mb-4">
            <h3 class="heading">recommended products</h3>
        </div>
        <div class="container">
            <div class="owl-carousel owl-theme">


                <div class="item">
                    <div class="product-card text-center">
                        <div class="product-img d-flex justify-content-center align-items-center">
                            <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/imgs/salit.jpg" alt="" srcset="">
                        </div>
                        <div class="details">
                            <h4>Menengai Bar Soap</h4>
                            <p class="quantity">800 gram</p>
                            <div class="prices d-flex justify-content-center align-items-center">
                                <p class="real-price">ksh 200</p>
                                <p class="old-price">ksh 250</p>
                            </div>

                            <button class="btn"><a href="cart.html">add to cart </a></button>


                            <p class="more"><a href="product-details.html">more details</a></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="product-card text-center">
                        <div class="product-img d-flex justify-content-center align-items-center">
                            <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/imgs/safi.png" alt="" srcset="">
                        </div>
                        <div class="details">
                            <h4>Menengai Bar Soap</h4>
                            <p class="quantity">800 gram</p>
                            <div class="prices d-flex justify-content-center align-items-center">
                                <p class="real-price">ksh 200</p>
                                <p class="old-price">ksh 250</p>
                            </div>

                            <button class="btn"><a href="cart.html">add to cart </a></button>


                            <p class="more"><a href="product-details.html">more details</a></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="product-card text-center">
                        <div class="product-img d-flex justify-content-center align-items-center">
                            <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/imgs/soko.jpg" alt="" srcset="">
                        </div>
                        <div class="details">
                            <h4>Menengai Bar Soap</h4>
                            <p class="quantity">800 gram</p>
                            <div class="prices d-flex justify-content-center align-items-center">
                                <p class="real-price">ksh 200</p>
                                <p class="old-price">ksh 250</p>
                            </div>

                            <button class="btn"><a href="cart.html">add to cart </a></button>


                            <p class="more"><a href="product-details.html">more details</a></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="product-card text-center">
                        <div class="product-img d-flex justify-content-center align-items-center">
                            <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/imgs/jhjhjhjh.jpg" alt="" srcset="">
                        </div>
                        <div class="details">
                            <h4>Menengai Bar Soap</h4>
                            <p class="quantity">800 gram</p>
                            <div class="prices d-flex justify-content-center align-items-center">
                                <p class="real-price">ksh 200</p>
                                <p class="old-price">ksh 250</p>
                            </div>

                            <button class="btn"><a href="cart.html">add to cart </a></button>


                            <p class="more"><a href="product-details.html">more details</a></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="product-card text-center">
                        <div class="product-img d-flex justify-content-center align-items-center">
                            <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/imgs/222.jpg" alt="" srcset="">
                        </div>
                        <div class="details">
                            <h4>Menengai Bar Soap</h4>
                            <p class="quantity">800 gram</p>
                            <div class="prices d-flex justify-content-center align-items-center">
                                <p class="real-price">ksh 200</p>
                                <p class="old-price">ksh 250</p>
                            </div>

                            <button class="btn"><a href="cart.html">add to cart </a></button>


                            <p class="more"><a href="product-details.html">more details</a></p>
                        </div>
                    </div>
                </div>




            </div>



        </div>

        <script>
            $(document).ready(function () {
                var owl = $('.owl-carousel');
                owl.owlCarousel({
                    items: 4,
                    loop: true,
                    margin: 10,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    autoplayHoverPause: false,
                    responsive: {
                        0: {
                            items: 1,
                            nav: true
                        },
                        600: {
                            items: 3,
                            nav: false
                        },
                        1000: {
                            items: 4,
                            nav: true,
                            loop: true
                        }
                    }
                });
            })
        </script>
        </div>
    </section>

    <!--advert-->
    <section class="advert">

        <div class="container">
            <h3 class="text-uppercase heading text-center">why choose us</h3>
            <div class="row">
                <div class="col-md-4  d-flex">

                    <i class="fa fa-truck text-center"></i>
                    <div class="content">
                        <h4>free delivery</h4>
                        <p>Vel repellat dolores cum dignissimos et quibusdam.</p>
                    </div>
                </div>
                <div class="col-md-4 d-flex">

                    <i class="fa fa-clock-o text-center"></i>
                    <div class="content">
                        <h4>24/7 shopping</h4>
                        <p>Vel repellat dolores cum dignissimos et quibusdam.</p>
                    </div>
                </div>
                <div class="col-md-4 d-flex">

                    <i class="fa fa-credit-card text-center"></i>
                    <div class="content">
                        <h4>cashless payments</h4>
                        <p>Vel repellat dolores cum dignissimos et quibusdam.</p>
                    </div>

                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>