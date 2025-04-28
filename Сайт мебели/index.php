<?php get_header(); ?>
<style>
    .start__scroll-title::before {
        content: "";
        display: block;
        width: 2px;
        height: 120px;
        margin-top: 5px;
        background-image: url('<?php echo get_template_directory_uri(); ?>/assets/Img/Line_2.svg');
        background-repeat: no-repeat;
        background-position: center;
        margin-right: 17px;
    }

    .who-are-we__statistician-text::after {
        content: "";
        display: block;
        width: 20px;
        height: 20px;
        background-image: url('<?php echo get_template_directory_uri(); ?>/assets/Img/element-who-are-we-statistician-text.svg');
        background-repeat: no-repeat;
        background-position: center;
        margin-left: -10px;
        margin-top: 39px;
    }

    .who-are-we__list-items-block-bottom::after {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        transform: translate(555px, -216px);
        display: block;
        width: 667px;
        height: 589px;
        background-image: url('<?php echo get_template_directory_uri(); ?>/assets/Img/Element-1.svg');
        background-repeat: no-repeat;
        background-position: center;

    }

    .client__content-block::after {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        transform: translate(1024px, 0px);
        display: block;
        width: 667px;
        height: 938px;
        background-image: url('<?php echo get_template_directory_uri(); ?>/assets/Img/Client-element.svg');
        background-repeat: no-repeat;
        background-position: center;
    }

    .advantages__block-right::after {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        transform: translate(-212px, 684px);
        display: block;
        width: 147px;
        height: 337px;
        background-image: url('<?php echo get_template_directory_uri(); ?>/assets/Img/advantages-img.svg');
        background-repeat: no-repeat;
        background-position: center;
    }

    .project__card-left-photo {
        position: relative;
        max-width: 560px;
        width: 100%;
        min-height: 717px;
        background-image: url('<?php echo get_template_directory_uri(); ?>/assets/Img/project-img-1.png');
        background-position: left;
        background-size: cover;
        background-repeat: no-repeat;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 1;
    }

    .project__card-left-photo-2 {
        position: relative;
        max-width: 560px;
        width: 100%;
        min-height: 717px;
        background-image: url('<?php echo get_template_directory_uri(); ?>/assets/Img/project-img-2.png');
        background-position: left;
        background-size: cover;
        background-repeat: no-repeat;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 1;
    }

    .the-scheme-of-work__block-top::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        transform: translate(0px, 0px);
        display: block;
        width: 1px;
        height: 978px;
        background-image: url('<?php echo get_template_directory_uri(); ?>/assets/Img/the-scheme-of-work__line.svg');
        background-repeat: no-repeat;
        background-position: center;
    }

    .the-scheme-of-work__block-bottom::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        transform: translate(-378px, 112px);
        display: block;
        width: 380px;
        height: 1px;
        background-image: url('<?php echo get_template_directory_uri(); ?>/assets/Img/the-scheme-of-work-line-2.svg');
        background-repeat: no-repeat;
        background-position: center;
    }

