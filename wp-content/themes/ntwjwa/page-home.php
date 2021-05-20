<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>

<div class="main-container">

    <div class="position-relative mt-3 overflow-hidden">

        <img class="w-100 fadein-ele" style="opacity:0"
            src="<?php echo get_template_directory_uri().'/assets/images/banner-1.jpg'?>" alt="">

        <div class="banner-caption fadeinup-ele position-absolute w-100">Our Association is a charitable organisation
            sub
            vented
            by the HKSAR Social Welfare Department. </div>
    </div>


    <div class="mt-5 container g-lg-5 g-md-5 g-sm-0 g-0 ">
        <h2 class="subheading fadeleft-ele">
            <div class="red-v-line"></div>
            Vision & Purpose
        </h2>
        <div class="row  align-items-center g-0">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 content-column light fadeleft-ele">

                <div class="pe-lg-5 pe-md-0 pe-sm-0 pe-0">
                    Our founders had set out to take care of the needs of the elderly
                    that
                    are
                    unique to the
                    rural areas in the New Territories, and has taken the lead in providing basic recreational
                    activities
                    and personal services to the elderly in the Hong Shui Bridge Area.
                </div>
                <div class="mt-4">
                    <a href="javascript:void(0)" class="button ">EXPLORE MORE </a>
                </div>
            </div>
            <div
                class="col-lg-6 col-md-12 col-sm-12 col-12 content-column medium quote position-relative faderight-ele">
                <img class="big-quote oq" src="<?php echo get_template_directory_uri()?>/assets/images/oq.png" alt="">
                we believe special attention should be rendered to women and children.
                <img class="big-quote cq" src="<?php echo get_template_directory_uri()?>/assets/images/cq.png" alt="">

            </div>

        </div>
    </div>


    <div class="mt-5">
        <img class="w-100 fadeleft-ele " style="opacity:0"
            src="<?php echo get_template_directory_uri()?>/assets/images/banner-banner-2.jpg" alt="">
    </div>

    <div class="row circles-div-row mb-5">
        <div class="col-lg-3 col-md-3 col-sm-6 col-6">
            <a href="<?php echo get_permalink( get_page_by_path( 'our-services' ) ) ?>#elderly-services"
                class="circle d-table">
                <div class="d-table-cell align-middle">
                    Elderly <br>
                    Services</div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-6">
            <a href="<?php echo get_permalink( get_page_by_path( 'our-services' ) ) ?>#education-day-care-nursery"
                class="circle d-table">
                <div class="d-table-cell align-middle"> Temporary <br>
                    Day Care <br>
                    Services</div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-6">
            <a href="<?php echo get_permalink( get_page_by_path( 'our-services' ) ) ?>#education-primary"
                class="circle d-table">
                <div class="d-table-cell align-middle">
                    Education</div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-6">
            <a href="<?php echo get_permalink( get_page_by_path( 'our-services' ) ) ?>#community-service"
                class="circle d-table">
                <div class="d-table-cell align-middle">
                    Community <br>
                    Service</div>
            </a>
        </div>
    </div>


    <div class="row inner-container g-5 ">

        <div class="row gx-lg-4 gx-md-0 gx-sm-0 gx-0 ">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 mt-0  mb-lg-0 mb-md-4 mb-sm-4 mb-4 ">
                <h2 class="subheading fadeleft-ele">
                    <div class="red-v-line"></div>
                    Elderly Services
                </h2>
                <div class="light content-column fadeleft-ele">The Association advocates family-based, interactive
                    culture
                    as a
                    foundation towards a
                    harmonious and
                    inclusive society. We are concerned about the unique needs of the elderly in the suburbs, hence has
                    set
                    up a Pak Yu Elderly Community Care Centre in Yuen Long Hung Shui Kiu to provide social and
                    recreational
                    activities for the elderly and to take into account their personal development and adaptation needs
                    so
                    that they can engage with the community.

                    <div class="mt-4">
                        <a href="<?php echo get_permalink( get_page_by_path( 'our-services' ) ) ?>#elderly-services"
                            class="button ">EXPLORE MORE </a>
                    </div>
                </div>

            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 col-12 mt-0 faderight-ele">

                <img class="w-100" src="<?php echo get_template_directory_uri()?>/assets/images/sq-img-1.jpg" alt="">


            </div>

        </div>
        <div class=" col-12 red-line"></div>


        <div class="row mobile-reverse   gx-lg-4 gx-md-0 gx-sm-0 gx-0 ">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 mt-0   fadeleft-ele">

                <img class="w-100" src="<?php echo get_template_directory_uri()?>/assets/images/sq-img-2.jpg" alt="">


            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 col-12 mt-0 mb-lg-0 mb-md-4 mb-sm-4 mb-4 faderight-ele">
                <h2 class="subheading faderight-ele">
                    <div class="red-v-line"></div>
                    Temporary Day Care <br>Services
                </h2>
                <div class="light content-column faderight-ele">To temporarily assist parents who are unable to take
                    care of
                    young
                    children aged between two to six. To provide parents with a safe place to care for their young
                    children
                    and avoid accidents when they stay alone in their homes.


                    <div class="mt-4">
                        <a href="<?php echo get_permalink( get_page_by_path( 'our-services' ) ) ?>#education-day-care-nursery"
                            class="button ">EXPLORE MORE </a>
                    </div>
                </div>

            </div>
        </div>


        <div class=" col-12 red-line"></div>

        <div class="row   gx-lg-4 gx-md-0 gx-sm-0 gx-0 ">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 mt-0  mb-lg-0 mb-md-4 mb-sm-4 mb-4 ">
                <h2 class="subheading fadeleft-ele">
                    <div class="red-v-line"></div>
                    Education – Primary
                </h2>
                <div class="light content-column fadeleft-ele">With the development of Hong Kong's society, the services
                    of
                    Association
                    have become professional, setting up schools and kindergartens for the general public to provide
                    quality
                    academic and character education while leading students to participate in different exchange
                    activities,
                    broaden their horizons, and train students to learn to think independently and become outstanding
                    leaders.

                    <div class="mt-4">
                        <a href="<?php echo get_permalink( get_page_by_path( 'our-services' ) ) ?>#education-primary"
                            class="button ">EXPLORE MORE </a>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 mt-0 faderight-ele">

                <img class="w-100" src="<?php echo get_template_directory_uri()?>/assets/images/sq-img-3.jpg" alt="">


            </div>
        </div>

        <div class=" col-12 red-line"></div>

        <div class="row mobile-reverse   gx-lg-4 gx-md-0 gx-sm-0 gx-0 ">

            <div class="col-lg-6 col-md-12 col-sm-12 col-12 mt-0   fadeleft-ele">

                <img class="w-100" src="<?php echo get_template_directory_uri()?>/assets/images/sq-img-4.jpg" alt="">


            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 col-12 mt-0 mb-lg-0 mb-md-4 mb-sm-4 mb-4  faderight-ele">

                <h2 class="subheading faderight-ele">
                    <div class="red-v-line"></div>
                    Community Service
                </h2>
                <div class="light content-column faderight-ele">In addition to our focus on the provision of core
                    services,
                    we also take
                    the initiative to assess the needs of other community members and will therefore mobilize staff,
                    members, students, parents and other volunteers to participate in public welfare activities, so as
                    to
                    take care of the disadvantaged and add a sense of pride to the quality of Hong Kong people.

                    <div class="mt-4">
                        <a href="<?php echo get_permalink( get_page_by_path( 'our-services' ) ) ?>#community-service"
                            class="button ">EXPLORE MORE </a>
                    </div>
                </div>

            </div>
        </div>




    </div>


    <img class=" mt-5 w-100 fadein-ele" src="<?php echo get_template_directory_uri()?>/assets/images/banner-3.jpg"
        alt="">


    <div class="row g-0 position-relative">
        <div class="col-lg-6 col-md-12 col-sm-12 col-12  red-bg ps-4 pe-4 pt-3 pb-3 word-from-div fadeinup-ele2">
            <div>A Word from Our Chair Person</div>
            <div class="light">On behalf of our Association, I would like to take this opportunity to express our
                sincere
                gratitude for the hard work and contributions of Executive Committee and subcommittees for their
                efforts and the efforts of their colleagues and the support and encouragement from various
                government departments, partners, service users and their families, volunteers and donors.</div>

            <div class="mt-4">

                <div class="row align-items-center">
                    <div class="col-6"> <a href="javascript:void(0)" class="button white">EXPLORE MORE </a>
                    </div>
                    <div class="col-6 text-end">- Alice Kwan Wong</div>

                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-12"></div>
    </div>

