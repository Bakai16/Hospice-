<?php
/*
Template Name: Donation
*/
?>

<?php get_header(); ?>
<div class="container">

            <div class="breadcrumbs">
                <a class=" breadcrumbs__item breadcrumbs__item-link" href="https://dev.kelechek.digital/hospicekg/">Главн</a>
                <span>
                    <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.158203 8.825L3.97487 5L0.158203 1.175L1.3332 0L6.3332 5L1.3332 10L0.158203 8.825Z"
                            fill="#616161" />
                    </svg>
                </span>
                <a class="breadcrumbs__item breadcrumbs__item-link breadcrumbs__item-currant" href="https://dev.kelechek.digital/hospicekg/donation/">Пожертвовать</a>
            </div>

            <img class="elements-img" src="<?php bloginfo('template_url'); ?>/assets/donate/design_elements.svg" alt="element">

            <div class="donate">
                <h1 class="donate__title"><?php the_title(); ?></h1>
                <h1 id="title-mobile"><?php the_title(); ?></h1>
            </div>
        </div>
        <section class="blc-bank">
            <div class="container">
                <div class="blc-bank__block">
                    <div class="blc-bank__wrapper">
                        <?php
                        // параметры по умолчанию
                        $my_posts = get_posts( array(
                        'numberposts' => -1,
                        'category_name'    => 'donation',
                        'orderby'     => 'date',
                        'order'       => 'ASC', 
                        'post_type'   => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        ) );

                        foreach( $my_posts as $post ){
                            setup_postdata( $post );
                            ?>
                            <div class="blc-bank__card "style="
                              <?php
                                 $field = get_field('donation_color');

                                 if($field == 'solitude'){
                                    ?>
                                          background-color: #E3ECFF
                                    <?php
                                 }
                                 if($field == 'blue'){
                                    ?>
                                          background-color: #CFFFFD;
                                    <?php
                                 }
                                 if($field == 'rose'){
                                    ?>
                                          background-color: #FFEBF9
                                    <?php
                                 }
                              ?>
                           ">
                            
                                <img class="blc-bank__card__img-cardtwo" src="<?php the_post_thumbnail_url(); ?>" alt="kicb">
                                <p class="blc-bank__card__main-title kicb"><?php the_title(); ?></p>
                                <div class="blc-bank__card__content">
                                <?php the_content(); ?>
                                </div>
                            </div>
                        <?php
                        }

                        wp_reset_postdata(); // сброс
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="blc-rectangle">
            <div class="container">
                <div class="main-blc">
                <img class="main-blc__img" src="<?php bloginfo('template_url'); ?>/assets/donate/pay_card-icon1.png" alt="pay-card">
                <p class="main-blc__main-title"><?php the_content(); ?></p>
                </div>
                <div class="card-purse">
                        <?php
                        // параметры по умолчанию
                        $my_posts = get_posts( array(
                        'numberposts' => -1,
                        'category_name'    => 'sponsors-2',
                        'orderby'     => 'date',
                        'order'       => 'ASC', 
                        'post_type'   => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        ) );

                            foreach( $my_posts as $post ){
                                setup_postdata( $post );
                                ?>
                            <div class="card-purse__elc-purse">
                            <img class="card-purse__elc-purse__img balanc-img" src="<?php the_post_thumbnail_url(); ?>" alt="pay-card">
                            <p class="title-mobile"><?php the_title(); ?></p>
                            <p class="card-purse__elc-purse__title"><?php the_content(); ?></p>
                            </div>
                            <?php
                            }

                            wp_reset_postdata(); // сброс
                            ?>
                   
                </div>
            </div>

        </section>

<?php get_footer(); ?>
