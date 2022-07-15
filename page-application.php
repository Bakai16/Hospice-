<?php
/*
Template Name: Application
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
        <a class="breadcrumbs__item breadcrumbs__item-link" href="https://dev.kelechek.digital/hospicekg/need-help/">Нужна помощь</a>
        <span>
            <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.158203 8.825L3.97487 5L0.158203 1.175L1.3332 0L6.3332 5L1.3332 10L0.158203 8.825Z" fill="#616161" />
            </svg>
        </span>
        <span class="breadcrumbs__item breadcrumbs__item-currant">Анкета</span>
    </div>
</div>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; else : endif; ?>

<div class="container">
    <img class="application-element-ballon-red__img" src="<?php bloginfo('template_url'); ?>/assets/application/balloon-red.png"
        alt="Красный шарик">
</div>

<div class="container">
    <img class="application-element-ballon-yellow__img" src="<?php bloginfo('template_url'); ?>/assets/application/balloon-yellow.png"
        alt="Красный шарик">
</div>

<?php get_footer(); ?>