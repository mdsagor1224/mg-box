<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

    <!-- header area -->
    <header class="mg-header mg-header-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-6 col-6">
                    <div class="mg-logo">
                        <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/logo/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-8 d-none d-lg-block text-center">
                    
                    <?php
                        wp_nav_menu( array( 
                            'theme_location' => 'main-menu', 
                            'menu_class' => 'mg-menu', 
                        ) ); 
                        ?>
                </div>
                <div class="col-lg-2 col-md-6 col-6 text-end">
                    <div class="mg-btn">
                        <a href="#" class="mg-btn-primary mg-upper">Sing Up</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="mg-hero-content">
                        <h4 class="mg-hero-subtitle">MessageBox: Breakfast Module</h4>
                        <h2 class="mg-hero-title">Manage Meal Plans Efficiently</h2>
                        <p>Transform how your hotel manages meal packages with our all-in- one digital solution. Say goodbye to paper lists and manual checks, and welcome a new era of efficiency and guest satisfaction.</p>

                        <div class="mg-hero-btn">
                            <a href="#" class="mg-btn-primary mg-upper">Sing Up</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8"></div>
            </div>
        </div>
     </header>
     <!-- end header area -->