<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Blog Site Template</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Site Template">
    <meta name="author" content="https://youtube.com/FollowAndrew">    
    <link rel="shortcut icon" href="/wp-content/themes/konsteus/assets/images/logo.png"> 
    
    
	<?php
		wp_head();
	?>

</head> 

<body>
    
    <header class="header text-center">	    
	    <?php /*<a class="site-title pt-lg-4 mb-0" href="index.html">
            <?php echo get_bloginfo('name'); ?>
        </a> */?>
        
	    <nav class="navbar navbar-expand-lg navbar-dark" >
           
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div id="navigation" class="collapse navbar-collapse flex-row" >
                <?php if(function_exists('the_custom_logo')){

                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id);
                    
                } ?>
				<img class="mb-3 mx-auto logo konsteus-logo" src="<?php echo $logo[0] ?>" alt="logo" >			
                
                
                <?php
                // ADD IN CUSTOMIZ PANEL IF YOU WANT HAVE AN ICON : <i class="fas fa-home fa-fw mr-2 "></i> 
                    wp_nav_menu(
                        array(
                            'menu' => 'primary',
                            'container' => '',
                            'them_location' => 'primary' ,
                            'menu_class' => 'navbar-nav konsteus-navbar-nav flex-row text-sm-center text-md-left',
                            'items_wrap' => '
                            <ul 
                                id="" 
                                class="%2$s "
                                > %3$s
                            </ul> '

                            )
                    );
                ?>


				
				<hr>
				

			</div>


            <?php 
            //social links
               // dynamic_sidebar('sidebar-1');
            ?>
		</nav>
    </header>

    <?php /*
    <div class="main-wrapper">
	    <header class="page-title theme-bg-light text-center gradient py-5">
			<h1 class="heading"><?php  the_title();?> </h1>
        </header>
        */?>