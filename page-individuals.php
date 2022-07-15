<?php
/*
Template Name: individuals
*/
?>

<?php get_header(); ?>
<main>
        <div class="container">
            <div class="breadcrumbs">
                <a class=" breadcrumbs__item breadcrumbs__item-link" href="../main.html">Главная</a>
                <span>
                    <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.158203 8.825L3.97487 5L0.158203 1.175L1.3332 0L6.3332 5L1.3332 10L0.158203 8.825Z"
                            fill="#616161" />
                    </svg>
                </span>
                <a class="breadcrumbs__item breadcrumbs__item-link" href="about-fund.html">О фонде</a>
                <span>
                    <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.158203 8.825L3.97487 5L0.158203 1.175L1.3332 0L6.3332 5L1.3332 10L0.158203 8.825Z"
                            fill="#616161" />
                    </svg>
                </span>
                <span class="breadcrumbs__item breadcrumbs__item-currant">Физические лица</span>
            </div>
            <section class="individuals">
                <div class="individuals_cards">
                    <div class="individuals_card-item blc_finance">
                        <div class="card_item-inner">
                            <h2 class="individuals_title">Финансовая помощь</h2>
                            <div class="descr_wrappe">
                                <p class="individuals_descr">
                                    Взносы наших надежных благотворителей превращаются в лекарства и
                                    расходные
                                    материалы, оплату обследований и лечение, которые дети не могут получить бесплатно
                                </p>
                            </div>
                            <a href="#" class="individuals_link btn-individ">Далее</a>
                        </div>
                    </div>
                    <div class="individuals_card-item blc_birthday">
                        <div class="card_item-inner">
                            <h2 class="individuals_title">Дни рождения</h2>
                            <div class="descr_wrappe">
                                <p class="individuals_descr">
                                    Празднуйте свои дни рождении с нами, даруя детям праздник. Также
                                    можем вместе
                                    организовать дни рождении детей.
                                    Добавьте чуточку волшебства в их жизнь!
                                </p>
                            </div>
                            <a href="#" class="individuals_link2 btn-individ">Далее</a>
                        </div>
                    </div>
                    <div class="individuals_card-item blc_shopping">
                        <div class="card_item-inner">
                            <h2 class="individuals_title">Добрые покупки</h2>
                            <div class="descr_wrappe">
                                <p class="individuals_descr">
                                    Вы можете сделать благотворительные покупки в качестве подарка и
                                    средств
                                    постоянных нужд для детей. Купите дары для спасения и для помощи детям.</p>
                            </div>
                            <a href="#" class="individuals_link3 btn-individ">Далее</a>
                        </div>
                    </div>
                    <div class="individuals_card-item blc_things">
                        <div class="card_item-inner">
                            <h2 class="individuals_title">Помощь вещами</h2>
                            <div class="descr_wrappe">
                                <p class="individuals_descr">
                                    Это приятные мелочи или вещи приносящие пользу: книги, диски,
                                    наборы для
                                    творчества, тетрадки, игрушки и другие предметы. Подарите своим вещам ВТОРОЕ
                                    ДЫХАНИЕ!
                                </p>
                            </div>
                            <a href="#" class="individuals_link4 btn-individ">Далее</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- window -->
        <div class="btn-modal">
            <div class="all-modal">
                <form>
                    <div class="individuals_item-blc">
                        <h2 class="individuals_title-blc"> Финансовая помощь</h2>
                        <p class="individuals_descr-blc">Взносы наших надежных благотворителей превращаются в лекарства
                            и
                            расходные
                            материалы, оплату обследований и лечение, которые дети не могут получить бесплатно.</p>
                    </div>
                    <ul class="modal__list-blc">
                        <li class="modal__item-blc">
                            <img src="<?php bloginfo('template_url'); ?>/assets/main/footer-img/Pin_alt_fill.svg" class="modal-geo">
                            г. Бишкек, бул. Молодой Гвардии 71а
                        </li>
                        <li class="modal__item-blc">
                            <img src="<?php bloginfo('template_url'); ?>/assets/main/footer-img/Message_alt_fill.svg" class="modal-gmail">
                            <a class="modal__link-blc" href="mailto:childrenshospice.kg@gmail.com">
                                childrenshospice.kg@gmail.com
                            </a>
                        </li>
                        <li class="modal__item-blc">
                            <a class="modal__link-blc" href="tel:+996550050440">
                                <div class="modal__link-phone">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/main/footer-img/Phone_fill.svg" class="modal-phone">
                                    <p class="phone-number-blc">+996 (550) 050440</br>
                                        +996 (559) 647457
                                    </p>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <a href="https://dev.kelechek.digital/hospicekg/donation/" class="modal__btn">ПОМОЧЬ</a>
                </form>
            </div>
            <button class="off">X</button>
        </div>
        <div class="btn-modal2">
            <div class="all-modal2">
                <form>
                    <div class="individuals_item-blc2">
                        <h2 class="individuals_title-blc2">Дни рождения</h2>
                        <p class="individuals_descr-blc2">Празднуйте свои дни рождении с нами, даруя детям праздник.
                            Также
                            можем вместе
                            организовать дни рождении детей. <br>
                            Добавьте чуточку волшебства в их жизнь! </p>
                    </div>
                    <ul class="modal__list-blc2">
                        <li class="modal__item-blc2">
                            <img src="<?php bloginfo('template_url'); ?>/assets/main/footer-img/Pin_alt_fill.svg" class="modal-geo2">
                            г. Бишкек, бул. Молодой Гвардии 71а
                        </li>
                        <li class="modal__item-blc2">
                            <img style="color: #775CA6;" src="<?php bloginfo('template_url'); ?>/assets/main/footer-img/Message_alt_fill.svg"
                                class="modal-gmail2">
                            <a class="modal__link-blc2" href="mailto:childrenshospice.kg@gmail.com">
                                childrenshospice.kg@gmail.com
                            </a>
                        </li>
                        <li class="modal__item-blc2">
                            <a class="modal__link-blc2" href="tel:+996550050440">
                                <div class="modal__link-phone2">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/main/footer-img/Phone_fill.svg" class="modal-phone2">
                                    <p class="phone-number-blc2">+996 (550) 050440</br>
                                        +996 (559) 647457
                                    </p>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <a href="https://dev.kelechek.digital/hospicekg/donation/" class="modal__btn2">ПОМОЧЬ</a>
                </form>
            </div>
            <button class="off2">X</button>
        </div>
        <div class="btn-modal3">
            <div class="all-modal3">
                <form>
                    <div class="individuals_item-blc3">
                        <h2 class="individuals_title-blc3">Добрые покупки</h2>
                        <p class="individuals_descr-blc">
                            Вы можете сделать благотворительные покупки в качестве подарка и
                            средств
                            постоянных нужд для детей. Купите дары для спасения и для помощи детям.</p>
                    </div>
                    <ul class="modal__list-blc3">
                        <li class="modal__item-blc3">
                            <img src="<?php bloginfo('template_url'); ?>/assets/main/footer-img/Pin_alt_fill.svg" class="modal-geo3">
                            г. Бишкек, бул. Молодой Гвардии 71а
                        </li>
                        <li class="modal__item-blc3">
                            <img style="color: #775CA6;" src="<?php bloginfo('template_url'); ?>/assets/main/footer-img/Message_alt_fill.svg"
                                class="modal-gmail3">
                            <a class="modal__link-blc3" href="mailto:childrenshospice.kg@gmail.com">
                                childrenshospice.kg@gmail.com
                            </a>
                        </li>
                        <li class="modal__item-blc3">
                            <a class="modal__link-blc3" href="tel:+996550050440">
                                <div class="modal__link-phone3">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/main/footer-img/Phone_fill.svg" class="modal-phone3">
                                    <p class="phone-number-blc3">+996 (550) 050440</br>
                                        +996 (559) 647457
                                    </p>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <a href="https://dev.kelechek.digital/hospicekg/donation/" class="modal__btn3">ПОМОЧЬ</a>
                </form>
            </div>
            <button class="off3">X</button>
        </div>
        <div class="btn-modal4">
            <div class="all-modal4">
                <form>
                    <div class="individuals_item-blc4">
                        <h2 class="individuals_title-blc4">Помощь вещами</h2>
                        <p class="individuals_descr-blc4">
                            Это приятные мелочи или вещи приносящие пользу: книги, диски,
                            наборы для
                            творчества, тетрадки, игрушки и другие предметы. <br> Подарите своим вещам ВТОРОЕ ДЫХАНИЕ!
                        </p>
                    </div>
                    <ul class="modal__list-blc4">
                        <li class="modal__item-blc4">
                            <img src="<?php bloginfo('template_url'); ?>/assets/main/footer-img/Pin_alt_fill.svg" class="modal-geo4">
                            г. Бишкек, бул. Молодой Гвардии 71а
                        </li>
                        <li class="modal__item-blc4">
                            <img style="color: #775CA6;" src="<?php bloginfo('template_url'); ?>/assets/main/footer-img/Message_alt_fill.svg"
                                class="modal-gmail4">
                            <a class="modal__link-blc4" href="mailto:childrenshospice.kg@gmail.com">
                                childrenshospice.kg@gmail.com
                            </a>
                        </li>
                        <li class="modal__item-blc4">
                            <a class="modal__link-blc4" href="tel:+996550050440">
                                <div class="modal__link-phone4">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/main/footer-img/Phone_fill.svg" class="modal-phone4">
                                    <p class="phone-number-blc4">+996 (550) 050440</br>
                                        +996 (559) 647457
                                    </p>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <a href="https://dev.kelechek.digital/hospicekg/donation/" class="modal__btn4">ПОМОЧЬ</a>
                </form>
            </div>
            <button class="off4">X</button>
        </div>
<?php get_footer(); ?>