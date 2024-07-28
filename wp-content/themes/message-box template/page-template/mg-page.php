<?php
/**
 * Template Name: Message Box Template
 */

 the_post();
 get_header();
 echo"<div class='content-elementor'>";
 the_content();
 echo"</div>";
 get_footer();