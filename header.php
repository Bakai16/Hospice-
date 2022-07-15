<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
  <link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
  <?php wp_head(); ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/libs/slick/slick-theme.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/libs/slick/slick.css">
  
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/styles.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body <?php body_class(); ?>>
<body>
   <header>
      <div class="container">
         <div class="header-inner">
            <a class="logo" href="https://dev.kelechek.digital/hospicekg">
               <img class="logo__img" src="<?php bloginfo('template_url'); ?>/assets/common/logo-hospice-header.svg" alt="logo">
               <p class="logo__title">Первый Детский <br> Хоспис</p>
            </a>
            <nav class="nav">
               <?php wp_nav_menu(array('container_class' => '','menu'=>'Main')); ?>
               <a class="nav__link-btn" href="https://dev.kelechek.digital/hospicekg/donation/">ПОЖЕРТВОВАТЬ</a>
               <div class="burger">
                  <span></span>
               </div>
            </nav>
         </div>
      </div>
   </header>
  