</div>


</div>
</div>

<script type="text/javascript">
$(function() {

    $('.fadeleft-ele , .faderight-ele, .fadein-ele,.fadeinup-ele,.fadeinup-ele2').css({
        'opacity': 0
    });


    $('.circle').css({
        'opacity': 0
    })
    // opacity: 0;
    //     -webkit-transform: scale3d(.3, .3, .3);
    //     transform:scale3d(.3, .3, .3)

    //     .fadeleft-ele {
    //     opacity: 0;
    // }

    // .faderight-ele {
    //     opacity: 0;
    // }

    // .fadein-ele {
    //     opacity: 0;
    // }

    Pace.on("done", function() {
        $('.main-container').fadeIn(0)
        checkvisible();

    });



    $(window).on(' scroll', function() {
        checkvisible();

    });
});

function checkvisible() {
    for (i = 0; i < $('.fadeleft-ele').length; i++) {
        if (
            $('.fadeleft-ele').eq(i).isInViewport() &&
            !$('.fadeleft-ele').eq(i).hasClass('animate__animated')
        ) {
            $('.fadeleft-ele').eq(i).addClass('animate__animated');
            $('.fadeleft-ele').eq(i).addClass('fadeInLeft2');
            $('.fadeleft-ele').eq(i).addClass('delay-3');
        }
    }
    for (i = 0; i < $('.faderight-ele').length; i++) {
        if (
            $('.faderight-ele').eq(i).isInViewport() &&
            !$('.faderight-ele').eq(i).hasClass('animate__animated')
        ) {
            $('.faderight-ele').eq(i).addClass('animate__animated');
            $('.faderight-ele').eq(i).addClass('fadeInRight2');
            $('.faderight-ele').eq(i).addClass('delay-3');
        }
    }
    for (i = 0; i < $('.fadein-ele').length; i++) {
        if (
            $('.fadein-ele').eq(i).isInViewport() &&
            !$('.fadein-ele').eq(i).hasClass('animate__animated')
        ) {
            $('.fadein-ele').eq(i).addClass('animate__animated');
            $('.fadein-ele').eq(i).addClass('animate__fadeIn');
            $('.fadein-ele').eq(i).addClass('delay-2');
        }
    }
    for (i = 0; i < $('.fadeinup-ele').length; i++) {
        if (
            $('.fadeinup-ele').eq(i).isInViewport() &&
            !$('.fadeinup-ele').eq(i).hasClass('animate__animated')
        ) {
            $('.fadeinup-ele').eq(i).addClass('animate__animated');
            $('.fadeinup-ele').eq(i).addClass('animate__fadeInUp');
            $('.fadeinup-ele').eq(i).addClass('delay-4');
        }
    }
    for (i = 0; i < $('.fadeinup-ele2').length; i++) {
        if (
            $('.fadeinup-ele2').eq(i).isInViewport() &&
            !$('.fadeinup-ele2').eq(i).hasClass('animate__animated')
        ) {
            $('.fadeinup-ele2').eq(i).addClass('animate__animated');
            $('.fadeinup-ele2').eq(i).addClass('fadeInUp2');
            $('.fadeinup-ele2').eq(i).addClass('delay-3');
        }
    }

    for (i = 0; i < $('.circle').length; i++) {
        if (
            $('.circle').eq(i).isInViewport() &&
            !$('.circle').eq(i).hasClass('animate__animated')
        ) {
            $('.circle').eq(i).addClass('animate__animated');
            $('.circle').eq(i).addClass('zoomIn2');
            // $('.fadein-ele').eq(i).addClass('delay-3');
        }
    }
}
</script>
<?php

get_footer();