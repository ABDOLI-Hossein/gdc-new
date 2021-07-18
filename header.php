<!DOCTYPE html>
<html lang="en">
<head>
<title><?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <?php wp_head();?>
</head>
<body style="max-width: 1366px" class="mx-auto">
<header>
    <!-----Navigation--------------------->

    <div class="col-12 nav-box-shadow">
        <div class="col-12 col-sm-10 mx-auto p-0">
            <nav class="navbar-expand-lg navbar-light pb-0 pb-sm-4">
                <div class="col-12 d-flex align-items-center pt-3 justify-content-between pb-3 pb-sm-0 pl-0">
                    <a class="navbar-brand col-6 p-0" href="<?php echo get_home_url(); ?>">
                        <img src="<?php bloginfo('template_directory');?>/images/logo.png">
                    </a>
                    <div class="col-6 d-none d-sm-flex p-0">

                        <img src="<?php bloginfo('template_directory');?>/images/clock.svg">
                        <h6 class="clock-header-p">From Mon to Thurs 8:00 AM – 4:00 PM</h6>
                        <img src="<?php bloginfo('template_directory');?>/images/tell.svg" style="padding-left: 38px;">
                        <h6 class="tell-header-p">678-209-2273</h6>

                    </div>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
<!--                        <img src="--><?php //bloginfo('template_directory');?><!--/images/collapseicon.svg">-->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24.25" height="19.125" viewBox="0 0 24.25 19.125">
                            <g id="Group_20251" data-name="Group 20251" transform="translate(-342.1 -30.975)">
                                <g id="menu_4_" data-name="menu(4)" transform="translate(336.645 27.075)">
                                    <line id="Line_78" data-name="Line 78" x2="21.75" transform="translate(6.855 13.462)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2"/>
                                    <line id="Line_79" data-name="Line 79" x2="11.5" transform="translate(17.105 5)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" opacity="0.9"/>
                                    <line id="Line_80" data-name="Line 80" x2="11.3" transform="translate(6.555 21.925)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" opacity="0.9"/>
                                </g>
                            </g>
                        </svg>

                    </button>


                </div>


                <div class="collapse navbar-collapse mt-0 mt-sm-4" id="navbarTogglerDemo03">
                    <div class="d-sm-none pl-3">

                        <div class="d-flex pb-3">
                            <img src="<?php bloginfo('template_directory');?>/images/clock.svg">
                            <h6 class="clock-header-p">From Mon to Thurs 8:00 AM – 4:00 PM</h6>
                        </div>
                        <div class="d-flex pb-3">
                            <img src="<?php bloginfo('template_directory');?>/images/tell.svg">
                            <h6 class="tell-header-p">678-209-2273</h6>
                        </div>

                    </div>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'top-menu',
                            'menu_id'        => 'top-menu',
                            'container'      => 'ul',
                            'menu_class'     => 'navbar-nav',

                        )
                    );
                    ?>
                </div>
            </nav>
        </div>
    </div>
</header>