</style>
<section class="start">
    <div class="container">
        <div class="start__center-block flex">
            <div class="start__content-block flex">
                <p class="start__ded">
                    дедовские столярные мастерские
                </p>
                <div class="start__mebel">
                    <div class="start__inline flex">
                        <span class="start__number">
                            01 </span>
                        <span class="start__number-1">
                            \ 05
                        </span>
                    </div>
                    <h1 class="start__title">
                        МЕСТО ВАШЕ<br>МЕБЕЛЬ НАША
                    </h1>
                    <strong class="start__bold">
                        <a class="start__link" href="#">
                            отправить запрос
                            <img class="start__img"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Img/Line.svg">
                        </a>
                    </strong>
                </div>
            </div>
            <ul class="start__list-social list-reset">
                <li class="start__list-item">
                    <a href="#" class="start__in">
                        in
                    </a>
                </li>
                <li class="start__list-item">
                    <a href="#" class="start__vk">
                        vk
                    </a>
                </li>
                <li class="start__list-item">
                    <a href="#" class="start__fb">
                        fb
                    </a>
                </li>
            </ul>
        </div>
        <div class="start__bottom-block flex">
            <img class="start__img-dsm" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Img/DSM.svg">
            <div class="start__link-download">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Img/download.svg">
                <p class="start__text-download">
                    скачать презентацию
                </p>
            </div>
            <div class="start__slider flex">
                <img class="start__img-ellipse"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Img/Ellipse_2.svg">
                <img class="start__img-ellipse"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Img/Ellipse_3.svg">
                <img class="start__img-ellipse"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Img/Ellipse_4.svg">
            </div>
            <div class="start__scroll">
                <!--img src="/Img/Line_2.svg" class="start__img-scroll"-->
                <p class="start__scroll-title">скролл вниз</p>
            </div>
            <div class="start__phone">
                <img class="start__img-iphone"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Img/icons8-телефон-67.png"
                    class="start__img-phone">
            </div>
        </div>
    </div>
</section>
</div>
<section class="who-are-we">
    <div class="container-a">
        <ul class="who-are-we__list-items flex list-reset">
            <div class="who-are-we__content-block flex">
                <li class="who-are-we__item">
                    <h1 class="who-are-we__title">
                        КТО МЫ
                    </h1>
                </li>
                <li class="who-are-we__item">
                    <h1 class="who-are-we__text">
                        Мы производственная компания, которая своей основной задачей видит помощь нашим
                        клиентам в реализации мебельных проектов любого уровня сложности
                    </h1>
                </li>
                <li class="who-are-we__item">
                    <strong class="who-are-we__detail">
                        <a class="who-are-we__link flex" href="#">
                            Подробнее <div class="who-are-we__line"></div>
                        </a>
                    </strong>
                </li>
            </div>
            <div class="who-are-we__statistician">
                <p class="who-are-we__statistician-text">
                    80% клиентов становятся нашими постоянными клиентами
                </p>
            </div>

        </ul>
        <ul class="who-are-we__list-items-block-bottom list-reset flex">
            <li class="who-are-we__item-element flex">
                <div class="who-are-we__block-number-img flex">
                    <img class="who-are-we__img"
                        src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Img/who-are-we__item-element-img.svg">
                    <h2 class="who-are-we__title-number">
                        120
                    </h2>
                </div>
                <p class="who-are-we__text-gray-card">
                    проектов успешно реализовано под ключ
                </p>
            </li>
            <li class="who-are-we__item-element flex">
                <div class="who-are-we__block-number-img flex">
                    <img class="who-are-we__img"
                        src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Img/who-are-we__item-element-img.svg">
                    <h2 class="who-are-we__title-number">
                        500
                    </h2>
                </div>
                <p class="who-are-we__text-gray-card">
                    квадратных метров
                    собственное производство
                </p>
            </li>
            <li class="who-are-we__item-element flex">
                <div class="who-are-we__block-number-img flex">
                    <img class="who-are-we__img"
                        src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Img/who-are-we__item-element-img.svg">
                    <h2 class="who-are-we__title-number">
                        80
                    </h2>
                </div>
                <p class="who-are-we__text-gray-card">
                    процентов клиентов возвращаются к нам снова
                </p>
            </li>
            <li class="who-are-we__item-element flex">
                <div class="who-are-we__block-number-img flex">
                    <img class="who-are-we__img"
                        src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Img/who-are-we__item-element-img.svg">
                    <h2 class="who-are-we__title-number">
                        15
                    </h2>
                </div>
                <p class="who-are-we__text-gray-card">
                    опытных профессионалов
                    в нашей сплочёной команде
                </p>
            </li>
            <li class="who-are-we__item-element flex">
                <div class="who-are-we__block-number-img flex">
                    <img class="who-are-we__img"
                        src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Img/who-are-we__item-element-img.svg">
                    <h2 class="who-are-we__title-number">
                        10
                    </h2>
                </div>
                <p class="who-are-we__text-gray-card">
                    лет работы на
                    мебельном рынке
                </p>
            </li>
            <li class="who-are-we__item-element flex">
                <div class="who-are-we__block-number-img flex">
                    <img class="who-are-we__img"
                        src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Img/who-are-we__item-element-img.svg">
                    <h2 class="who-are-we__title-number">
                        50
                    </h2>
                </div>
                <p class="who-are-we__text-gray-card">
                    материалов с которым мы работаем
                </p>
            </li>
        </ul>
    </div>
