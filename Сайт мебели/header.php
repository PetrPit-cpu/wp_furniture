<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DSM</title>
    <link rel="stylesheet" href="/Css/style.css">
    <link rel="stylesheet" href="https://www.fontsquirrel.com/fonts/bebas-neue">
    <?php wp_head(); ?>
    <!-- Остальные метаданные и скрипты -->
    <style>
        /* Фоновое изображение */
        .background::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("<?php echo get_template_directory_uri(); ?>/assets/Img/Fon-1.png");
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            z-index: -2;
        }
    </style>
</head>

<body>
    <div class="page__container">
        <main class="main">
            <div class="wrapper">
                <div class="background">
                    <header class="header">
                        <div class="container">
                            <div class="header__block-list flex">
                                <div class="header__logo">
                                    <a href="<?php echo esc_url(home_url('/')); ?>" class="header__logo-link">
                                        <img class="header__img-logo"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/Img/D.svg"
                                            alt="<?php bloginfo('name'); ?> logo">
                                    </a>
                                </div>

                                <nav class="header__nav">
                                    <ul class="header__list-items flex list-reset">

                                        <li class="header__item">
                                            <a class="active" href="#">
                                                главная
                                            </a>
                                        </li>
                                        <li class="header__item">
                                            <a href="#">
                                                о нас
                                            </a>
                                        </li>
                                        <li class="header__item">
                                            <a href="#">
                                                проекты
                                            </a>
                                        </li>
                                        <li class="header__item">
                                            <a href="#">
                                                производство
                                            </a>
                                        </li>
                                        <li class="header__item">
                                            <a href="#">
                                                контакты
                                            </a>
                                        </li>
                                        <li class="header__item-1">
                                            <a href="#">
                                                +7-963-656-2164
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </header>