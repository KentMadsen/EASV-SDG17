<!DOCTYPE html>

<html <?php language_attributes(); ?>>
    <head>

        <meta charset="<?php bloginfo( 'charset' ); ?>">

        <meta name="viewport" 
              content="width=device-width, initial-scale=1.0">
        
        <meta http-equiv="X-UA-Compatible" 
              content="ie=edge">

        <meta name="description" 
              content="">

        <meta name="og:title" 
              property="og:title" 
              content="<?php get_bloginfo($show='name') ?>">

        <title> 
            <?php 
                echo get_bloginfo($show='name')
            ?>
        </title>

        <?php 
            wp_head();
        ?>
    </head>
    <body>
        <?php 
            get_header();
        ?>

        <main>
            
        </main>
        
        <?php 
            get_footer();
        ?>
    </body>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-136109379-3">
    </script>
    
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-136109379-3');
    </script>

</html>