<?php
/*
Template Name: Volunteering
*/
?>
<?php get_header(); ?>

 <main class="volunteering">
        <div class="container">

            <div class="breadcrumb-vol">
                <div class="breadcrumb-vol__inner">
                    <a class="breadcrumb-vol__inner__links" href="https://dev.kelechek.digital/hospicekg/">Главная</a>
                    <a class="breadcrumb-vol__inner__links" href="https://dev.kelechek.digital/hospicekg/can-help/">&GT; Хочу помочь</a>
                    <a class="breadcrumb-vol__inner__links" href="https://dev.kelechek.digital/hospicekg/volonterstvo/">&GT; <strong>Волонтерство</strong></a>
                </div>
            </div>

              <div class="info-vol">
                <article class="title-descr-elems">
                    <h3 class="title-descr-elems__title"><?php the_title(); ?></h3>
                    <p class="title-descr-elems__descr"><?php the_content(); ?></p>
                    <img class="title-descr-elems__vol-arrow" src="<?php bloginfo('template_url'); ?>/assets/volunteering/arrow-left.svg"
                        alt="Волонтерство стрелка">
                    <img class="title-descr-elems__vol-finger-violet" src="<?php bloginfo('template_url'); ?>/assets/volunteering/finger_violet.svg"
                        alt="Волонтерство Рука Желтый">
                    <img class="title-descr-elems__vol-finger-yellow" src="<?php bloginfo('template_url'); ?>/assets/volunteering/finger-yellow.svg"
                        alt="Волонтерство Рука Фиолетовый">
                </article>
            </div>
        </div>
        
        <section class="accordions">
            <div class="container">
            <?php $posts = get_posts('category=18&numberposts=10'); ?>
                <?php foreach($posts as $post) : setup_postdata($post); ?>
                <div class="accordions__inner__item">
                    <div class="accordions__inner__item__title">
                        <?php the_title(); ?>
                    </div>
                    <div class="accordions__inner__item__txt-blc">
                        <?php the_content(); ?>
                    </div>
                </div>
                 <?php endforeach; ?>
            </div>
        </section>

        <section class="slider">
            <div class="container">
                <div class="slider__inner">
                    <div class="slider__inner__header"><h4 class="slider__inner__header__title">Будни волонтера</h4></div>
                    <div class="slider__inner__body">                  
                        <div class="owl-carousel owl-theme">   
                            <?php
                                // параметры по умолчанию
                                $my_posts = get_posts( array(
                                'numberposts' => -1,
                                'category_name'    => 'slider-vol',
                                'orderby'     => 'date',
                                'order'       => 'ASC', 
                                'post_type'   => 'post',
                                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                                ) );

                                foreach( $my_posts as $post ){
                                    setup_postdata( $post );
                                    ?>
                                <div class="item">
                                    <?php the_content(); ?>
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


<?php get_footer(); ?>
