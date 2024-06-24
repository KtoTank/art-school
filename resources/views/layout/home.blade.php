<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>

    <title>ДШИ №6</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
          rel="stylesheet">

    <link href="public/favicon.ico" rel="icon" type="image/x-icon"/>

    <!-- Styles -->
    <link rel="stylesheet" href="public/css/styles.css"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

    <script src="public/js/main.js" defer></script>
</head>
<body>
<div class="container">
    {{-- Header --}}
    <header class="header">
        <div class="container">
            <div class="header__wrapper header__wrapper--top wrapper">
                <div class="header__wrap wrapper">
                    <div class="logo">
                        <a href="/">
                            <img loading="lazy" src="public/img/logo.svg" alt="логотип">
                        </a>
                    </div>
                    <nav class="nav">
                        <ul class="wrapper">
                            <li class="nav__item-li"><a href="#about">О нас</a></li>
                            <li class="nav__item-li"><a href="#courses">Курсы</a></li>
                            <li class="nav__item-li"><a href="#gallery">Галерея</a></li>
                            <li class="nav__item-li"><a href="#teachers">Педагоги</a></li>
                            <li class="nav__item-li"><a href="#messages">Отзывы</a></li>
                            <li class="nav__item-li"><a href="#footer">Контакты</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="header__wrap wrapper">
                    <div class="header__item tel">
                        <a href="tel:+7 381 236 39 91 ">+7 381 236 39 91</a>
                    </div>
                    <div class="header__item">
                        <div class="social wrapper">
                            <div class="social__item">
                                <a href="">
                                    <img loading="lazy" src="public/img/social/whatsApp.svg" alt="whatsApp">
                                </a>
                            </div>
                            <div class="social__item">
                                <a href="">
                                    <img loading="lazy" src="public/img/social/vk.svg" alt="вконтакте">
                                </a>
                            </div>
                            <div class="social__item">
                                <a href="">
                                    <img loading="lazy" src="public/img/social/telegram.svg" alt="telegram">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header__wrapper header__wrapper--bottom">
                <div class="header__address">
                    <p>Омск, ул. Богдана Хмельницкого, 144</p>
                </div>
            </div>
        </div>
    </header>
    {{-- End Header--}}
    <main class="main">
        @include('hero')
        @include('specification')
        @include('questions')
        @include('about')
        @include('courses')
        @include('gallery')
        @include('pros')
        @include('teachers')
        @include('messages')
    </main>
    {{-- Footer--}}
    <footer id="footer" class="footer">
        <div class="footer__wrapper footer__wrapper--top">
            <iframe
                src="https://yandex.ru/map-widget/v1/?um=constructor%3A62462b15be63ef12b188a8cdf0060a9b9ce40220e31428b5a5bc39fdb7ff8466&amp;source=constructor"
                width="100%" height="500" frameborder="0" style="border-radius: 2rem"></iframe>
        </div>
        <div class="footer__wrapper footer__wrapper--bottom ">
            <div class="footer__inner-bottom wrapper">
                <div class="wrapper">
                    <div class="footer__item footer__item--wrap">
                        <div class="footer__logo">
                            <a href="/">
                                <img loading="lazy" src="public/img/footer/footer--logo.svg" alt="логотип">
                            </a>
                        </div>
                    </div>
                    <div class="footer__item footer__item--wrap">
                        <div class="footer__title">
                            <h3>
                                Детская школа искусств № 6
                                <br>
                                имени Е. Ф. Светланова
                            </h3>
                        </div>
                        <div class="footer__wrap">
                            <div class="footer__tel">
                                <a href="tel:+7 381 236 39 91 ">+7 381 236 39 91</a>
                            </div>
                            <div class="footer__email">
                                <a href="mailto:dchi6@mail.ru">dchi6@mail.ru</a>
                            </div>
                            <div class="footer__address">
                                <a href="">Омск, ул. Богдана Хмельницкого, 144</a>
                            </div>
                        </div>
                        <div class="footer__item">
                            <div class="social wrapper">
                                <div class="social__item">
                                    <a href="">
                                        <img loading="lazy" src="public/img/social/whatsApp.svg" alt="whatsApp">
                                    </a>
                                </div>
                                <div class="social__item">
                                    <a href="">
                                        <img loading="lazy" src="public/img/social/vk.svg" alt="вконтакте">
                                    </a>
                                </div>
                                <div class="social__item">
                                    <a href="">
                                        <img loading="lazy" src="public/img/social/telegram.svg" alt="telegram">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer__item footer__item--wrap">
                    <nav class="nav">
                        <ul>
                            <li class="nav__item-li"><a href="#about">О нас</a></li>
                            <li class="nav__item-li"><a href="#courses">Курсы</a></li>
                            <li class="nav__item-li"><a href="#gallery">Галерея</a></li>
                            <li class="nav__item-li"><a href="#teachers">Педагоги</a></li>
                            <li class="nav__item-li"><a href="#messages">Отзывы</a></li>
                            <li class="nav__item-li"><a href="#footer">Контакты</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </footer>
    {{-- End Footer--}}
</div>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</body>
</html>
