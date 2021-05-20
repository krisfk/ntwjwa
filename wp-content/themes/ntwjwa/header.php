<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/common.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pace-js@latest/pace-theme-default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site pb-5">
        <a class="skip-link screen-reader-text"
            href="#content"><?php esc_html_e( 'Skip to content', 'twentytwentyone' ); ?></a>

        <?php //get_template_part( 'template-parts/header/site-header' ); ?>

        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">


                    <div class="top-bar">
                        The New Territories Women and Juvenile Welfare Association
                    </div>
                    <div class="container">


                        <div class="row align-items-center mt-3">
                            <div class="col-1">
                                <a href="<?php echo get_site_url();?>" class="logo-a"> <img
                                        src="<?php echo get_template_directory_uri().'/assets/images/logo.png'?>"
                                        alt="">
                                </a>
                            </div>
                            <div class="col-11 text-end">
                                <ul class="top-menu ">

                                    <?php


// if ( defined( 'ICL_LANGUAGE_CODE' ) ) {
// $lang_code =  ICL_LANGUAGE_CODE;
// }

// switch ($lang_code)
// {
// case 'zh-hant':
//     $top_menu = $main_menu;

//     break;
//     case 'cn':
//         $top_menu =$main_menu;


//     break;
//         case 'en':
//             $top_menu = $main_menu;

//     break;
// }

$main_menu = wp_get_menu_array('main menu');



$top_menu = $main_menu;

foreach ($top_menu as $menu_item) {

$url = $menu_item['url'];
$title = $menu_item['title'];
$temp_arr=explode(get_site_url(),$url);
$slug=str_replace('/en/','',$temp_arr[1]);
$slug=str_replace('/cn/','',$slug);
$slug=str_replace('/','',$slug);


if(count($menu_item['children']))
{
    $sub_slugs='';
    foreach ($menu_item['children'] as $sub_menu_item) 
    {
        $sub_url = $sub_menu_item['url'];
        $sub_temp_arr=explode(get_site_url(),$sub_url);

        $sub_slug=str_replace('/en/','',$sub_temp_arr[1]);
        $sub_slug=str_replace('/cn/','',$sub_slug);
        $sub_slug=str_replace('/','',$sub_slug);

        $sub_slugs.=$sub_slug.' ';
    }
    echo '<li><a class="level-1 '.$sub_slugs.'" href="'.$url.'">'.$title.'</a>';

 
    echo '<ul class="top-menu-submenu">';
    foreach ($menu_item['children'] as $sub_menu_item) 
    {
        $sub_url = $sub_menu_item['url'];
        $sub_title = $sub_menu_item['title'];
        $sub_temp_arr=explode(get_site_url(),$sub_url);
        $sub_slug=str_replace('/en/','',$sub_temp_arr[1]);
        $sub_slug=str_replace('/cn/','',$sub_slug);
        $sub_slug=str_replace('/','',$sub_slug);
        echo'<li><a class="'.$sub_slug.'" href="'.$sub_url.'">'.$sub_title.'</a></li>';
    }
    echo '</ul>';

}
else
{
echo '<li><a class="level-1 '.$slug.'" href="'.$url.'">'.$title.'</a>';

}
echo'</li>';


}


?>

                                    <?php

// $langs= icl_get_languages('skip_missing=0&orderby=custom&order=asc&link_empty_to=');
?>
                                    <!-- <li>

                    <div class="lang-div">
                        <a href="<?php echo $langs['zh-hant']['url'];?>">繁</a><span class="sep">/</span><a
                            href="<?php echo $langs['cn']['url'];?>">簡</a>
                        <span class="sep">/</span><a href="<?php echo $langs['en']['url'];?>">ENGLISH</a>

                    </div>
                </li> -->

                                    <li>
                                        <ul class="p-0 m-0 s-menu">
                                            <li>
                                                <a href="#"> <img
                                                        src="<?php echo get_template_directory_uri().'/assets/images/s-icon-1.png'?>"
                                                        alt=""></a>
                                            </li>
                                            <li>
                                                <a href="#"> <img
                                                        src="<?php echo get_template_directory_uri().'/assets/images/s-icon-2.png'?>"
                                                        alt=""></a>
                                            </li>
                                            <li>
                                                <a href="#"> <img
                                                        src="<?php echo get_template_directory_uri().'/assets/images/s-icon-3.png'?>"
                                                        alt=""></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>


                                <a href="javascript:void(0)" class="fas fa-bars mobile-menu-btn"
                                    style="display:none"></a>

                                <a href="javascript:void(0)" class="fas fa-times mobile-menu-close-btn"
                                    style="display:none"></a>


                            </div>
                        </div>


                        <script type="text/javascript">
                        <?php
                        global $post;
                        $page_slug = $post->post_name;
                        ?>
                        var page_slug = "<?php echo $page_slug?>";
                        $(function() {



                            $('.top-menu li a.level-1.' + page_slug).addClass('active');

                            $('.mobile-menu-close-btn,.mobile-menu-btn').fadeOut(0)

                            $('.mobile-menu-btn').click(function() {

                                // $(this).toggleClass('active');

                                // if ($(this).hasClass('active')) {
                                $('.top-menu').fadeIn(200)
                                $(this).fadeOut(0);
                                $('.mobile-menu-close-btn').fadeIn(0)

                                // }
                            })

                            $('.mobile-menu-close-btn').click(function() {
                                $(this).fadeOut(0)
                                $('.top-menu').fadeOut(0)

                                $('.mobile-menu-btn').fadeIn(0)

                            })


                            init_mobile_btn()
                            $(window).resize(function() {
                                init_mobile_btn()

                            })



                        })

                        function init_mobile_btn() {
                            if ($(window).width() <= 991) {
                                $('.mobile-menu-close-btn').fadeOut(0)
                                $('.mobile-menu-btn').fadeIn(0)
                            } else {
                                $('.mobile-menu-close-btn,.mobile-menu-btn').fadeOut(0)
                                $('.top-menu').fadeIn(0)

                            }
                        }
                        </script>