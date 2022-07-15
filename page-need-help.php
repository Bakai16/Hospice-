<?php
/*
Template Name: Need Help
*/
?>

<?php get_header(); ?>

<div class="breadcrumbs">
    <div class="container">
        <a class=" breadcrumbs__item breadcrumbs__item-link" href="https://dev.kelechek.digital/hospicekg/">Главная</a>
        <span>
            <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.158203 8.825L3.97487 5L0.158203 1.175L1.3332 0L6.3332 5L1.3332 10L0.158203 8.825Z" fill="#616161" />
            </svg>
        </span>
        <span class="breadcrumbs__item breadcrumbs__item-currant">Нужна помощь</span>
    </div>
</div>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; else : endif; ?>

<div class="container">
    <img class="arrow-need-help" src="<?php bloginfo('template_url'); ?>/assets/need-help/arrow-nh.png" alt="design elements">
</div>

<div class="container">
    <img class="paint-need-help" src="<?php bloginfo('template_url'); ?>/assets/need-help/paints.png" alt="design elements">
</div>

<div class="container">
    <img class="ballon-need-help" src="<?php bloginfo('template_url'); ?>/assets/need-help/balloon.png" alt="design elements">
</div>

<section class="programs-first-kids-hospice">
    <div class="container">
        <div class="programs-first-kids-hospice__inner">
            <h4 class="programs-first-kids-hospice__inner__title">Программы первого детского хосписа:</h4>
            <div class="programs-first-kids-hospice__inner__all-accordions">

                <?php $posts = get_posts('category=6&numberposts=6'); ?>
                <?php foreach($posts as $post) : setup_postdata($post); ?>
                <div class="programs-first-kids-hospice__inner__all-accordions__accordion">
                    <div class="programs-first-kids-hospice__inner__all-accordions__accordion__header">
                        <?php the_title(); ?>
                    </div>
                    <div class="programs-first-kids-hospice__inner__all-accordions__accordion__body">
                        <?php the_content(); ?>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</section>

<section class="important-khow-need-help">
    <?php $posts = get_posts('category=17&numberposts=1'); ?>
    <?php foreach($posts as $post) : setup_postdata($post); ?>
    <?php the_content(); ?>
    <?php endforeach; ?>
</section>

<?php get_footer(); ?>
