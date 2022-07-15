<?php get_header(); ?>
    <section class="blc-topscr">
      <div class="container">
         <div class="blc-topscr_info">
            <?php $posts = get_posts('post_type=page&page_id=7'); ?>
            <?php foreach($posts as $post) : setup_postdata($post); ?>                
              <h2 class="blc-topscr_title"><?php the_title(); ?></h2>
              <div class="blc-topscr_text">
              <?php the_content(); ?>
            </div>
            <a href="<?php the_field('topscreen_btn'); ?>" class="blc-topscr_btn">Помочь</a>
            <?php endforeach; ?>
         </div>

         <div class="images">
            <img src="<?php bloginfo('template_url'); ?>/assets/main/img/mainbg.svg" class="images_bgimg">
            <img src="<?php bloginfo('template_url'); ?>/assets/main/img/main.png" class="images_img">
            <img src="<?php bloginfo('template_url'); ?>/assets/main/icons/fingers/topsr1svg.svg" class="images_finger1">
            <img src="<?php bloginfo('template_url'); ?>/assets/main/icons/fingers/topsr2.svg" class="images_finger2">
         </div>

      </div>
   </section>



   <section class="blc-ourkids">
      <div class="container">
         <div class="blc-ourkids__inner">
            <div class="head">
               <h2 class="head-title">Наши дети</h2>
               <img src="<?php bloginfo('template_url'); ?>/assets/main/icons/fingers/kids1.svg" class="head_img1">
               <img src="<?php bloginfo('template_url'); ?>/assets/main/icons/fingers/kids2.svg" class="head_img2">
            </div>

            <div class="swiper mySwiper blc-ourkids_slider">
               <div class="swiper-wrapper slider-wrapper ">
                  <?php
                  // параметры по умолчанию
                  $my_posts = get_posts( array(
                  'numberposts' => -1,
                  'category_name'    => 'kids',
                  'orderby'     => 'date',
                  'order'       => 'ASC',
                  'post_type'   => 'post',
                  'suppress_filters' => true,
                   // подавление работы фильтров изменения SQL запроса
                  ) );

                  foreach( $my_posts as $post ){
                        setup_postdata( $post );
                     ?>
                        <div class="swiper-slide slider-wrapper_item" style="
                        <?php
                              $field = get_field('slider_color');

                              if($field == 'blue'){
                                 ?>
                                       background: #E3ECFF
                                 <?php
                              }
                              if($field == 'green'){
                                 ?>
                                       background: #A1EB7C;
                                 <?php
                              }
                              if($field == 'rose'){
                                 ?>
                                       background: #FFEBF9;
                                 <?php
                              }
                           ?>
                           ">
                           <img src="<?php the_post_thumbnail_url(); ?>" class="slider-wrapper_img">
                           <h3 class="slider-wrapper_title"><?php the_title(); ?></h3>
                           <div class="slider-wrapper_descr"><strong>Диагноз:</strong><?php the_content(); ?></div>
                           <div class="status">
                              <div class="status_progres"><?php the_field('sboru'); ?>%</div>
                              <div class="progress">
                                 <div class="progress-bar" data-progress="<?php the_field('sboru'); ?>">
                              </div>
                              </div>
                              <div class="status_info">
                                 <div class="status_text">Собрано: <br>
                                    <strong><?php the_field('collected'); ?></strong>
                                 </div>
                                 <div class="status_text">Сумма к сбору:<br>
                                    <strong><?php the_field('amount'); ?></strong>
                                 </div>
                              </div>
                           </div>
                           <a class="main_btn slider-wrapper_btn " href="https://dev.kelechek.digital/hospicekg/donation/">хочу помочь</a>
                        </div>
                           <?php
                        }

                  wp_reset_postdata(); // сброс
                  ?>
               </div>
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
         </div>
      </div>
   </section>

   <section class="blc-how_help">
      <div class="container">
         <div class="head">
            <h2 class="head-title">Хочу помочь</h2>
            <img src="<?php bloginfo('template_url'); ?>/assets/main/icons/fingers/howhelp1.svg" class="blc-how_help_img1">
            <img src="<?php bloginfo('template_url'); ?>/assets/main/icons/fingers/howhelp2.svg" class="blc-how_help_img2">
         </div>

         <div class="wrapper">
            <div class="wrapper_item1">
               <div class="wrapper_item1_img">
                  <img src="<?php bloginfo('template_url'); ?>/assets/main/img/howhelpimg.svg" alt="">
               </div>
               <a class="main_btn wrapper_item1_btn" href="https://dev.kelechek.digital/hospicekg/can-help/">хочу помочь</a>
            </div>
            <div class="wrapper_item2">
               <div class="wrapper_item2_list">
                  <a class="wrapper_item2_link wrapper_item2_link_text  wrapper_item2_list_header"
                     href="https://dev.kelechek.digital/hospicekg/volonterstvo/">
                     <img class="wrapper_item2_img" src="<?php bloginfo('template_url'); ?>/assets/main/img/helpheart.svg">
                     Волонтерство</a>
                  <a class="wrapper_item2_link wrapper_item2_link_text wrapper_item2_list_header wrapper_item2_list_header2"
                     href="https://dev.kelechek.digital/hospicekg/can-help/">
                     <img class="wrapper_item2_img" src="<?php bloginfo('template_url'); ?>/assets/main/img/helpsocial.svg">
                     Социальная помощь</a>
                  <a class="wrapper_item2_link wrapper_item2_link_text" href="https://dev.kelechek.digital/hospicekg/can-help/">
                     <img class="wrapper_item2_img" src="<?php bloginfo('template_url'); ?>/assets/main/img/helptransport.svg">
                     Транспорт</a>
                  <a class="wrapper_item2_link wrapper_item2_link_text wrapper_item2_list_header4"
                     href="https://dev.kelechek.digital/hospicekg/can-help/">
                     <img class="wrapper_item2_img" src="<?php bloginfo('template_url'); ?>/assets/main/img/helpmaterial.svg">
                     Материальная помощь</a>
               </div>
            </div>
         </div>
      </div>
   </section>


   <section class="blc-news">
      <div class="container">
         <div class="head">
            <h2 class="head-title">#жизнь_хосписа</h2>
            <img src="<?php bloginfo('template_url'); ?>/assets/main/icons/fingers/news1.svg" class="blc-news_img1">
            <img src="<?php bloginfo('template_url'); ?>/assets/main/icons/fingers/news2.svg" class="blc-news_img2">
         </div>

         <div class="blc-news_control">
            <span class="itemz activez  main_btn blc-news_control_all" data-name="all">все новости</span>
            <span class="itemz  main_btn blc-news_control_news" data-name="news_hospice">новости хосписа</span>
            <span class="itemz main_btn blc-news_control_about" data-name="smi_our">СМИ о нас</span>
         </div>

         <div class="list-container" style="display: none">
            <?php $posts = get_posts('category=1&numberposts=200'); ?>
            <?php foreach($posts as $post) : setup_postdata($post); ?>
            <div class="vid-list" 
                              <?php
                                    $field = get_field('news_filter');

                                    if($field == 'news_hospice'){
                                       ?>
                                           data-name="news_hospice"
                                       <?php
                                    }
                                    if($field == 'smi_our'){
                                       ?>
                                          data-name="smi_our"
                                       <?php
                                    }
                                 ?>
                           >
               <a class="hover" href="<?php echo get_permalink(); ?>"><img src="<?php the_post_thumbnail_url( $size ); ?>" class="thumbnail"></a>
               <div class="flex-div">
                  <div class="vid-info">
                    <a href="<?php echo get_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
                    <?php the_time('d M Y') ?>
                  </div>
               </div>
            </div>
            <?php endforeach; ?>
         </div>


         <div class="paginationn">
         </div>
      </div>
   </section>

   <section class="blc_sponsor">
      <div class="container">
         <div class="head">
            <h2 class="head-title">Наши спонсоры</h2>
            <img src="<?php bloginfo('template_url'); ?>/assets/main/icons/fingers/sponsoor1.svg" class="blc_sponsor_img1">
            <img src="<?php bloginfo('template_url'); ?>/assets/main/icons/fingers/sponsoor2.svg" class="blc_sponsor_img2">
            <img src="<?php bloginfo('template_url'); ?>/assets/main/icons/fingers/sponsoor3.svg" class="blc_sponsor_img3">
         </div>

         <div class="blc-sponsor_slider">
         <?php $posts = get_posts('category=4&numberposts=200'); ?>
            <?php foreach($posts as $post) : setup_postdata($post); ?>
              <div class="slider__item filter">
              <?php the_content(); ?>
            </div>
            <?php endforeach; ?>
         </div>


      </div>
   </section>


   <section class="blc_contactmain">
      <div class="container">
         <div class="contact-box">
            <div class="contact-box_left"><iframe id="map_42436785" frameborder="0" "
               sandbox=" allow-modals allow-forms allow-scripts allow-same-origin allow-popups
                  allow-top-navigation-by-user-activation"></iframe>
               <script type="text/javascript">
                  (function (e, t) {
                     var r = document.getElementById(e);
                     r.contentWindow.document.open(), r.contentWindow.document.write(atob(t)), r.contentWindow
                        .document
                        .close()
                  })("map_42436785",
                     "PGJvZHk+PHN0eWxlPgogICAgICAgIGh0bWwsIGJvZHkgewogICAgICAgICAgICBtYXJnaW46IDA7CiAgICAgICAgICAgIHBhZGRpbmc6IDA7CiAgICAgICAgfQogICAgICAgIGh0bWwsIGJvZHksICNtYXAgewogICAgICAgICAgICB3aWR0aDogMTAwJTsKICAgICAgICAgICAgaGVpZ2h0OiAxMDAlOwogICAgICAgIH0KICAgICAgICAuYnVsbGV0LW1hcmtlciB7CiAgICAgICAgICAgIHdpZHRoOiAyMHB4OwogICAgICAgICAgICBoZWlnaHQ6IDIwcHg7CiAgICAgICAgICAgIGJveC1zaXppbmc6IGJvcmRlci1ib3g7CiAgICAgICAgICAgIGJhY2tncm91bmQtY29sb3I6ICNmZmY7CiAgICAgICAgICAgIGJveC1zaGFkb3c6IDAgMXB4IDNweCAwIHJnYmEoMCwgMCwgMCwgMC4yKTsKICAgICAgICAgICAgYm9yZGVyOiA0cHggc29saWQgIzAyODFmMjsKICAgICAgICAgICAgYm9yZGVyLXJhZGl1czogNTAlOwogICAgICAgIH0KICAgICAgICAucGVybWFuZW50LXRvb2x0aXAgewogICAgICAgICAgICBiYWNrZ3JvdW5kOiBub25lOwogICAgICAgICAgICBib3gtc2hhZG93OiBub25lOwogICAgICAgICAgICBib3JkZXI6IG5vbmU7CiAgICAgICAgICAgIHBhZGRpbmc6IDZweCAxMnB4OwogICAgICAgICAgICBjb2xvcjogIzI2MjYyNjsKICAgICAgICB9CiAgICAgICAgLnBlcm1hbmVudC10b29sdGlwOmJlZm9yZSB7CiAgICAgICAgICAgIGRpc3BsYXk6IG5vbmU7CiAgICAgICAgfQogICAgICAgIC5kZy1wb3B1cF9oaWRkZW5fdHJ1ZSB7CiAgICAgICAgICAgIGRpc3BsYXk6IGJsb2NrOwogICAgICAgIH0KICAgICAgICAubGVhZmxldC1jb250YWluZXIgLmxlYWZsZXQtcG9wdXAgLmxlYWZsZXQtcG9wdXAtY2xvc2UtYnV0dG9uIHsKICAgICAgICAgICAgdG9wOiAwOwogICAgICAgICAgICByaWdodDogMDsKICAgICAgICAgICAgd2lkdGg6IDIwcHg7CiAgICAgICAgICAgIGhlaWdodDogMjBweDsKICAgICAgICAgICAgZm9udC1zaXplOiAyMHB4OwogICAgICAgICAgICBsaW5lLWhlaWdodDogMTsKICAgICAgICB9CiAgICA8L3N0eWxlPjxkaXYgaWQ9Im1hcCI+PC9kaXY+PHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiIHNyYz0iaHR0cHM6Ly9tYXBzLmFwaS4yZ2lzLnJ1LzIuMC9sb2FkZXIuanM/cGtnPWZ1bGwmYW1wO3NraW49bGlnaHQiPjwvc2NyaXB0PjxzY3JpcHQ+KGZ1bmN0aW9uKGUsdCl7dmFyIHI9SlNPTi5wYXJzZShlKSxuPUpTT04ucGFyc2UodCk7ZnVuY3Rpb24gYShlKXtyZXR1cm4gZGVjb2RlVVJJQ29tcG9uZW50KGF0b2IoZSkuc3BsaXQoIiIpLm1hcChmdW5jdGlvbihlKXtyZXR1cm4iJSIrKCIwMCIrZS5jaGFyQ29kZUF0KDApLnRvU3RyaW5nKDE2KSkuc2xpY2UoLTIpfSkuam9pbigiIikpfURHLnRoZW4oZnVuY3Rpb24oKXt2YXIgZT1ERy5tYXAoIm1hcCIse2NlbnRlcjpbbi5sYXQsbi5sb25dLHpvb206bi56b29tfSk7REcuZ2VvSlNPTihyLHtzdHlsZTpmdW5jdGlvbihlKXt2YXIgdCxyLG4sYSxvO3JldHVybntmaWxsQ29sb3I6bnVsbD09PSh0PWUpfHx2b2lkIDA9PT10P3ZvaWQgMDp0LnByb3BlcnRpZXMuZmlsbENvbG9yLGZpbGxPcGFjaXR5Om51bGw9PT0ocj1lKXx8dm9pZCAwPT09cj92b2lkIDA6ci5wcm9wZXJ0aWVzLmZpbGxPcGFjaXR5LGNvbG9yOm51bGw9PT0obj1lKXx8dm9pZCAwPT09bj92b2lkIDA6bi5wcm9wZXJ0aWVzLnN0cm9rZUNvbG9yLHdlaWdodDpudWxsPT09KGE9ZSl8fHZvaWQgMD09PWE/dm9pZCAwOmEucHJvcGVydGllcy5zdHJva2VXaWR0aCxvcGFjaXR5Om51bGw9PT0obz1lKXx8dm9pZCAwPT09bz92b2lkIDA6by5wcm9wZXJ0aWVzLnN0cm9rZU9wYWNpdHl9fSxwb2ludFRvTGF5ZXI6ZnVuY3Rpb24oZSx0KXtyZXR1cm4icmFkaXVzImluIGUucHJvcGVydGllcz9ERy5jaXJjbGUodCxlLnByb3BlcnRpZXMucmFkaXVzKTpERy5tYXJrZXIodCx7aWNvbjpmdW5jdGlvbihlKXtyZXR1cm4gREcuZGl2SWNvbih7aHRtbDoiPGRpdiBjbGFzcz0nYnVsbGV0LW1hcmtlcicgc3R5bGU9J2JvcmRlci1jb2xvcjogIitlKyI7Jz48L2Rpdj4iLGNsYXNzTmFtZToib3ZlcnJpZGUtZGVmYXVsdCIsaWNvblNpemU6WzIwLDIwXSxpY29uQW5jaG9yOlsxMCwxMF19KX0oZS5wcm9wZXJ0aWVzLmNvbG9yKX0pfSxvbkVhY2hGZWF0dXJlOmZ1bmN0aW9uKGUsdCl7ZS5wcm9wZXJ0aWVzLmRlc2NyaXB0aW9uJiZ0LmJpbmRQb3B1cChhKGUucHJvcGVydGllcy5kZXNjcmlwdGlvbikse2Nsb3NlQnV0dG9uOiEwLGNsb3NlT25Fc2NhcGVLZXk6ITB9KSxlLnByb3BlcnRpZXMudGl0bGUmJnQuYmluZFRvb2x0aXAoYShlLnByb3BlcnRpZXMudGl0bGUpLHtwZXJtYW5lbnQ6ITAsb3BhY2l0eToxLGNsYXNzTmFtZToicGVybWFuZW50LXRvb2x0aXAifSl9fSkuYWRkVG8oZSl9KX0pKCdbeyJ0eXBlIjoiRmVhdHVyZSIsInByb3BlcnRpZXMiOnsidGl0bGUiOiIwSlRRdGRHQzBZSFF1dEM0MExrZzBLWFF2dEdCMEwvUXVOR0IiLCJkZXNjcmlwdGlvbiI6IlBIQSswSi9RdnRDOTBMWFF0TkMxMEx2UmpOQzkwTGpRdWpvZ1l5QXdPVG93TUNEUXROQytJREl3T2pBd0lEeGljajRLMEpMUmd0QyswWURRdmRDNDBMbzZJR01nTURrNk1EQWcwTFRRdmlBeU1Eb3dNRHhpY2o0SzBLSFJnTkMxMExUUXNEb2dZeUF3T1Rvd01DRFF0TkMrSURJd09qQXdQR0p5UGdyUXA5QzEwWUxRc3RDMTBZRFFzem9nWXlBd09Ub3dNQ0RRdE5DK0lESXdPakF3UEdKeVBnclFuOUdQMFlMUXZkQzQwWWJRc0RvZ1l5QXdPVG93TUNEUXROQytJREl3T2pBd1BHSnlQZ3JRb2RHRDBMSFFzZEMrMFlMUXNEb2dZeUF3T1Rvd01DRFF0TkMrSURJd09qQXdQR0p5UGdyUWt0QyswWUhRdXRHQTBMWFJnZEMxMEwzUmpOQzFPaUJqSURBNU9qQXdJTkMwMEw0Z01qQTZNREE4WW5JK1BDOXdQZz09IiwiY29sb3IiOiIjZmYwMDAzIiwiekluZGV4IjoxMDAwMDAwMDAwfSwiZ2VvbWV0cnkiOnsidHlwZSI6IlBvaW50IiwiY29vcmRpbmF0ZXMiOls3NC41NzcyOTMsNDIuODgwOTZdfSwiaWQiOjY5NH1dJywneyJsYXQiOjQyLjg3OTY0MzU5Mzg5ODc2LCJsb24iOjc0LjU3NzQwNTQ1MjcyODI5LCJ6b29tIjoxNX0nKTwvc2NyaXB0PjxzY3JpcHQgYXN5bmM9IiIgdHlwZT0idGV4dC9qYXZhc2NyaXB0IiBzcmM9Imh0dHBzOi8vd3d3Lmdvb2dsZXRhZ21hbmFnZXIuY29tL2d0YWcvanM/aWQ9VUEtMTU4ODY2MTY4LTEiPjwvc2NyaXB0PjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij4oZnVuY3Rpb24oZSl7ZnVuY3Rpb24gdCgpe2RhdGFMYXllci5wdXNoKGFyZ3VtZW50cyl9d2luZG93LmRhdGFMYXllcj13aW5kb3cuZGF0YUxheWVyfHxbXSx0KCJqcyIsbmV3IERhdGUpLHQoImNvbmZpZyIsZSksd2luZG93Lmd0YWc9dH0pKCdVQS0xNTg4NjYxNjgtMScpPC9zY3JpcHQ+PC9ib2R5Pg=="
                  )

               </script>
            </div>
            <div class="contact-box_right">
              <?php echo do_shortcode('[contact-form-7 id="19" title="Контактная форма 1"]'); ?>
            </div>
         </div>

      </div>
   </section>

<?php get_footer(); ?>