</section>
<section class="client">
    <div class="container-a">
        <ul class="client__content-block list-reset flex">
            <li class="client__item">
                <h1 class="client__title">
                    КЛИЕНТЫ
                </h1>
            </li>
            <li class="client__item">
                <p class="client__text">
                    Основные наши клиенты - это крупные игроки из сектора HORECA, но мы с удовольствием
                    работаем и с частными клиентами, и с компаниями из других областей.
                </p>
            </li>
        </ul>
        <ul class="client__content-block-bottom flex list-reset">
            <li class="client__item-card">
                <img class="client__img-card"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Img/Rectangle-52.svg">
            </li>
            <li class="client__item-card">
                <img class="client__img-card"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Img/Rectangle-52.svg">
            </li>
            <li class="client__item-card">
                <img class="client__img-card"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Img/Group-35.svg">
            </li>
            <li class="client__item-card">
                <img class="client__img-card"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Img/Group-36.svg">
            </li>
            <li class="client__item-card">
                <img class="client__img-card"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Img/Group-37.svg">
            </li>
            <li class="client__item-card">
                <img class="client__img-card"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Img/Rectangle-52.svg">
            </li>
        </ul>
        <div class="radio-buttons">
            <input type="radio" id="radio1" name="radio-group" value="option1" checked>
            <label for="radio1"></label>

            <input type="radio" id="radio2" name="radio-group" value="option2">
            <label for="radio2"></label>
        </div>
    </div>
</section>
<section class="advantages">
    <div class="container-c flex">
        <ul class="advantages__content-block list-reset flex">
            <li class="advantages__item">
                <h1 class="advantages__title">
                    ПРЕИМУЩЕСТВА
                </h1>
            </li>
            <li class="advantages__item">
                <p class="advantages__text">
                    Основные наши клиенты - это крупные игроки из сектора HORECA, но мы с удовольствием
                    работаем и с частными клиентами, и с компаниями из других областей.
                </p>
            </li>
        </ul>
        <ul class="advantages__block-right list-reset flex">
            <div class="advantages__one-card card-1">
                <li class="advantages__item-card flex">
                    <h2 class="advantages__title-number">
                        02
                    </h2>
                    <p class="advantages__text-specification">
                        Опыт и понимание специфики производства
                    </p>
                </li>
            </div>
            <div class="advantages__block-content content-1 flex">
                <li class="advantages__item-card flex">
                    <h2 class="advantages__title-number">
                        01
                    </h2>
                    <p class="advantages__text-specification">
                        Комплексная разработка проекта от идеи до монтажа
                    </p>
                </li>
                <li class="advantages__item-card flex">
                    <h2 class="advantages__title-number">
                        03
                    </h2>
                    <p class="advantages__text-specification">
                        Современное оборудование и провереные поставщики
                    </p>
                </li>
            </div>
            <div class="advantages__block-content card-2 flex">
                <li class="advantages__item-card flex">
                    <h2 class="advantages__title-number">
                        05
                    </h2>
                    <p class="advantages__text-specification">
                        Широкий спектр используемых в работе материалов
                    </p>
                </li>
                <li class="advantages__item-card flex">
                    <h2 class="advantages__title-number">
                        04
                    </h2>
                    <p class="advantages__text-specification">
                        Гарантия качества и соблюдение сроков
                    </p>
                </li>
            </div>
            <div class="advantages__one-card">
                <li class="advantages__item-card flex">
                    <h2 class="advantages__title-number">
                        06
                    </h2>
                    <p class="advantages__text-specification">
                        Проекты любого уровня сложности и объёма
                    </p>
                </li>
            </div>
        </ul>
    </div>
