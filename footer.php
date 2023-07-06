<!--footer-->
<section class="footer bg-light"  id= "ttr_footer">
        <section class="subscribe">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="text-uppercase">know it all first</h3>
                        <p>Vel repellat dolores cum dignissimos et quibusdam nobis suscipit dolores. Provident
                            voluptates perspiciatis.</p>
                    </div>
                    <div class="col-md-6 d-flex flex-column justify-content-center">
                        <form action="#" class="searchform">
                            <div class="form-group d-flex">
                                <input type="text" class="form-control pl-3" placeholder="enter e-mail">
                                <button type="submit" placeholder="" class="form-control search text-uppercase">
                                    <a href="http://">subscribe</a>
                                    
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </section>
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-4">
                    <h4 class="text-uppercase">chakstores</h4>
                    <p>Vel repellat dolores cum dignissimos et quibusdam nobis suscipit dolores. Provident voluptates
                        perspiciatis.</p>
                </div>
                <div class="col-md-3 text-capitalize mb-4 quick-links">
                    <h4 class="text-uppercase">quick links</h4>
                    <?php
                wp_nav_menu( array( 
    'theme_location' => 'footer',
    ) ); 

    ?>
                </div>
                <div class="col-md-3 text-capitalize mb-4">
                    <h4 class="text-uppercase">Find us</h4>
                    <p><i class="fa fa-location-arrow"></i> mathare noth area 2</p>
                    <p><i class="fa fa-phone"></i> 0712 345 678 </p>
                    <p><i class="fa fa fa-envelope"></i> chakstores@gmail.com </p>
                    <p>Vel repellat dolores cum dignissimos et quibusdam nobis suscipit dolores. Provident voluptates
                        perspiciatis.</p>
                </div>
                <div class="col-md-3 mb-4 connect">
                    <h4 class="text-uppercase">connect with us</h4>
                    <div class="social-icons d-flex">
                        <a href="" data-toggle="tooltip" data-placement="top" title="chackstores 254"
                            class="text-decoration-none"><i
                                class="fa fa-facebook d-flex justify-content-center align-items-center"></i></a>
                        </a>
                        <a href="" data-toggle="tooltip" data-placement="top" title="chackstores"
                            class="text-decoration-none"><i
                                class="fa fa-instagram d-flex justify-content-center align-items-center"></i></a>
                        </a>
                        <a href="" data-toggle="tooltip" data-placement="top" title="@chackstores 254"
                            class="text-decoration-none"><i
                                class="fa fa-twitter d-flex justify-content-center align-items-center"></i></a>
                        </a>
                        <a href="" data-toggle="tooltip" data-placement="top" title="0712 345 678"
                            class="text-decoration-none"><i
                                class="fa fa-whatsapp d-flex justify-content-center align-items-center"></i></a>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>

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
                        items: 2,
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
    <script src="<?php echo get_template_directory_uri(); ?>/OwlCarousel2-2.3.4/docs/assets/vendors/highlight.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/OwlCarousel2-2.3.4/docs/assets/js/app.js"></script>
    <?php wp_footer();?>
</body>

</html>