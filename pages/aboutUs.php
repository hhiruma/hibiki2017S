<?php
/*
Template Name: about us template
*/
?>

<?php get_header(); ?>

<main class="site-main" role="main">
    <?php get_template_part('pages/headBar');?>

    <div id="aboutUsContainer">
        <div id="aboutUsImg" class="flexslider">
            <ul class="slides">
                <li id="aboutUsSlides1">
                    <button class="playButton" hidden></button>
                    <button class="toggleButton" hidden></button>
                    <button class="resetButton" hidden></button>
                    <img id="aboutUsImg11" src="<?php echo get_template_directory_uri();?>/images/aboutUs/slide1/1.jpg">
                    <img id="aboutUsImg12" src="<?php echo get_template_directory_uri();?>/images/aboutUs/slide1/2.jpg">
                    <img id="aboutUsImg13" src="<?php echo get_template_directory_uri();?>/images/aboutUs/slide1/3.jpg">
                </li>
                <li id="aboutUsSlides2">
                    <button class="playButton" hidden></button>
                    <button class="toggleButton" hidden></button>
                    <button class="resetButton" hidden></button>
                    <img id="aboutUsImg21" src="<?php echo get_template_directory_uri();?>/images/aboutUs/slide2/1.jpg">
                    <img id="aboutUsImg22" src="<?php echo get_template_directory_uri();?>/images/aboutUs/slide2/2.jpg">
                    <img id="aboutUsImg23" src="<?php echo get_template_directory_uri();?>/images/aboutUs/slide2/3.jpg">
                    <img id="aboutUsImg24" src="<?php echo get_template_directory_uri();?>/images/aboutUs/slide2/4.jpg">
                </li>
                <li id="aboutUsSlides3">
                    <button class="playButton" hidden></button>
                    <button class="toggleButton" hidden></button>
                    <button class="resetButton" hidden></button>
                    <!-- <img id="aboutUsImg5" src="<?php echo get_template_directory_uri();?>/images/aboutUs/slide3/5.jpg">
                    <img id="aboutUsImg6" src="<?php echo get_template_directory_uri();?>/images/aboutUs/slide3/6.jpg"> -->
                </li>
                <li id="aboutUsSlides4">
                    fourth slide
                </li>
            </ul>
        </div>

        <div id="aboutUsDesc">
            <div id="aboutUsTitle">
                ABOUT US
            </div>
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        魁響とは？
                        <?php
                            // has to fix post number
                            $post = get_post(29);
                            $post_content = sanitize_post_field('post_content', $post->post_content, $post->ID, 'display');
                            //echo $post_content;
                        ?>
                    </li>
                    <li>
                        舞台について
                    </li>
                    <li>
                        練習について
                    </li>
                    <li>
                        各種イベントについて
                    </li>
                </ul>
            </div>
        </div>

        <img id="aboutUsBg" src="<?php echo get_template_directory_uri();?>/images/aboutUs/bg/bg.png">
        <img id="aboutUsBgReverse" src="<?php echo get_template_directory_uri();?>/images/aboutUs/bg/bg_reverse.png">
    </div>
</main>

<?php get_footer(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/aboutUsPage.css">
<script src="<?php echo get_template_directory_uri();?>/js/aboutUsPage.js"></script>