</section>
<section class="project">
    <div class="container-p">
        <div class="project__block-top flex">
            <ul class="project__list-items flex list-reset">
                <li class="project__item">
                    <h1 class="project__title">
                        ПРОЕКТЫ
                    </h1>
                </li>
                <li class="project__item">
                    <p class="project__text-specification">
                        Избранные проекты, которыми мы гордимся. Для тех кто хочет посмотреть полное
                        портфолио мы можем выслать презентацию с большим количеством проектов.
                    </p>
                </li>
            </ul>
            <div class="project__list-items-right flex">
                <strong class="project__text-bold">
                    ко всем проектам
                </strong>
                <img class="project__img"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Img/project-line.svg">
            </div>
        </div>

        <div class="project__gallery flex">
            <div class="project__block-card-1 flex">
                <div class="project__left-element flex">
                    <article class="project__card-left-photo">
                        <img class="project__img-card"
                            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Img/project__DSM_logo.svg">
                    </article>
                    <div class="project__text-describe flex">
                        <p class="project__text-number-1 vertical-text">
                            проект \ <span class="project__text-bold-one">01</span>
                        </p>
                        <p class="project__text-number-2 vertical-text">
                            #cafe #pizza
                        </p>
                    </div>
                </div>
                <h3 class="project__title-cafe flex">
                    CAPITO CAFE
                </h3>
            </div>
            <div class="project__block-card-2 block-card-right flex">
                <div class="project__text-describe flex">
                    <p class="project__text-number-3 vertical-text">
                        проект \ <span class="project__text-bold-one">01</span>
                    </p>
                    <p class="project__text-number-4 vertical-text">
                        #cafe #pizza
                    </p>
                </div>
                <article class="project__card-left-photo-2">

                </article>
            </div>
        </div>
    </div>
</section>
<section class="the-scheme-of-work">
    <div class="container-p">
        <div class="the-scheme-of-work__block-top flex">
            <ul class="the-scheme-of-work__list-items flex list-reset">
                <li class="the-scheme-of-work__item">
                    <h1 class="the-scheme-of-work__title">
                        СХЕМА РАБОТЫ
                    </h1>
                </li>
                <li class="the-scheme-of-work__item">
                    <p class="the-scheme-of-work__text-specification">
                        За много лет работы на рынке мы выработали подходы, которые позволяют нам
                        экономить время производства без ущерба качества.
                    </p>
                </li>
            </ul>
            <div class="the-scheme-of-work__list-items-right flex">
                <p class="the-scheme-of-work__text-normal">
                    В среднем проекты длятся от 1 до 3 месяцев, но у нас был рекорд 6 месяцев
                </p>
            </div>
        </div>
        <div class="the-scheme-of-work__block-bottom flex">
            <ul class="the-scheme-of-work__list-items-number flex list-reset">
                <li class="the-scheme-of-work__item-number flex">
                    <h2 class="the-scheme-of-work__title-number">
                        01
                    </h2>
                    <p class="the-scheme-of-work__text-description-1">
                        Заявка на сайте <br>
                        или по телефону
                    </p>
                </li>
                <li class="the-scheme-of-work__item-number flex">
                    <h2 class="the-scheme-of-work__title-number">
                        03
                    </h2>
                    <p class="the-scheme-of-work__text-description-2">
                        Заключение <br>договора
                    </p>
                </li>
                <li class="the-scheme-of-work__item-number flex">
                    <h2 class="the-scheme-of-work__title-number">
                        05
                    </h2>
                    <p class="the-scheme-of-work__text-description-2">
                        Согласование <br> проекта
                    </p>
                </li>
            </ul>
            <img class="the-scheme-of-work__img-indicator"
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Img/the-scheme-of-work-img.svg">
            <ul class="the-scheme-of-work__list-items-number-line-2 flex list-reset">
                <li class="the-scheme-of-work__item-number-line-2 flex">
                    <h2 class="the-scheme-of-work__title-number">
                        02
                    </h2>
                    <p class="the-scheme-of-work__text-description-1">
                        Коммерческое <br>предложение
                    </p>
                </li>
                <li class="the-scheme-of-work__item-number-line-2 flex">
                    <h2 class="the-scheme-of-work__title-number">
                        04
                    </h2>
                    <p class="the-scheme-of-work__text-description-2">
                        Разработка <br> проекта
                    </p>
                </li>
                <li class="the-scheme-of-work__item-number-line-2 flex">
                    <h2 class="the-scheme-of-work__title-number title-end">
                        06
                    </h2>
                    <p class="the-scheme-of-work__text-description-2 description-end">
                        Производство <br> и монтаж
                    </p>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="our-mission">
    <div class="container-o">
        <ul class="our-mission__list-items list-reset flex">
            <li class="our-mission__item mission flex">
                <h1 class="our-mission__title">
                    НАША МИССИЯ
                </h1>
                <p class="our-mission__text-specification">
                    Мы производственная компания, которая своей основной задачей видит помощь нашим
                    клиентам в реализации мебельных проектов любого уровня сложности
                </p>
            </li>
            <li class="our-mission__item mission flex">
                <img class="our-mission__img-figure"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Img/our-mission-figure.svg">
            </li>
        </ul>
    </div>
