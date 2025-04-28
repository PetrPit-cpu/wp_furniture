<footer class="contact-us">

    <div class="container-u">
        <div class="conact-us__list-items flex">
            <h1 class="conact-us__title">
                СВЯЗЬ С НАМИ
            </h1>
            <p class="conact-us__title-about">
                Если вы хотите прислать проект на оценку или<br> просто у Вас возникли вопросы, то
                воспользуйтесь<br> формой ниже и мы как можно быстрее вам ответим.
            </p>
        </div>
        <div class="contact-us__form-group form-label-1 flex">
            <label class="contact-us__name flex" for="name">Имя *
                <input type="text" id="name" name="name" required />
            </label>
            <label class="contact-us__name flex" for="company">Компания *
                <input type="text" id="company" name="company" />
            </label>

        </div>

        <div class="contact-us__form-group  form-label-2 flex">
            <label class="contact-us__name flex" for="Email">Email *
                <input type="email" id="email" name="email" required />
            </label>
            <label class="contact-us__name flex" for="phone">Телефон *
                <input type="tel" id="phone" name="phone" required />
            </label>
        </div>
        <textarea class="message__1" name="message" placeholder="Введите текст сообщения"></textarea>

        <div class="checkbox-label flex">
            <div class="contact-us__block">
                <input type="checkbox" name="conset" value="yes" required>
                <span class="contact-us__checkbox">Я согласен на обработку персональных данных</span>
            </div>

            <div class="contact-us__block-2 flex">

                <img class="contact-us__img-fails" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Img/Skrepka.svg">
                <label class="contact-us__file-label" style="text-decoration: none" ;>
                    <input class="contact-us__file-input" type="file" style="display: none; text-decoration: none;">
                    <span class="contact-us__text-files">Приложите файл</span>
                    <span class="contact-us__text">(не более 10 мб)</span>
                </label>
            </div>
        </div>
        <button class="contact-us__button btn flex">
            отправить
            <img class="contact-us__img-to-send" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Img/button-line.svg">
        </button>
    </div>
</footer>
</div>
</main>
</div>
<?php wp_footer(); ?>
</body>

</html>