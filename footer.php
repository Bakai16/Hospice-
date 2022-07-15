      <!-- CallToAction -->
      <div class="container">
        <div class="blc-call-to-action">
            <div class="call-to-action-inner">
                <div class="call-to-action-inner__money">
                    <span class="call-to-action-inner__money__item">100</span>
                    <span class="call-to-action-inner__money__item">200</span>
                    <span class="call-to-action-inner__money__item">500</span>
                    <span class="call-to-action-inner__money__item">1000</span>
                    <span class="call-to-action-inner__money__item call-to-action-inner__other-money__item">Другая
                        сумма</span>
                </div>
                <a class="call-to-action-inner__btn" href="https://dev.kelechek.digital/hospicekg/donation/">Хочу пожертвовать</a>
            </div>
        </div>
    </div>
    <footer class="footer">
      <div class="container">
         <div class="footer__inner">
            <div class="footer__inner-leftside">
               <a class="footer__logo" href="main.html">
                  <img src="<?php bloginfo('template_url'); ?>/assets/main/logo-footer.svg" alt="logo">
               </a>
               <p class="footer__text">Общественный Благотворительный
                  <br> Фонд «Первый детский хоспис»
               </p>
               <p class="footer__social-title">Мы в социальных сетях:</p>
               <ul class="footer__social">
                  <li class="footer__social-item">
                     <a class="footer__social-link" href="#">
                        <img src="<?php bloginfo('template_url'); ?>/assets/main/footer-img/Telegram.svg" class="footer__social_img1">
                     </a>
                  </li>
                  <li class="footer__social-item">
                     <a class="footer__social-link" href="#">
                        <img src="<?php bloginfo('template_url'); ?>/assets/main/footer-img/Whatsapp.svg" class="footer__social_img2">
                     </a>
                  </li>
                  <li class="footer__social-item"><a class="footer__social-link" href="#">
                        <img src="<?php bloginfo('template_url'); ?>/assets/main/footer-img/ins.svg" class="footer__social_img3">
                     </a>
                  </li>
                  <li class="footer__social-item">
                     <a class="footer__social-link" href="#">
                        <img src="<?php bloginfo('template_url'); ?>/assets/main/footer-img/Youtube.svg" class="footer__social_img4">
                     </a>
                  </li>
                  <li class="footer__social-item footer__social-item-facebook">
                     <a class="footer__social-link" href="#">
                        <img src="<?php bloginfo('template_url'); ?>/assets/main/footer-img/Facebook.svg" class="footer__social_img5">
                     </a>
                  </li>
               </ul>
            </div>

            <div class="footer__inner-rightside">
               <div class="requisites">
                  <h1 class="footer__rightside-title">РЕКВИЗИТЫ</h1>
                  <ul class="footer__rightside-list">
                     <li class="footer__rightside-item requisites__item">ОБФ "Первый детский хоспис"</li>
                     <li class="footer__rightside-item requisites__item">ИНН 01502201610205 </li>
                     <li class="footer__rightside-item requisites__item">ОКПО 29400184</li>
                     <li class="footer__rightside-item requisites__item">ОАО Банк « Бай Тушум»</li>
                     <li class="footer__rightside-item requisites__item">KGS 1371040001440439</li>
                     <li class="footer__rightside-item requisites__item">БИК 137001</li>
                     <li class="footer__rightside-item requisites__item">Optima 4169615189595451</li>
                     <li class="footer__rightside-item requisites__item">ЗАО "КИКБ"</li>
                     <li class="footer__rightside-item requisites__item">Расчетный Счет KGS: 1280096037288596
                     </li>
                     <li class="footer__rightside-item requisites__item">БИК 128009</li>
                     <li class="footer__rightside-item requisites__item">Элсом 0559647457</li>
                     <li class="footer__rightside-item requisites__item">О деньги 0707040602</li>
                     <li class="footer__rightside-item requisites__item"> MegaPay 0559647457</li>
                     <li class="footer__rightside-item">
                        <a class="footer__rightside-link" href="https://paypal.me/hospicekgz">PayPal
                           https://paypal.me/hospicekgz</a>
                     </li>

                  </ul>
               </div>
               <div class="info">
                  <h1 class="footer__rightside-title">ИНФОРМАЦИЯ</h1>
                  <?php
                     wp_nav_menu( [
                        'menu'            => 'Footer-Menu',
                        'container'       => false,
                        'menu_class'      => 'footer__rightside-list',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'items_wrap'      => '<ul class="footer__rightside-list">%3$s</ul>',
                        'depth'           => 1,
                     ] );
                  ?>
               </div>
               <div class="contacts">
                  <a class="footer__btn" href="./pages/donation.html">РЕКВИЗИТЫ</a>
                  <h1 class="footer__rightside-title contact-title">КОНТАКТЫ</h1>
                  <ul class="footer__rightside-list">
                     <li class="footer__rightside-item contact-info contact-pin">
                        <img class="footer-geo" src="<?php bloginfo('template_url'); ?>/assets/main/geo.svg">
                        <a class="footer__rightside-link" href="#">г. Бишкек, бул. Молодой Гвардии 71</a>
                     </li>
                     <li class="footer__rightside-item contact-info contact-mail">
                        <img class="footer-gmail" src="<?php bloginfo('template_url'); ?>/assets/main/gmail.svg">
                        <a class="footer__rightside-link"
                           href="mailto:childrenshospice.kg@gmail.com">childrenshospice.kg@gmail.com</a>
                     </li>
                     <li class="footer__rightside-item contact-info contact-phone">
                        <img class="footer-phone" src="<?php bloginfo('template_url'); ?>/assets/main/phone.svg">
                        <a class="footer__rightside-link" href="tel:+996550050440">
                           <p class="phone-number">+996 (550) 050440</p>
                           <p class="phone-number"> +996 (559) 647457</p>
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </footer>



   <!-- Swiper JS -->
   <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


   <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
   <script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
   <script src="<?php bloginfo('template_url'); ?>/js/owl.carousel.min.js"></script>
   <script src="<?php bloginfo('template_url'); ?>/js/volunteering.js"></script>
   <script src="<?php bloginfo('template_url'); ?>/js/slick.min.js"></script>
   <script src="<?php bloginfo('template_url'); ?>/js/app.js"></script>

<?php wp_footer(); ?>
</body>
</html>
