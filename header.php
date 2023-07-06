<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bootstrap-5.1.3-dist/css/bootstrap.min.css" />
    
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function () {
            /////// Prevent closing from click inside dropdown
            document
                .querySelectorAll('.dropdown-menu')
                .forEach(function (element) {
                    element.addEventListener('click', function (e) {
                        e.stopPropagation();
                    });
                })
        });
        // DOMContentLoaded  end
    </script>
    <!-- javascript -->
    <script src="<?php echo get_template_directory_uri(); ?>/OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/OwlCarousel2-2.3.4/docs/assets/owlcarousel/owl.carousel.js"></script>
    <?php wp_head();?>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>

<body <?php body_class(); ?>>
  <!--header starts-->
  <section class="head-section fixed-top">
        <!--main nav-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light py-4">
            <div class="container">
                <a class="navbar-brand" href="#">ChackStores</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">  
                <?php
                wp_nav_menu( array( 
    'theme_location' => 'primary',
        'menu_id' => 'primary-menu', 
        'container_class'=> 'justify-content-end ', 
        'menu_class'=>'navbar-nav'
    ) ); 

    ?>
    <?php aws_get_search_form( true ); ?>
    
    <a class="cart-link" href="<?php echo wc_get_cart_url(); ?>"><i class="bi bi-cart2"></i></a>

    <a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> – <?php echo WC()->cart->get_cart_total(); ?></a>
                    
    </div>

                    
                </div>
            </div>
        </nav>
        <!--main nav ends-->
    </section>
<!--header ends-->