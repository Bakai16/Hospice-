<?php
/*
Template Name: Official-docs
*/
?>

<?php get_header(); ?>

  <div class="container">
    <section class="documents">
      <div class="breadcrumbs">
        <a class=" breadcrumbs__item breadcrumbs__item-link" href="../main.html">Главная</a>
        <span>
          <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0.158203 8.825L3.97487 5L0.158203 1.175L1.3332 0L6.3332 5L1.3332 10L0.158203 8.825Z" fill="#616161" />
          </svg>
        </span>
        
        <a class="breadcrumbs__item breadcrumbs__item-link" href="about-fund.html">О фонде</a>
        <span>
          <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0.158203 8.825L3.97487 5L0.158203 1.175L1.3332 0L6.3332 5L1.3332 10L0.158203 8.825Z" fill="#616161" />
          </svg>
        </span>
        
        <span class="breadcrumbs__item breadcrumbs__item-currant">Официальные документы</span>
      </div>
      
      <h2 class="official-docs_title"><?php the_title(); ?></h2>
      
      <div class="blc_documents">
        <div class="documents_cards">
          <?php $posts = get_posts('category=25&numberposts=6'); ?>
          <?php foreach($posts as $post) : setup_postdata($post); ?>
          <div class="document-cards_item">
            <a class="doc-link" href="https://drive.google.com/file/d/1DOfCFn7laqf_b3V1tK-gMRb0GA9fHLzO/view?usp=sharing">
              <img class="docs-card-img" src="<?php the_post_thumbnail_url();?>">
              <div class="docs-card_title">
                <h3 class="doc-name"><?php the_title(); ?></h3>
              </div>
            </a>
          </div>
          <?php endforeach; ?>
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
            ]);
          ?>
        </aside>
      </div>
    </section>
  </div>


  <!-- Desing elements images -->
  <div class="container">
    <div class="docs-img-wrapper">
      <img class="bg-docs-baloon" src="<?php bloginfo('template_url'); ?>/assets/official-docs/docs_baloon.svg" alt="design element baloon">
      <img class="bg-docs-finger" src="<?php bloginfo('template_url'); ?>/assets/official-docs/docs_finger.svg" alt="design element finger">
      <img class="bg-docs-arrow_1000px" src="<?php bloginfo('template_url'); ?>/assets/official-docs/docs_arrow_1000px.svg" alt="design element arrow">
      <img class="bg-docs-finger_1000px" src="<?php bloginfo('template_url'); ?>/assets/official-docs/docs_finger_1000px.svg" alt="design element finger">
      <img class="bg-docs-finger_768px" src="<?php bloginfo('template_url'); ?>/assets/official-docs/docs_finger_768px.svg" alt="design element finger">
    </div>
  </div>

<?php get_footer(); ?>
