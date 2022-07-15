<?php
/*
Template Name: Reports
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
            <span class="breadcrumbs__item breadcrumbs__item-currant">Отчеты</span>
         </div>

         

         <div class="reports-wrapper">
            <div class="blc">
               <div class="entry">
                 <h2 class="report-title"><?php the_title(); ?></h2>
                  <section class="reports reports__section-one">
                     <div class="reports__subtitle">
                     <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                        <h3 class="reports__year"><?php the_content(); ?></h3>
                      <?php endwhile; else : endif; ?>
                     </div>

                     <div class="report-cards">
                     <?php $posts = get_posts('category=8&numberposts=6'); ?>
                     <?php foreach($posts as $post) : setup_postdata($post); ?>
                        <div class="report-cards__item">
                           <div class="report-cards__item-inner">
                              <img class="report-cards__icon" src="<?php bloginfo('template_url'); ?>/assets/report/download.svg" alt="download-arrow">
                              <a class="report-cards__link" download><?php the_content(); ?></a>
                           </div>
                        </div>
                     <?php endforeach; ?>  
                     </div>

                  </section>
                  <section>
                     <div class="reports__subtitle reports__second-subtitle">
                     

                      <?php $posts = get_posts('post_type=page&page_id=282'); ?>
                     <?php foreach($posts as $post) : setup_postdata($post); ?>                
                       <h3 class="reports__year"><?php the_title(); ?></h3>
                         <h3 class="reports__year"> <?php the_content(); ?></h3>
                     <?php endforeach; ?>
                     </div>
                     <div class="download-btn">
                        <img class="report-cards__icon" src="<?php bloginfo('template_url'); ?>/assets/report/download.svg" alt="download-arrow">
                        <a class="annual-report" href="#" download>Годовой отчет</a>
                     </div>
                     <div class="report-cards">
                        <?php $posts = get_posts('category=10&numberposts=6'); ?>
                        <?php foreach($posts as $post) : setup_postdata($post); ?>
                           <div class="report-cards__item">
                              <div class="report-cards__item-inner">
                                 <img class="report-cards__icon" src="<?php bloginfo('template_url'); ?>/assets/report/download.svg" alt="download-arrow">
                                 <a class="report-cards__link" download><?php the_content(); ?></a>
                              </div>
                           </div>
                        <?php endforeach; ?>  
                     </div>
                    
                  </section>
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
                  ]);
               ?>
            </aside>
         </div>
       
         <img class="report-arrow" src="<?php bloginfo('template_url'); ?>/assets/report/report-arrow.svg" alt="design-arrow">
         <img class="report-pink-palm" src="<?php bloginfo('template_url'); ?>/assets/report/finger-pink-report.svg" alt="design-palm">
         <img class="report-yellow-baloon" src="<?php bloginfo('template_url'); ?>/assets/report/balloon-yellow-report.svg" alt="baloon">
         <img class="report-green-finger" src="<?php bloginfo('template_url'); ?>/assets/report/finger-green-report.svg" alt="design-palm">
         <img class="report-pink-baloon" src="<?php bloginfo('template_url'); ?>/assets/report/balloon-pink-report.svg" alt="baloon">
         <img class="report-violet-palm" src="<?php bloginfo('template_url'); ?>/assets/report/finger-violet-report.svg" alt="design-palm">

   </div> 
         



<?php get_footer(); ?>
