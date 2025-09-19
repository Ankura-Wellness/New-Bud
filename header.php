<?php
    /**
     *  Header template file
     *  @2ndInning
     */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <?php wp_head(); ?>
        <title>
            <?php echo wp_get_document_title(); ?>
        </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Teko:wght@300..700&display=swap" rel="stylesheet">
        
        <script src="https://kit.fontawesome.com/8d5d6f5c26.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    </head>
    <body <?php body_class();?> ng-app="nb" ng-controller="page" ng-class="cartManagerCtrl.cartState() ? 'hideScroller' : ''">
        <?php wp_body_open(); ?>
        <div id="page" class="site">
            <?php get_template_part('partials/header.partials');?>
            <div id="content" class="site-content">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">