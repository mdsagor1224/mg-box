 <!-- footer area  -->
 <footer class="mg-footer mg-b-bg pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="mg-ft-widget widget-1">
                        <?php 
                            if(is_active_sidebar('footer-one')){
                                dynamic_sidebar('footer-one');
                            }
                        ?>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-30">
                    <div class="mg-ft-menu-box widget-2">

                        <?php 
                            if(is_active_sidebar('footer-two')){
                                dynamic_sidebar('footer-two');
                            }
                        ?>
                        
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-30">
                    <div class="mg-ft-menu-box widget-3">
                    <?php 
                            if(is_active_sidebar('footer-three')){
                                dynamic_sidebar('footer-three');
                            }
                        ?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="mg-ft-widget widget-4">
                        <h3 class="mg-title text-white pb-24">Our Locations</h3>
                        <div class="mg-ofice-location mb-30">
                            <h4 class="mg-ofice-title text-white pb-16">Singapore Office</h4>
                            <div class="mg-ofice-content d-flex">
                                <div class="mg-ifoc-icon">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/icon/location-1.1.svg" alt="">
                                </div>
                                <div class="mg-ofic-text">
                                    <p>1 Scotts Road, #24-01 Show Centre, Singapore 228208.</p>
                                </div>
                            </div>
                        </div>

                        <div class="mg-ofice-location mb-30">
                            <h4 class="mg-ofice-title text-white pb-16">Dubai Office</h4>
                            <div class="mg-ofice-content d-flex">
                                <div class="mg-ifoc-icon">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/icon/location-1.1.svg" alt="">
                                </div>
                                <div class="mg-ofic-text">
                                    <p>112. Building No 1, Dubai Internet City, Post Box 502925, Dubai Arab Emirates</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </footer>


<?php wp_footer();?>
</body>
</html>