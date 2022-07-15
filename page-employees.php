<?php
/*
Template Name: Employees
*/
?>

<?php get_header(); ?>

<div class="container">
    <div class="breadcrumbs">
        <a class=" breadcrumbs__item breadcrumbs__item-link" href="https://dev.kelechek.digital/hospicekg/">Главная</a>
        <span>
            <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.158203 8.825L3.97487 5L0.158203 1.175L1.3332 0L6.3332 5L1.3332 10L0.158203 8.825Z"
                    fill="#616161" />
            </svg>
        </span>
        <a class="breadcrumbs__item breadcrumbs__item-link" href="https://dev.kelechek.digital/hospicekg/about/">О фонде</a>
        <span>
            <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.158203 8.825L3.97487 5L0.158203 1.175L1.3332 0L6.3332 5L1.3332 10L0.158203 8.825Z"
                    fill="#616161" />
            </svg>
        </span>
        <span class="breadcrumbs__item breadcrumbs__item-currant">Сотрудники</span>
    </div>

    <div class="empl-wrapper">
        <div class="blc">
            <div class="entry">
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                    <h2 class="about-title"><?php the_title(); ?></h2>
                <?php the_content(); ?>
                <?php endwhile; else : endif; ?>
            </div>

            <div class="empl-card">
                <?php $posts = get_posts('category=7&numberposts=6'); ?>
                <?php foreach($posts as $post) : setup_postdata($post); ?>
                    <div class="empl-card__item">
                        <div class="empl-card__item-inner">
                            <img class="empl-card__img" src="<?php the_post_thumbnail_url();?>">
                            <h3 class="empl-card__name"><?php the_title(); ?></h3>
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <aside class="blc-sidebar">
            <?php
                wp_nav_menu( [
                'menu'            => 'Sidebar-menu',
                'container'       => false,
                'menu_class'      => 'side-menubar',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'items_wrap'      => '<ul class="side-menubar">%3$s</ul>',
                'depth'           => 1,
                ] );
            ?>
        </aside>
    </div>
</div>

<?php get_footer(); ?>