<?php
/*
Template Name: Legal-entity
*/
?>

<?php get_header(); ?>
<main class="main">
        <div class="container">

            <div class="breadcrumbs">
                <a class=" breadcrumbs__item breadcrumbs__item-link" href="https://dev.kelechek.digital/hospicekg/">Главная</a>
                <span>
                    <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.158203 8.825L3.97487 5L0.158203 1.175L1.3332 0L6.3332 5L1.3332 10L0.158203 8.825Z"
                            fill="#616161" />
                    </svg>
                </span>
                <a class="breadcrumbs__item breadcrumbs__item-link" href="https://dev.kelechek.digital/hospicekg/can-help/">Хочу помочь</a>
                <span>
                    <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.158203 8.825L3.97487 5L0.158203 1.175L1.3332 0L6.3332 5L1.3332 10L0.158203 8.825Z"
                            fill="#616161" />
                    </svg>
                </span>
                <span class="breadcrumbs__item breadcrumbs__item-currant">Юридические лица</span>
            </div>

            <section class="blc-entity">
                <div class="blc-entity-wrapper">
                    <div class="blc-main-title"><?php the_title() ?></div>
                    <div class="blc-sub-title"> <?php the_content() ?></div>
                </div>

            </section>
        </div>



        <section class="blc-programs-toggle">
            <div class="container">
                <div class="blc-programs-toggle__inner">
                    <h4 class="blc-programs-toggle__inner__title"><?php the_field('accardeon-title'); ?></h4>

                    <div class="blc-programs-toggle__inner__all-accordions">
                    <?php
                        // параметры по умолчанию
                        $my_posts = get_posts( array(
                        'numberposts' => -1,
                        'category_name'    => 'acordions',
                        'orderby'     => 'date',
                        'order'       => 'ASC', 
                        'post_type'   => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        ) );

                        foreach( $my_posts as $post ){
                            setup_postdata( $post );
                            ?>
                        <div class="blc-programs-toggle__inner__all-accordions__accordion">
                            <div class="blc-programs-toggle__inner__all-accordions__accordion__header">
                                <?php the_title() ?></div>
                            <div class="blc-programs-toggle__inner__all-accordions__accordion__body">
                                <p class="blc-programs-toggle__inner__all-accordions__accordion__body__description">
                                    <?php the_content() ?>
                                </p>
                            </div>
                        </div>
                        <?php
                        }

                        wp_reset_postdata(); // сброс
                        ?>
                        
                    </div>
                </div>
            </div>
            </div>
        </section>


        <section class="blc-more-info">
            <div class="container">
                <div class="blc-info-title">
                    <?php the_field('legal-content'); ?>
                    <img class="bg-baloon-yellow" src="<?php bloginfo('template_url'); ?>/assets/legal-entity/balloon_4.png" alt="palm">
                    <img class="bg-legal" src="<?php the_field('yur_foto'); ?>" alt="design-element">
                    <img class="bg-baloon-pink" src="<?php bloginfo('template_url'); ?>/assets/legal-entity/balloon_3.png" alt="arrow">
                    <img class="bg-finger" src="<?php bloginfo('template_url'); ?>/assets/legal-entity/finger_1.png" alt="baloon">
                </div>
            </div>
        </section>

<?php get_footer(); ?>