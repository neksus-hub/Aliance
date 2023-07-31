<?php 
    $page_title = 'Автомобильная химия';
    $header_bg = 'header-bg-grey';
    $header_content_title = 'header-content-title-dark';
    $breadcrumbs_dark = 'breadcrumbs-dark';
    $breadcrumbs_home_dark = 'breadcrumbs-home-dark';
    $header_features_text_dark = 'header-features-text-dark';
    $features_slider_margin = 'features-slider-margin';
    $header_features_border_dark = 'header-features-border-dark';
    $slider_button_blue = 'slider-button-blue';
    include_once('header-page.php');?>
    <?php include_once('./templates-parts/features-slider.php');?>
    <?php include_once('modal-windows.php');?>
    <?php
    $blog_slider_title = 'Исследовательский центр Aliance production:';
    include_once('./templates-parts/blog-slider-block.php');?>
    <?php include_once('./templates-parts/steps-slider.php');?>
    <?php include_once('./templates-parts/section-clients.php');?>
    <?php include_once('./templates-parts/cta-section.php');?>
    <?php include_once('footer.php');?>

    <script src="js/swiper-bundle-steps.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/just-validate.production.min.js"></script>
    <script src="js/main.js"></script>

 