</section>
<section class="responsibility">
    <div class="container-o">
        <ul class="responsibility__list-items list-reset flex">
            <li class="responsibility__item mission flex">
                <h1 class="responsibility__title">
                    ОТВЕТСТВЕННОСТЬ
                </h1>
            </li>
            <li class="responsibility__item mission flex">
                <p class="responsibility__text-specification">
                    Мы производственная компания, которая своей основной задачей видит помощь нашим
                    клиентам в реализации мебельных проектов любого уровня сложности
                </p>
            </li>
        </ul>
    </div>
</section>
<section class="team">
    <div class="container-t">
        <ul class="team__list-items list-reset flex">
            <li class="team__item flex">
                <h1 class="team__title">
                    КОМАНДА
                </h1>
            </li>
            <li class="team__item mission flex">
                <p class="responsibility__text-specification">
                    Наши основные плюсы это наша команда и наши довольные клиенты, которые ценят нас за
                    наш комплексный подход.
                </p>
            </li>
        </ul>
        <ul class="team__list-items-name list-reset flex">
            <li class="team__item-name">
                <img class="team__img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Img/1.jpg">
                <p class="team__name">
                    АЛЕКСАНДР
                </p>
                <p class="team__post">
                    Директор
                </p>
            </li>
            <li class="team__item-name">
                <img class="team__img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Img/2.jpg">
                <p class="team__name">
                    ЭЛЬДАР
                </p>
                <p class="team__post">
                    Мастер цеха
                </p>
            </li>
            <li class="team__item-name">
                <img class="team__img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Img/3.jpg">
                <p class="team__name">
                    СЕЛИСТРАН
                </p>
                <p class="team__post">
                    Мастер
                </p>
            </li>
            <li class="team__item-name">
                <img class="team__img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Img/pm69-20-frederichanusch.jpg">
                <p class="team__name">
                    МАТВЕЙ
                </p>
                <p class="team__post">
                    Мастер
                </p>
            </li>
            <li class="team__item-name">
                <img class="team__img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Img/5-VQdFR1Gw0.jpg">
                <p class="team__name">
                    МАРИНА
                </p>
                <p class="team__post">
                    Маляр
                </p>
            </li>
            <li class="team__item-name">
                <img class="team__img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Img/6.jpg">
                <p class="team__name">
                    Ольга
                </p>
                <p class="team__post">
                    Менеджер
                </p>
            </li>
        </ul>
    </div>
</section>
<?php get_footer(); ?>