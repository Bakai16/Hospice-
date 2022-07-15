<?php
/*
Template Name: About fund and Our mission
*/
?>
<?php get_header(); ?>
      <main>
        <div class="container">
            <div class="breadcrumbs">
                <a class=" breadcrumbs__item breadcrumbs__item-link" href="https://dev.kelechek.digital/hospicekg/">Главная</a>
                <span>
                    <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.158203 8.825L3.97487 5L0.158203 1.175L1.3332 0L6.3332 5L1.3332 10L0.158203 8.825Z"
                            fill="#616161" />
                    </svg>
                </span>
                <span class="breadcrumbs__item breadcrumbs__item-currant">О фонде</span>
            </div>

            <div class="about-wrapper">
              <div class="blc">
                <div class="entry">
                  <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                      <h2 class="about-title"><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                      <?php endwhile; else : endif; ?>
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

            <img class="yellow-palm" src="<?php bloginfo('template_url'); ?>/assets/about-fund/finger-about-yellow.svg" alt="palm">
            <img class="drop-design" src="<?php bloginfo('template_url'); ?>/assets/about-fund/drop-about.svg" alt="drop">
            <img class="green-palm" src="<?php bloginfo('template_url'); ?>/assets/about-fund/finger-about-green.png" alt="palm">
        </div>
    </main>
<?php get_footer(); ?>
